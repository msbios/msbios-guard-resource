<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Form\Element;

use MSBios\Guard\Resource\Record\User;
use Zend\Form\Element\Radio;

/**
 * Class StateRadio
 * @package MSBios\Guard\Resource\Form\Element
 */
class StateRadio extends Radio
{
    public function init()
    {
        $this->setValueOptions([
            User::STATE_ACTIVE => 'Active',
            User::STATE_INACTIVE => 'Inactive',
        ]);
    }
}
