<?php
require_once'entities/User.class.php';
class UserDB extends Model{
    function construct(){
        parent::__construct();
    }
    public function login($login,$password){
      /*  $sql="SELECT * FROM user WHERE login='$login' AND pasword='$password'";
        if($this->db!=null){
         return $this->db->query($sql); 
       
        }else{
             return null;
        }
    }*/
    $l=array(
        'login'=>$login,
        'pasword'=>$password
    );
   $sql="SELECT *FROM user WHERE login=:login AND pasword=:password";
   $req=$this->db->prepare($sql);
  var_dump($req->execute($l));
   $exit=$req->rowCount($sql);
   var_dump($exit);
  return $exit;
}
}
?>