<?php
/**
 * Created by IntelliJ IDEA.
 * User: Hoang Anh
 * Date: 05-Apr-16
 * Time: 9:52 AM
 */
namespace Blog\Model;
interface PostInterface{
    /**
     * Will return the ID of the blog post
     * @return int
     */
    public function getId();

    /**
     * will return the TITLE of the blog post
     * @return string
     */
    public function getTitle();

    /**
     * will return the TEXT of the blog post
     * @return string
     */
    public function getText();
}