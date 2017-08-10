<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Entity;

use MSBios\Guard\Provider\RoleProviderInterface;

/**
 * Interface UserInterface
 * @package MSBios\Guard\Resource\Entity
 */
interface UserInterface extends RoleProviderInterface
{
    /**
     * @return mixed
     */
    public function getUsername();

    /**
     * @param $username
     * @return mixed
     */
    public function setUsername($username);

    /**
     * @return mixed
     */
    public function getFirstname();

    /**
     * @param $firstname
     * @return mixed
     */
    public function setFirstname($firstname);

    /**
     * @return mixed
     */
    public function getLastname();

    /**
     * @param $lastname
     * @return mixed
     */
    public function setLastname($lastname);

    /**
     * @return mixed
     */
    public function getEmail();

    /**
     * @param $email
     * @return mixed
     */
    public function setEmail($email);

    /**
     * @return mixed
     */
    public function getPassword();

    /**
     * @param $password
     * @return mixed
     */
    public function setPassword($password);

    /**
     * @return mixed
     */
    public function getState();

    /**
     * @param $state
     * @return mixed
     */
    public function setState($state);
}
