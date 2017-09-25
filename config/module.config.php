<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'form_elements' => [
        'factories' => [
            Form\ResourceForm::class => InvokableFactory::class,
            Form\UserForm::class => InvokableFactory::class,
        ]
    ],
];
