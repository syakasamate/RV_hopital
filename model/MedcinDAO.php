<?php
require_once'entities/Medcin.class.php';
class MedcinDB extends Model{
    public function construct(){
        parent::__construct();

    }
    //ajout Medecin
    public function addMedcin( MedcinC $medcin){
        $sql="INSERT INTO Medcin VALUES(Null,'".$medcin->getCodeM()."','".$medcin->getNomM()."','".$medcin->getPrenomM()."','".$medcin->getTelM()."',
        '".$medcin->getEmailM()."','".$medcin->getIdS()."','".$medcin->getIdD()."')";
        if($this->db!=null){
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }
    //liste des Medecin
    public function listMedcin(){
        $sql="SELECT  m.Id_Med_Medcin,m.code_Med,m.Nom_Med_Medcin,m.Prenom_Med_Medcin,m.Tel_Med_Medcin
        ,m.Email_Med_Medcin,s.Nom_Serv_Service,d.Nom_Dom_Domaine FROM Medcin m,Service s,Domaine d
        WHERE m.Id_Serv_Service=s.Id_Serv_Service AND m.Id_Dom_Domaine=m.Id_Dom_Domaine";
        if($this->db!=null){
          return  $this->db->query($sql)->fetchAll();
        }else{
            return null;
        }
    }
    // nombre Medecin
    public function nbMed(){
        $sql="SELECT *  FROM Medcin";
        if($this->db!=null){
         return $this->db->query($sql)->rowCount();
        }else{
            return null;
    
        }
    
        }
        //fonction recherche
        public function recherche($recherche){
            $sql="SELECT * FROM Medcin WHERE   code_Med ='$recherche'";
            if($this->db!= null)
            {
                return $this->db->query($sql)->fetchAll();
            }else{
                return null;
            }
        }
        // la fontion suppression medcin
        public function deleteMedcin($idM){
            $sql = "DELETE FROM Medcin WHERE Id_Med_Medcin = $idM";

            if($this->db != null)
            {
                return $this->db->exec($sql);
            }else{
                return null;
            }
        }
        // cette fonction nous renvoi la colonne selectionné 
        public function getMedcin($idM)
        {
            $sql = "SELECT *
                    FROM Medcin
                    WHERE Id_Med_Medcin = ".$idM;
            if($this->db!= null)
            {
                return $this->db->query($sql)->fetch();
            }else{
                return null;
            }
        }
        //la fonction modifier Medcin
        public function updateMedcin(MedcinC $medcin){
            $sql = "UPDATE Medcin SET Nom_Med_Medcin = '".$medcin->getNomM()."',
                              code_Med = '".$medcin->getCodeM()."',
                            Prenom_Med_Medcin = '".$medcin->getPrenomM()."',
                            Tel_Med_Medcin='".$medcin->getTelM()."',
                            Email_Med_Medcin='".$medcin->getEmailM()."',
                            Tel_Med_Medcin='".$medcin->getTelM()."',
                            Id_Serv_Service='".$medcin->getIdS()."',
                            Id_Dom_Domaine='".$medcin->getIdD()."'
                        WHERE  Id_Med_Medcin  = ".$medcin->getIdM();
            
            if($this->db != null)
            {
                return $this->db->exec($sql);
                
            }else{
                return null;
            }
        }
        
}
?>