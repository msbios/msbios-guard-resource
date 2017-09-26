<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Form;

use MSBios\Guard\Resource\Form\Element\AccessRadio;
use MSBios\Resource\Initializer\LazyFormAwareInterface;
use Zend\Form\Element\Text;
use Zend\Form\Form;

/**
 * Class RuleForm
 * @package MSBios\Guard\Resource\Form
 */
class RuleForm extends Form implements LazyFormAwareInterface
{
    public function init()
    {
        $this->add([
            'type' => Text::class,
            'name' => 'name'
        ])->add([
            'type' => AccessRadio::class,
            'name' => 'access'
        ]);
    }
}
