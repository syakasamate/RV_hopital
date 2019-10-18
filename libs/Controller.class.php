<?php

class Controller{
    protected $view;
      //contructeur de la class controller
    public function __construct(){
        //l'intensification de la classe view
        $this->view=new View();
    }
   
}
?>