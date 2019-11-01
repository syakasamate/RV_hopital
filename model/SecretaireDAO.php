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
     $sql="INSERT INTO secretaire VALUES(NULL,'".$secretaire->getCodeSec()."','".$secretaire->getNomSec()."','".$secretaire->getPrenomSec()."','".$secretaire->getTelSec()."','".$secretaire->getEmailSec()."',
     '".$secretaire->getIdS()."')";
     if($this->db!=null){
         return $this->db->exec($sql);
     }else{
         return null;
     }
        
        
    }
    public function nbSec(){
        $sql="SELECT *  FROM secretaire";
        if($this->db!=null){
         return $this->db->query($sql)->rowCount();
        }else{
            return null;
    
        }
    
        }
        //fonction liste secretaire
        public function listSecretaire(){
            $sql="SELECT  sec.Id_Secret_sercretaire,sec.code_Sec,sec.Nom_Secret_sercretaire,sec.Prenom_Secret_sercretaire
            ,sec.Tel_Secret_sercretaire,sec.Email_Secret_sercretaire,s.Nom_Serv_Service
             FROM secretaire sec,Service s 
             WHERE sec.Id_Serv_Service=s.Id_Serv_Service";
            if($this->db!=null){
                return $this->db->query($sql)->fetchAll();
            }else{
                return null;
            }
    
        }
         //fonction  recherche  secretaire
         public function recherche($recherche){
            $sql="SELECT * FROM secretaire  WHERE  code_Sec ='$recherche'";
            if($this->db!= null)
            {
                return $this->db->query($sql)->fetchAll();
            }else{
                return null;
            }
        }
      //la fonction modifier secretaire
      public function updateSecretaire(SecretaireC $secretaire){
        $sql = "UPDATE secretaire  SET Nom_Secret_sercretaire = '".$secretaire->getNomSec()."',
                        Prenom_Secret_sercretaire = '".$secretaire->getPrenomSec()."',
                        Tel_Secret_sercretaire='".$secretaire->getTelSec()."',
                        Email_Secret_sercretaire='".$secretaire->getEmailSec()."',
                          Id_Serv_Service='".$secretaire->getIdS()."'
                    WHERE  Id_Secret_sercretaire=".$secretaire->getIdSec();
        
        if($this->db != null)
        {
            return $this->db->exec($sql);
            
        }else{
            return null;
        }
    }   
     // cette fonction nous renvoi la colonne selectionné 
     public function getSec($idSec)
     {
         $sql = "SELECT *
                 FROM secretaire 
                 WHERE Id_Secret_sercretaire = ".$idSec;
         if($this->db!= null)
         {
             return $this->db->query($sql)->fetch();
         }else{
             return null;
         }
     }
      // la fontion suppression patient 
      public function deleteSec($idSec){
        $sql = "DELETE FROM secretaire WHERE Id_Secret_sercretaire= $idSec";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }
}
?>