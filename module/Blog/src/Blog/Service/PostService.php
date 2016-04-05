<?php
/**
 * Created by IntelliJ IDEA.
 * User: Hoang Anh
 * Date: 05-Apr-16
 * Time: 9:52 AM
 */
namespace Blog\Service;

use Blog\Mapper\PostMapperInterface;
use Blog\Model\PostInterface;
use Blog\Model\Post;

class PostService implements PostServiceInterface{
    //    protected $data = array(
    //        array(
    //            'id'    => 1,
    //            'title' => 'Hello World #1',
    //            'text'  => 'This is our first blog post!'
    //        ),
    //        array(
    //            'id'     => 2,
    //            'title' => 'Hello World #2',
    //            'text'  => 'This is our second blog post!'
    //        ),
    //        array(
    //            'id'     => 3,
    //            'title' => 'Hello World #3',
    //            'text'  => 'This is our third blog post!'
    //        ),
    //        array(
    //            'id'     => 4,
    //            'title' => 'Hello World #4',
    //            'text'  => 'This is our fourth blog post!'
    //        ),
    //        array(
    //            'id'     => 5,
    //            'title' => 'Hello World #5',
    //            'text'  => 'This is our fifth blog post!'
    //        )
    //    );
    //
    //    /**
    //     * Should return a set of all blog posts that we can iterate over. Single entries of the array are supposed to be
    //     * implementing \Blog\Model\PostInterface
    //     *
    //     * @return array|PostInterface[]
    //     */
    //    public function findAllPosts(){
    //        // TODO: Implement findAllPosts() method.
    //        $allPosts = array();
    //        foreach($this->data as $index => $post){
    //            $allPosts[] = $this->findPost($index);
    //        }
    //        return $allPosts;
    //    }
    //
    //    /**
    //     * Should return a single blog post
    //     *
    //     * @param  int $id Identifier of the Post that should be returned
    //     * @return PostInterface
    //     */
    //    public function findPost($id){
    //        // TODO: Implement findPost() method.
    //        $postData = $this->data[$id];
    //        $model = new Post();
    //        $model->setId($postData['id']);
    //        $model->setTitle($postData['title']);
    //        $model->setText($postData['text']);
    //        return $model;
    //    }

    /**
     * @var \Blog\Mapper\PostMapperInterface
     */
    protected $postMapper;

    /**
     * @param PostMapperInterface $postMapper
     */
    public function __construct(PostMapperInterface $postMapper){
        $this->postMapper = $postMapper;
    }

    /**
     * {@inheritDoc}
     */
    public function findAllPosts(){
        return $this->postMapper->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findPost($id){
        return $this->postMapper->find($id);
    }
}