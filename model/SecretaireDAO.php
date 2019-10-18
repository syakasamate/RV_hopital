<?php
//la depandance
require_once'entities/Secretaire.class.php';
class SecretaireDB extends Model{
    //le contructeur
    public function construct(){
        parent::__construct();
    }
    //fonction ajout secretaire 
    public function addSec(SecretaireC $secretaire){
     $sql="INSERT INTO secretaire VALUES(NULL,'".$secretaire->getNomSec()."','".$secretaire->getPrenomSec()."','".$secretaire->getTelSec()."','".$secretaire->getEmailSec()."',
     '".$secretaire->getIdS()."')";
     if($this->db!=null){
         return $this->db->exec($sql);
     }else{
         return null;
     }
        
        
    }
}
?>