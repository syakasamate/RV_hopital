<?php
    ini_set("display_errors",1);
    error_reporting(E_ALL);
   require_once'model/UserDAO.php';
    require_once'entities/User.class.php';
class Users extends Controller {
    
    public function construct(){
        parent::__construct();
    }
public function log(){
    if(isset($_POST['connecter'])){
      $udb= new userDB();
      $login=$_POST['login'];
      $password=$_POST['pasword'];
     $udb->login($login,$password);
       if($udb->login($login,$password)){
       return $this->view->load('patient/add.php');
       }

       return $this->view->load('users/log.php');
    
    }else{
    
       return $this->view->load('users/log.php');
     
    }
}
}
?>