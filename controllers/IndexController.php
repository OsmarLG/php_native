<?php
require_once("models/Index.php");

class ModelController {
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    //index
    static function index(){
        $projects = new Model();
        $data = $projects->getAll('projects');

        require_once('views/index.php');
    }
}