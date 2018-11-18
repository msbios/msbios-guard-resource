<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Record;

use MSBios\Resource\Record;

/**
 * Class Role
 * @package MSBios\Guard\Resource\Record
 */
class Role extends Record
{
    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this['parent'];
    }

    /**
     * @param $parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this['parent'] = $parent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChildren()
    {
        return $this['children'];
    }

    /**
     * @param $children
     * @return $this
     */
    public function setChildren($children)
    {
        $this['children'] = $children;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this['code'];
    }

    /**
     * @param $code
     * @return $this
     */
    public function setCode($code)
    {
        $this['code'] = $code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this['name'];
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this['name'] = $name;
        return $this;
    }
}
