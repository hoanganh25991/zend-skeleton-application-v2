<?php
// Filename: /module/Blog/src/Blog/Factory/ListControllerFactory.php
namespace Blog\Factory;

use Blog\Controller\ListController;
use Blog\Service\PostService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Blog\Mapper\ZendDbSqlMapper;

class ListControllerFactory implements FactoryInterface{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator){
//        $realServiceLocator = $serviceLocator->getServiceLocator();
//        $postService =
//            $realServiceLocator->get('Blog\Service\PostServiceInterface');
        $parentLocator = $serviceLocator->getServiceLocator();
        return new ListController($parentLocator->get('Blog\Service\PostServiceInterface'));
    }
}