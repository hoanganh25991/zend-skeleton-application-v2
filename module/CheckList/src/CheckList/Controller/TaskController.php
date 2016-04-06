<?php
namespace CheckList\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TaskController extends AbstractActionController{
    public function indexAction(){
        $variableContainer = array();
        $coder = "<p>author: Anh Le Hoang - <code>^^</code></p>";
        $variableContainer['coder'] = $coder;
        //fast way to return $variableContainer, without $viewModel
        //bcs MvcEvent as fallback, bind $viewModel with $variableContainer
        //        return $variableContainer;
        $view = new ViewModel($variableContainer);
        //        $view->setTemplate('avatar');
        //avatar for authro
        $avatar = new ViewModel();
        //using defined template
        $avatar->setTemplate('avatar');
        //add 'avatar' to $view
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