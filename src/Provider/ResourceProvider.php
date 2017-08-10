<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Provider;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\PersistentCollection;
use MSBios\Guard\Acl\Resource;
use MSBios\Guard\Provider\ProviderInterface;
use MSBios\Guard\Provider\ResourceProviderInterface;
use MSBios\Guard\Resource\Entity\Resource as ResourceEntity;
use Zend\Stdlib\ArrayUtils;

/**
 * Class ResourceProvider
 * @package MSBios\Guard\Resource\Provider
 */
class ResourceProvider implements ResourceProviderInterface, ProviderInterface
{
    /** @var  EntityManager */
    protected $dem;

    /** @var */
    protected $resources;

    /**
     * ResourceProvider constructor.
     * @param EntityManager $dem
     */
    public function __construct(EntityManager $dem)
    {
        $this->dem = $dem;
    }

    /**
     * @param ResourceEntity $entity
     * @param PersistentCollection $children
     * @param Resource|null $parent
     * @return array
     */
    protected function loadResource(ResourceEntity $entity, PersistentCollection $children, Resource $parent = null)
    {
        /** @var array $resources */
        $resources = [];

        /** @var Resource $resource */
        $resource = new Resource($entity->getCode(), $parent);
        $resources[] = $resource;

        if ($children->count()) {
            /** @var ResourceEntity $child */
            foreach ($children as $child) {
                $resources = ArrayUtils::merge(
                    $resources,
                    $this->loadResource($child, $child->getChildren(), $resource)
                );
            }
        }

        return $resources;
    }

    /**
     * @return mixed
     */
    public function getResources()
    {
        if (is_null($this->resources)) {

            /** @var array $results */
            $results = $this->dem
                ->getRepository(ResourceEntity::class)
                ->findBy(['parent' => null]);

            /** @var array $resources */
            $resources = [];

            /** @var ResourceEntity $entity */
            foreach ($results as $entity) {
                $resources = ArrayUtils::merge($resources, $this->loadResource(
                    $entity,
                    $entity->getChildren()
                ));
            }

            $this->resources = $resources;
        }

        return $this->resources;
    }
}
