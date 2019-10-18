<?php
require_once'entities/Medcin.class.php';
class MedcinDB extends Model{
    public function construct(){
        parent::__construct();

    }
    public function addMedcin( MedcinC $medcin){
        $sql="INSERT INTO Medcin VALUES(Null,'".$medcin->getNomM()."','".$medcin->getPrenomM()."','".$medcin->getTelM()."',
        '".$medcin->getEmailM()."','".$medcin->getIdS()."','".$medcin->getIdD()."')";
        if($this->db!=null){
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }
    public function listMedcin(){
        $sql="SELECT * FROM Medcin";
        if($this->db!=null){
          return  $this->db->query($sql)->fetchAll();
        }else{
            return null;
        }
    }
}
?>