<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Entity;

use MSBios\Resource\Record;

/**
 * Class Role
 * @package MSBios\Guard\Resource\Entity
 */
class Role extends Record
{
    /**
     * @var
     */
    private $parent;

    /**
     * @var
     */
    private $children;

    /**
     * @var
     */
    private $code;

    /**
     * @var
     */
    private $name;

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
     * @return mixed
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param $children
     */
    public function setChildren($children)
    {
        $this->children = $children;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
