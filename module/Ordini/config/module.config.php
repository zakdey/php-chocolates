<?php

namespace Ordini;

return array(
    'router' => array(
        'routes' => array(
            'ordini' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/ordini',
                    'defaults' => array(
                        'controller' => 'Ordini\Controller\Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/:codice',
                            'constraints' => array(
                                'codice' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                                'action' => 'ordine',
                            ),
                        ),
                    ),
                ),
            ),

            // rotte area Admin
            'zfcadmin' => array(
                'child_routes' => array(
                    'ordini' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/ordini',
                            'defaults' => array(
                                'controller' => 'Ordini\Controller\Admin',
                                'action'        => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                    ),
                ),
            ),

        ),
    ),
    'controllers' => array(
        'factories' => array(
            'Ordini\Controller\Index' => Controller\IndexControllerFactory::class,
            'Ordini\Controller\Admin' => Controller\AdminControllerFactory::class,
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Ordini\Service\ProdottiService' => Service\OrdiniServiceFactory::class,
            //'Ordini\Form\ProdottoForm' => Form\ProdottoFormFactory::class,
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'doctrine'        => [
        'driver' => [
            __NAMESPACE__ . '_driver' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity']
            ],
            'orm_default'             => [
                'class'   => 'Doctrine\ORM\Mapping\Driver\DriverChain',
                'drivers' => [
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                ]
            ],
        ],
    ],

    // ACL
    'bjyauthorize' => [
        'guards' => [
            'BjyAuthorize\Guard\Controller' => [

                // Pagine fornite dal controller Index: accesso consentito a tutti
                ['controller' => 'Ordini\Controller\Admin', 'roles' => ['admin']],

            ],
        ],
    ],

    // navigation area admin
    'navigation' => array(
        'admin' => array(
            'prodotti' => array(
                'label' => 'Ordini',
                'route' => 'zfcadmin/ordini',
            ),
        ),
    ),
);
