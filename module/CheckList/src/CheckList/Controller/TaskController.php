<?php
namespace CheckList\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TaskController extends AbstractActionController{
    public function indexAction(){
        $variableContainer = array();
        $coder = "<p>author: Anh Le Hoang - <code>^^</code></p>";
        $variableContainer['coder'] = $coder;
//        return $variableContainer;
        $view = new ViewModel($variableContainer);
//        $view->setTemplate('avatar');
        $avatar = new ViewModel();
        $avatar->setTemplate('avatar');
        $view->addChild($avatar, 'avatar');
        return $view;
    }
    public function addAction(){
        return parent::indexAction();
    }
    public function editAction(){
        return parent::indexAction();
    }
    public function deleteAction(){
        return parent::indexAction();
    }

}