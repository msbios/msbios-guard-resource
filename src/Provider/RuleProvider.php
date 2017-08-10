<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Provider;

use Doctrine\Common\Util\Debug;
use Doctrine\ORM\EntityManager;
use MSBios\Guard\Provider\ProviderInterface;
use MSBios\Guard\Provider\RuleProviderInterface;
use MSBios\Guard\Resource\DBAL\Types\RuleType;
use MSBios\Guard\Resource\Entity\Permission;
use MSBios\Guard\Resource\Entity\Role;
use MSBios\Guard\Resource\Entity\Rule;
use Zend\Config\Config;

/**
 * Class RuleProvider
 * @package MSBios\Guard\Resource\Provider
 */
class RuleProvider implements RuleProviderInterface, ProviderInterface
{
    /** @var  EntityManager */
    protected $dem;

    /** @var */
    protected $rules = [
        'allow' => [],
        'deny' => [],
    ];

    /**
     * ResourceProvider constructor.
     * @param EntityManager $dem
     */
    public function __construct(EntityManager $dem)
    {
        $this->dem = $dem;
    }

    /**
     * @return array|Config
     */
    public function getRules()
    {

        if (! $this->rules instanceof Config) {
            /** @var array $results */
            $results = $this->dem
                ->getRepository(Rule::class)
                ->findAll();

            /** @var Rule $entity */
            foreach ($results as $entity) {

                /** @var array $rule */
                $rule = [];

                /** @var array $roles */
                $roles = [];

                /** @var Role $role */
                foreach ($entity->getRoles() as $role) {
                    $roles[] = $role->getCode();
                }

                $rule[] = $roles;
                $rule[] = $entity->getResource()
                    ->getCode();

                /** @var array $permissions */
                $permissions = [];

                /** @var Permission $permission */
                foreach ($entity->getPermissions() as $permission) {
                    $permissions[] = $permission->getCode();
                }

                $rule[] = $permissions;

                $this->rules[mb_strtolower($entity->getAccess())][] = $rule;
            }

            $this->rules = new Config($this->rules);
        }

        return $this->rules;
    }
}
