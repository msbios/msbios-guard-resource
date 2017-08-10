<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Form;

use Zend\Form\Element\Password;
use Zend\Form\Element\Text;
use Zend\Form\Form;

/**
 * Class UserForm
 * @package MSBios\Resource\Form
 */
class UserForm extends Form
{
    /**
     * UserForm constructor.
     * @param int|null|string $name
     * @param array $options
     */
    public function __construct($name = __CLASS__, array $options = [])
    {
        parent::__construct($name, $options);

        $this->add([
            'type' => Text::class,
            'name' => 'username'
        ]);

        $this->add([
            'type' => Text::class,
            'name' => 'firstname'
        ]);

        $this->add([
            'type' => Text::class,
            'name' => 'lastname'
        ]);

        $this->add([
            'type' => Text::class,
            'name' => 'email'
        ]);

        $this->add([
            'type' => Password::class,
            'name' => 'password'
        ]);

        $this->add([
            'type' => Password::class,
            'name' => 'confirm'
        ]);

        $this->add([
            'type' => Text::class,
            'name' => 'state'
        ]);
    }
}
