<?php
namespace CheckList\Model;

class TaskMapper{
    protected $tableName = 'task_item';
    protected $dbAdapter;
    protected $sql;

    public function __construct(){
    }
    public function fetchAll(){}
}