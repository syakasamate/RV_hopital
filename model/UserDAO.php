<?php
require_once'entities/User.class.php';
class UserDB extends Model{
    function construct(){
        parent::__construct();
    }
    public function login($login,$password){
    $l=array(
        'login'=>$login,
        'password'=>$password
    );
   $sql="SELECT *FROM user WHERE login=:login AND pasword=:password";
   $req=$this->db->prepare($sql);
  $req->execute($l);
   $exit=$req->rowCount($sql);
  return $exit;
}
}
?>