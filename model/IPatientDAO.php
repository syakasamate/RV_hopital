<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
require_once'entities/Patient.classe.php';
class PatientDB extends Model{

    public function construct(){
        parent::__construct();
    }


    public function addpatient(PatientC $patient){
        $sql="INSERT INTO Patient  VALUES(null,'".$patient->getNomP()."','".$patient->getPrenomP()."','".$patient->getAgeP()."'
        ,'".$patient->getGenreP()."','".$patient->getTelP()."','".$patient->getAdresseP()."','".$patient->getEmailP()."')";
        if($this->db!=null){
        $this->db->exec($sql);
            return $this->db->lastInsertId();
        }else {
          
         return null;
        }
    }
    public function listepatient(){
        $sql="SELECT * FROM Patient";
        if($this->db!=null){
            return $this->db->query($sql)->fetchAll();
        }else{
            return null;

        }
   
        }
      
    
}
?>