<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Record;

use MSBios\Authentication\IdentityInterface;
use MSBios\Guard\Resource\UserInterface;
use MSBios\Resource\Record;

/**
 * Class User
 * @package MSBios\Guard\Resource\Record
 */
class User extends Record implements UserInterface, IdentityInterface
{
    /**
     * @var
     */
    private $username;

    /**
     * @var
     */
    private $firstname;

    /**
     * @var
     */
    private $lastname;

    /**
     * @var
     */
    private $email;

    /**
     * @var
     */
    private $password;

    /** @const STATE_ACTIVE */
    const STATE_ACTIVE = 'ACTIVE';

    /** @const STATE_INACTIVE */
    const STATE_INACTIVE = 'INACTIVE';

    /**
     * @var string
     */
    private $state = self::STATE_ACTIVE;

    /** @var array  */
    private $options = [];

    /** @var array */
    private $roles = [];

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param string $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;
        return $this;
    }
}
