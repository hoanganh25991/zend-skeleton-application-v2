<?php
namespace CheckList;

use Checklist\Model\TaskMapper;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module{

    public function onBootstrap(MvcEvent $e){
        $application = $e->getApplication();
        $eventManager = $application->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        $eventManager->attach('dispatch', array($this, 'setLayout'), 15);
    }

    /**
     * @param  \Zend\Mvc\MvcEvent $e The MvcEvent instance
     * @return void
     */
    public function setLayout(MvcEvent $e){
        $matches = $e->getRouteMatch();//return array(length, param)
        $controller = $matches->getParam('controller');//return "Task"
        if(false === strpos($controller, "Task")){
            // not a controller from this module
            return;
        }

        // Set the layout template
        $viewModel = $e->getViewModel();
        $viewModel->setTemplate('layout/checklist');
    }
    public function getConfig(){
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig(){
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig(){
        return array(
            'factories' => array(
                'TaskMapper' => function($sm){
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $mapper = new TaskMapper($dbAdapter);
                    return $mapper;
                }
            ),
        );
    }
}