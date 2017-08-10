<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource;

return [
    'doctrine' => [
        'driver' => [
            // defines an annotation driver with two paths, and names it `my_annotation_driver`
            Module::class => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/../src/Entity'
                ],
            ],

            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
            'orm_default' => [
                'drivers' => [
                    Entity::class => Module::class
                ]
            ]
        ]
    ],

    'service_manager' => [
        'factories' => [
            Provider\ResourceProvider::class => Factory\ResourceProviderFactory::class,
            Provider\RuleProvider::class => Factory\RuleProviderFactory::class,
        ]
    ],

    'form_elements' => [
        'factories' => [
            Form\UserForm::class => \MSBios\Resource\Factory\LazyFormFactory::class
        ]
    ],

    'input_filters' => [
        'invokables' => [
            // some thing
        ],
        'factories' => [
            InputFilter\UserInputFilter::class => \MSBios\Resource\Factory\LazyInputFilterFactory::class
        ]
    ],

    'hydrators' => [
        'factories' => [
            // some thing
        ],
    ],

    \MSBios\Guard\Module::class => [
        'resource_providers' => [
            Provider\ResourceProvider::class
        ],
        'rule_providers' => [
            Provider\RuleProvider::class
        ],
    ],

    \MSBios\Resource\Module::class => [
        'forms' => [ // forms
            Form\UserForm::class => [
                'input_filter_class' => InputFilter\UserInputFilter::class,
                'hydrator_class' => \DoctrineModule\Stdlib\Hydrator\DoctrineObject::class,
                'resource_class' => Entity\User::class
            ]
        ],

        'input_filters' => [
            InputFilter\UserInputFilter::class => [
                [
                    'name' => 'username',
                    'required' => true
                ], [
                    'name' => 'firstname',
                    'required' => true
                ], [
                    'name' => 'lastname',
                    'required' => true
                ], [
                    'name' => 'email',
                    'required' => true,
                    'filters' => [
                    ],
                    'validators' => [
                        [
                            'name' => \Zend\Validator\EmailAddress::class
                        ]
                    ]
                ], [
                    'name' => 'password',
                    'required' => false,
                    'validators' => []
                ], [
                    'name' => 'confirm',
                    'required' => false,
                    'validators' => [
                        [
                            'name' => \Zend\Validator\Identical::class,
                            'options' => [
                                'token' => 'password'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
