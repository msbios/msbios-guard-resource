<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Entity;

use MSBios\Authentication\IdentityInterface;
use MSBios\Guard\Resource\UserInterface;
use MSBios\Resource\Record;

/**
 * Class User
 * @package MSBios\Guard\Resource\Entity
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

    /**
     * @var string
     */
    private $state = 'ACTIVE';

    /**
     * @var array
     */
    private $options = [];

    /**
     * @var
     */
    private $roles;

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
     * @return mixed
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
