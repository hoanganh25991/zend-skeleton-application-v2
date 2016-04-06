<?php
return array(
    'db' => array(
        'adapters' => array(
            'album' => array(
                'driver'         => 'Pdo',
                'username'       => 'root',
                'password'       => 'ifrc',
                'dsn'            => 'mysql:dbname=zend_skeleton_blog;host=localhost',
                'driver_options' => array(
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                )
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__.'/../view',
        )
    ),
    'controllers' => array(
//        'invokables' => array(
//            //defines Blog\Controller\List as an alias for the ListController under the namespace Blog\Controller
//            'BlogList' => 'Blog\Controller\ListController',
//        )
        'factories' => array(
            'Blog\Controller\List' => 'Blog\Factory\ListControllerFactory',
            'BlogTest' => 'Blog\Factory\TestControllerFactory',
        ),
        'invokables' => array(
            'BlogSimple' => 'Blog\Controller\SimpleListController'
        ),
    ),
    'service_manager' => array(
//        'invokables' => array(
//            'Blog\Service\PostServiceInterface' => 'Blog\Service\PostService'
//        ),
        'factories' => array(
            'Blog\Mapper\PostMapperInterface'   => 'Blog\Factory\ZendDbSqlMapperFactory',
            'Blog\Service\PostServiceInterface' => 'Blog\Factory\PostServiceFactory',
            'Zend\Db\Adapter\Adapter'           => 'Zend\Db\Adapter\AdapterServiceFactory'
        )
    ),
    //this lines opens the configuration for RouteManager
    'router' => array(
        //open configuration for all possible routes
        'routes' => array(
            //define a new route called 'con-meo'
            'con-meo' => array(
                //define the routes type to be 'Zend\Mvc\Router\Http\Literal', which is basic just a string
                'type' => 'literal',
                //configure the route itself
                'options' => array(
                    //listen to '/blog' as uri
                    'route' => '/blog',
                    'defaults' => array(
                        //define default controller and action to be called when this route is matched
                        'controller' => 'Blog\Controller\List',
                        'action' => 'index',
                    )
                )
            ),
            'simple' => array(
                //define the routes type to be 'Zend\Mvc\Router\Http\Literal', which is basic just a string
                'type' => 'literal',
                //configure the route itself
                'options' => array(
                    //listen to '/blog' as uri
                    'route' => '/blog/simple',
                    'defaults' => array(
                        //define default controller and action to be called when this route is matched
                        'controller' => 'BlogSimple',
                        'action' => 'index',
                    )
                )
            ),
            'test' => array(
                //define the routes type to be 'Zend\Mvc\Router\Http\Literal', which is basic just a string
                'type' => 'literal',
                //configure the route itself
                'options' => array(
                    //listen to '/blog' as uri
                    'route' => '/blog/test',
                    'defaults' => array(
                        //define default controller and action to be called when this route is matched
                        'controller' => 'BlogTest',
                        'action' => 'abc',
                    )
                )
            )
        ),

    ),

);