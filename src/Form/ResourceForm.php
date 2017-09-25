<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Form;

use MSBios\Resource\Initializer\LazyFormAwareInterface;
use Zend\Form\Element\Text;
use Zend\Form\Form;

/**
 * Class ResourceForm
 * @package MSBios\Guard\Resource\Form
 */
class ResourceForm extends Form implements LazyFormAwareInterface
{
    public function init()
    {
        $this->add([
            'type' => Text::class,
            'name' => 'code'
        ])->add([
            'type' => Text::class,
            'name' => 'name'
        ]);
    }
}
