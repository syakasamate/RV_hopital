<?php

class Controller{
    protected $view;

    public function __construct(){
        $this->view=new View();
    }
    public function loadmodel($name){
        $path='model/'.$name.'DAO.php';
        if(file_exists($path)){
            require_once'model/'.$name.'DAO.php';
            $modelmame=$name.'DB';
            $this->model=new $modelmame();
        }
    }
}
?>