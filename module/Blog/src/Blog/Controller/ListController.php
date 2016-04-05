<?php
namespace Blog\Controller;

use Blog\Service\PostServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Helper\ViewModel;

//This happens because our controller must implement ZendStdlibDispatchableInterface in order to be ‘dispatched’ (or run) by ZendFramework’s MVC layer

class ListController extends AbstractActionController{
    /**
     * @var \Blog\Service\PostServiceInterface
     */
    protected $postService;

    public function __construct(PostServiceInterface $postService){
        $this->postService = $postService;
    }

    // ZendFramework provides some base controller implementation of it with AbstractActionController
    public function indexAction(){
        //        $data =  $this->postService->findAllPosts();
        //        $view = new ViewModel(array(
        //            'coder' => '<p>Anh Le Hoang</p><hr><p>web developer</p>',
        //            'posts' => $data
        //        ));
        //        return $view;
        return new ViewModel();
    }
}