<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use MSBios\Guard\Resource\Entity;

/**
 * Class Permission
 * @package MSBios\Guard\Resource\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="acl_t_permissions")
 * @ORM\MappedSuperclass
 */
class Permission extends Entity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Resource
     *
     * @ORM\ManyToOne(targetEntity="Resource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resourceid", referencedColumnName="id")
     * })
     */
    private $resource;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=200, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Resource
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @param Resource $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
