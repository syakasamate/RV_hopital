<?php
class PlaningDB extends Model{
    public function construct(){
        parent::__construct();
    }
    public function addPlaninig(PlaningC $planing){
        $sql="INSERT INTO Planning VALUES(NULL,'".$planing->getDatePl()."','".$planing->getHeureDebPl()."','".$planing->getHeureFinPl()."','".$planing->getIdM()."')";
        if($this->db!=null){
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }
    public function listepl(){
        $sql="SELECT * FROM Planning";
        if($this->db!=null){
            return $this->db->query($sql)->fetchAll();
        }else{
            return null;
    
        }
    
        }
}
?>