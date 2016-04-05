<?php
namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SimpleListController extends AbstractActionController{
    public function indexAction(){
        $view = new ViewModel(array(
            'coder' => '<p><code>author</code></p><blockquote><p>Anh Le Hoang</p></blockquote>',
        ));
        return $view;
    }
}