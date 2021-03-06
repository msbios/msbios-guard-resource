<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Guard\Resource;

use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'input_filters' => [
        'factories' => [
            InputFilter\UserInputFilter::class =>
                InvokableFactory::class
        ],
        'aliases' => [
            Form\UserForm::class =>
                InputFilter\UserInputFilter::class
        ]
    ],

    'form_elements' => [
        'factories' => [
            // Forms
            Form\PermissionForm::class =>
                InvokableFactory::class,
            Form\ResourceForm::class =>
                InvokableFactory::class,
            Form\RoleForm::class =>
                InvokableFactory::class,
            Form\RuleForm::class =>
                InvokableFactory::class,
            Form\UserForm::class =>
                InvokableFactory::class,

            // Elements
            Form\Element\AccessRadio::class =>
                InvokableFactory::class,
            Form\Element\StateRadio::class =>
                InvokableFactory::class,
        ]
    ],

    'table_manager' => [
        'factories' => [
            Table\RoleTableGateway::class =>
                Factory\RoleTableGatewayFactory::class,
            Table\UserTableGateway::class =>
                Factory\UserTableGatewayFactory::class
        ]
    ]
];
