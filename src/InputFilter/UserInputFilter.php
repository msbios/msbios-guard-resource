<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Guard\Resource\InputFilter;

use Zend\InputFilter\InputFilter;

/**
 * Class UserInputFilter
 * @package MSBios\Guard\Resource\InputFilter
 */
class UserInputFilter extends InputFilter
{
    public function init()
    {
        parent::init();
        $this->add([
            'name' => 'username',
            'required' => true
        ])->add([
            'name' => 'firstname',
            'required' => true
        ])->add([
            'name' => 'lastname',
            'required' => true
        ])->add([
            'name' => 'email',
            'required' => true
        ])->add([
            'name' => 'password',
            'required' => false
        ])->add([
            'name' => 'confirm',
            'required' => false
        ])->add([
            'name' => 'state',
            'required' => true
        ])->add([
            'name' => 'roles',
            'required' => false
        ]);
    }
}
