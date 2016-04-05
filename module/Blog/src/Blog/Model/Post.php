<?php
/**
 * Created by IntelliJ IDEA.
 * User: Hoang Anh
 * Date: 05-Apr-16
 * Time: 9:56 AM
 */
namespace Blog\Model;

class Post implements PostInterface{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $text;

    /**
     * Will return the ID of the blog post
     * @return int
     */
    public function getId(){
        // TODO: Implement getId() method.
        return $this->id;
    }

    /**
     * will return the TITLE of the blog post
     * @return string
     */
    public function getTitle(){
        // TODO: Implement getTitle() method.
        return $this->title;
    }

    /**
     * will return the TEXT of the blog post
     * @return string
     */
    public function getText(){
        // TODO: Implement getText() method.
        return $this->text;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function setText($text){
        $this->text = $text;
    }
}