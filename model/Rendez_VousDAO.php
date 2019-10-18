<?php
require_once'entities/Rendez_Vous.class.php';
 class RendezVousDB extends Model{
     //contructeur Rendez_vous
public function construct(){
    parent::__construct();
}
  //fonction ajout Rendez_vous
public function addRv(RendezVousC $rv){
    $sql="INSERT INTO Rv VALUES(NULL,'".$rv->getHeureRv()."','".$rv->getDateRv()."','".$rv->getIdM()."','".$rv->getIdP()."')";
    if($this->db!=null){
        return $this->db->exec($sql);;
    }
    return null;
}
//fonction liste rv
public function listerv(){
    $sql="SELECT * FROM Rv";
    if($this->db!=null){
        return $this->db->query($sql)->fetchAll();
    }else{
        return null;

    }

    }
    //fonction delete rv
    public function deleterv($idRv){
        $sql = "DELETE FROM Rv WHERE id_rv_rv = $idRv";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }
    //renvoie la colone selectionneé
    public function getRv($idRv)
    {
        $sql = "SELECT *
                 FROM Rv
                 WHERE id_rv_rv= ".$idRv;
        if($this->db!= null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }
    //fonction de modification
    public function updateRv(RendezVousC $rv){
        $sql = "UPDATE Rv SET Heure_rv = '".$rv->getHeureRv()."',
                          Date_rv ='".$rv->getDateRv()."',
                         Id_Med_Medcin='".$rv->getIdM()."',
                         id_P_Patient='".$rv->getIdP()."'
                    WHERE Id_rv_rv = ".$rv->getIdRv();
        if($this->db != null)
        {
            return $this->db->exec($sql);
            
        }else{
            return null;
        }
    }

 }
?>