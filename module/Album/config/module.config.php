<?php
return array(
    'db' => array(
        'driver'         => 'Pdo',
        'username'       => 'root',  //edit this
        'password'       => 'ifrc',  //edit this
        'dsn'            => 'mysql:dbname=zf2tutorial;host=localhost',
        'driver_options' => array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'Album\Controller\Album' => 'Album\Controller\AlbumController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
    'router' => array(
        'routes' => array(
            'album' => array(
                'type' => 'segment', 'options' => array(
                    'route' => '/album[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Album\Controller\Album',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
);