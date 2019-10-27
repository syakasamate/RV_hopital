<?php
require_once'entities/Domaine.class.php';
class DomaineDB extends Model{
    public function construct(){
        parent :: __construct();
    }
    // fonction ajout  Domaine 
    public function addDomaine(DomaineC $domaine){
        $sql="INSERT INTO Domaine Values(Null,'".$domaine->getCodeD()."','".$domaine->getNomD()."')";
        if($this->db!=null){
            $this->db->exec($sql);
        }else{
            return null;
        }
    }
    //fonction liste Domaine
    public function listeDomaine(){
        $sql="SELECT * FROM Domaine";
        if($this->db!=null){
     return $this->db->query($sql)->fetchAll();
        }else{
            return null;
        }
    }
    //fonction nobre Domaine
    public function nbdom(){
        $sql="SELECT *  FROM  Domaine";
        if($this->db!=null){
         return $this->db->query($sql)->rowCount();
        }else{
            return null;
    
        }
    }
      // la fontion suppression Domaine
      public function deleteDomaine($idD){
        $sql = "DELETE FROM Domaine WHERE Id_Dom_Domaine = $idD";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }
    // cette fonction nous renvoi la colonne selectionné 
    public function getDomaine($idD)
    {
        $sql = "SELECT *
                FROM Domaine
                WHERE Id_Dom_Domaine = ".$idD;
        if($this->db!= null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }
          //la fonction modifier Domaine
          public function updateDomaine(DomaineC $domaine){
            $sql = "UPDATE Domaine SET 
                         Nom_Dom_Domaine = '".$domaine->getNomD()."',
                         code_D='".$domaine->getCodeD()."'  
                        WHERE  Id_Dom_Domaine  = ".$domaine->getIdD();
            
            if($this->db != null)
            {
                return $this->db->exec($sql);
                
            }else{
                return null;
            }
        }
    
        public function nbD(){
            $sql="SELECT *  FROM Domaine";
            if($this->db!=null){
             return $this->db->query($sql)->rowCount();
            }else{
                return null;
        
            }
        
            }      
 
}

?>