<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Form\Element;

use MSBios\Guard\Resource\Record\Rule;
use Zend\Form\Element\Radio;

/**
 * Class AccessRadio
 * @package MSBios\Guard\Resource\Form\Element
 */
class AccessRadio extends Radio
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->setValueOptions([
            Rule::ACCESS_ALLOW => 'Allow',
            Rule::ACCESS_DENY => 'Deny',
        ]);
    }
}
