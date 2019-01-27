<?php

return [
    'router' => [
        'routes' => [
            'CorsOptions' => [
                'mayTerminate' => true,
                'type' => \Zend\Router\Http\Method::class,
                'options' => [
                    'verb' =>  'OPTIONS',
                    'defaults' => [
                        'controller' => \Sonriu\Controller\CorsOptionsController::CLASS,
                        'action' => 'index',
                    ],
                ]
            ],

            'Sonriu' => [
                'mayTerminate' => false,
                'options' => [
                    'route' => '/sonriu',
                    'defaults' => [
                        'controller' => \Sonriu\Controller\ServiciosController::CLASS,
                        'action' => 'grid',
                    ],
                ],
                'type' => 'Literal',
                'child_routes' => [
                    'Servicios' => [
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/servicios',
                            'defaults' => [
                                'controller' => \Sonriu\Controller\ServiciosController::CLASS,
                                'action' => 'grid',
                            ],
                        ],
                        'type' => 'Literal',
                        'child_routes' => [
                            'Grid' => [
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/grid',
                                    'defaults' => [
                                        'controller' => \Sonriu\Controller\ServiciosController::CLASS,
                                        'action' => 'grid',
                                    ],
                                ],
                                'type' => 'Segment',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];