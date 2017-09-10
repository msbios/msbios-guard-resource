<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Record;

use MSBios\Resource\Record;

/**
 * Class Rule
 * @package MSBios\Guard\Resource\Record
 */
class Rule extends Record
{
    /** @const ACCESS_ALLOW */
    const ACCESS_ALLOW = 'ALLOW';

    /** @const ACCESS_DENY */
    const ACCESS_DENY = 'DENY';

    /**
     * @var
     */
    private $roles;

    /**
     * @var
     */
    private $resource;

    /**
     * @var
     */
    private $permissions;

    /**
     * @var string
     */
    private $access = self::ACCESS_ALLOW;

    /**
     * @var
     */
    private $name;

    /**
     * @var array
     */
    private $raw = [];

    /**
     * @return mixed
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param mixed $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     * @return mixed
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @param $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }

    /**
     * @return mixed
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param $permissions
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }

    /**
     * @return string
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * @param $access
     */
    public function setAccess($access)
    {
        $this->access = $access;
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

    /**
     * @return array
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /**
     * @param $raw
     */
    public function setRaw($raw)
    {
        $this->raw = $raw;
    }
}
