<?php
namespace Blog\Factory;

use Blog\Controller\TestController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TestControllerFactory implements FactoryInterface{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator){
        // TODO: Implement createService() method.
        $coder = '<p><code>author</code></p><blockquote><p>Anh Le Hoang</p></blockquote>';
        $parentLocator = $serviceLocator->getServiceLocator();
        $postService = $parentLocator->get('Blog\Mapper\PostMapperInterface');
        return new TestController($coder);
    }
}