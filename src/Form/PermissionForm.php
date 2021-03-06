<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Form;

use Zend\Form\Element\Text;
use Zend\Form\Form;

/**
 * Class PermissionForm
 * @package MSBios\Guard\Resource\Form
 */
class PermissionForm extends Form
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->add([
            'type' => Text::class,
            'name' => 'code'
        ])->add([
            'type' => Text::class,
            'name' => 'name'
        ]);
    }
}
