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
                    'nuovo' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/nuovo/:codice_prodotto',
                            'constraints' => array(
                                'codice_prodotto' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                                'action' => 'nuovo',
                            ),
                        ),
                    ),
            ),

            /*// rotte area Admin
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
                        'child_routes' => array(
                            'nuovo' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => '/nuovo',
                                    'defaults' => array(
                                        'action' => 'nuovo',
                                    ),
                                ),
                            ),
                            'elimina' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/elimina/:codice',
                                    'constraints' => array(
                                        'codice' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                    ),
                                    'defaults' => array(
                                        'action' => 'elimina',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),*/

        ),
    ),
  ),
    'controllers' => array(
        'factories' => array(
            'Ordini\Controller\Index' => Controller\IndexControllerFactory::class,
            /*'Ordini\Controller\Admin' => Controller\AdminControllerFactory::class,*/
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Ordini\Service\OrdiniService' => Service\OrdiniServiceFactory::class,
            'Ordini\Form\OrdineForm' => Form\OrdineFormFactory::class,
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

        ['controller' => 'Ordini\Controller\Index', 'roles' => []],

        ],
      ],
    ],
  );
