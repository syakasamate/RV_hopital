<?php
require_once'entities/Domaine.class.php';
class DomaineDB extends Model{
    public function construct(){
        parent :: __construct();
    }
    public function addDomaine(DomaineC $domaine){
        $sql="INSERT INTO Domaine Values(Null,'".$domaine->getNomD()."')";
        if($this->db!=null){
            $this->db->exec($sql);
        }else{
            return null;
        }
    }
    public function listeDomaine(){
        $sql="SELECT * FROM Domaine";
        if($this->db!=null){
     return $this->db->query($sql)->fetchAll();
        }else{
            return null;
        }
    }
 
}

?>