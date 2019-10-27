<?php
class PlaningDB extends Model{
    //constructeur  planing
    public function construct(){
        parent::__construct();
    }
    //la fonction ajout planing
    public function addPlaninig(PlaningC $planing){
        $sql="INSERT INTO Planning VALUES(NULL,'".$planing->getCodePl()."','".$planing->getDatePl()."','".$planing->getHeureDebPl()."','".$planing->getHeureFinPl()."','".$planing->getIdM()."')";
        if($this->db!=null){
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }
    // la fonction liste des planing 
    public function listepl(){
        $sql="SELECT * FROM Planning";
        if($this->db!=null){
            return $this->db->query($sql)->fetchAll();
        }else{
            return null;
    
        }
    
        }
          //fonction  recherche  secretaire
          public function recherche($recherche){
            $sql="SELECT * FROM Planning  WHERE  code_Pl ='$recherche'";
            if($this->db!= null)
            {
                return $this->db->query($sql)->fetchAll();
            }else{
                return null;
            }
        }
          //fonction delete rv
    public function deletePl($idPl){
        $sql = "DELETE FROM Planning WHERE Id_Pl_Planning = $idPl";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }
    //renvoie la colone selectionneé
    public function getPl($idPl)
    {
        $sql = "SELECT *
                 FROM Planning
                 WHERE Id_Pl_Planning= ".$idPl;
        if($this->db!= null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }
    //fonction de modification
    public function updatePl(PlaningC $pl){
        $sql = "UPDATE Planning SET Date_Pl_Planning = '".$pl->getDatePl()."',
                          code_Pl ='".$pl->getCodePl()."',
                         Heure_Deb_Planning ='".$pl->getHeureDebPl()   ."',
                          Heure_Fin_Planning='".$pl->getHeureFinPl()."',
                          Id_Med_Medcin='".$pl->getIdM()."'                     
                    WHERE Id_Pl_Planning = ".$pl->getIdPl();
        if($this->db != null)
        {
            return $this->db->exec($sql);
            
        }else{
            return null;
        }
    }
// nombre planing
public function nbPl(){
    $sql="SELECT *  FROM Planning";
    if($this->db!=null){
     return $this->db->query($sql)->rowCount();
    }else{
        return null;

    }
}
}
?>