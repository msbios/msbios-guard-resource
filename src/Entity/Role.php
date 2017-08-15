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
 * Class Role
 * @package MSBios\Guard\Resource\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="acl_t_roles")
 * @ORM\MappedSuperclass
 */
class Role extends Entity
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
     * @var Role
     *
     * @ORM\ManyToOne(targetEntity="MSBios\Guard\Resource\Entity\Role")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pid", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Role", mappedBy="parent")
     */
    private $children;

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
     * Many Users have Many Roles.
     *
     * @var ArrayCollection
     * -ORM\ManyToMany(targetEntity="MSBios\Guard\Resource\Entity\UserInterface")
     * -ORM\JoinTable(
     *     name="acl_t_users_roles",
     *     joinColumns={@ORM\JoinColumn(name="userid", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="roleid", referencedColumnName="id")}
     * )
     *
     * @ORM\ManyToMany(
     *     targetEntity="MSBios\Guard\Resource\Entity\UserInterface",
     *     mappedBy="roles"
     * )
     */
    private $users;

    /**
     * Role constructor.
     */
    public function __construct()
    {
        $this->children = new ArrayCollection;
    }

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
     * @return Role
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param Role $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return ArrayCollection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param ArrayCollection $children
     */
    public function setChildren($children)
    {
        $this->children = $children;
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

    public function getUsers()
    {
        return $this->users;
    }

    public function setUsers($users)
    {
        $this->users = $users;
    }
}
