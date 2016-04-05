<?php
namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Helper\ViewModel;

class TestController extends AbstractActionController{
    protected $coder;

    /**
     * TestController constructor.
     * @param string coder
     */
    public function __construct($coder){
        $this->coder = $coder;
    }

    public function abcAction(){
        $coder = $this->coder;
        $view = new ViewModel(array(
            'coder' => $coder,
        ));
        return $view;
    }
}