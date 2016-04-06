<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
    'db' => array(
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=zend_skeleton_task_item;hostname=localhost',
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
    ),
    'controllers' => array(
        'invokables' => array(
            'Task' => 'CheckList\Controller\TaskController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'task' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/task[/:action[/:id]]',
                    'defaults' => array(
                        //                        '__NAMESPACE__' => 'Checklist\Controller',
                        'controller' => 'Task',
                        'action' => 'index',
                    ),
                    'constraints' => array(
                        'action' => '(add|edit|delete)',
                        'id' => '[0-9]+',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'avatar' => __DIR__.'/../view/check-list/avatar.phtml',

        ),
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
);