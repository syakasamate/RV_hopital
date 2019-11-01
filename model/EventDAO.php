<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
 class EventDB extends Model{
     public function construct(){
         parent::__construct();
     }


      public function getEventsBetween() {
        $sql="SELECT r.Id_rv_rv,r.code_Rv,r.Date_Heur_Rv,m.Prenom_Med_Medcin,p.Prenom_p 
        FROM Rv r,Medcin m,Patient p 
        WHERE r.Id_Med_Medcin=m.Id_Med_Medcin AND r.id_P_Patient=p.id_P_Patient" ;

         if($this->db!=null){
            return $this->db->query($sql)->fetchAll();
        }else{
            return null;
    
        }
    
      }

      public function getEventsBetweenByDay(DateTime $start, DateTime $end):array {
       $events=$this->getEventsBetween($start,$end);
       $days=[];
       foreach ($events as  $event) {
         $date=explode(' ',$event['Date_Heur_Rv'])[0];
         if(!isset($days[$date])){
           $days[$date]=[$event];
         }else{
           $days[$date][]=$event;
         }
       }
       return $days;
    }
    /**
     * recupere l'evenement
     */
    public function find(int $id):array
    {
    
        $sql="SELECT r.Id_rv_rv,r.code_Rv,r.Date_Heur_Rv,m.Prenom_Med_Medcin,p.Prenom_p 
        FROM Rv r,Medcin m,Patient p 
        WHERE r.Id_Med_Medcin=m.Id_Med_Medcin AND r.id_P_Patient=p.id_P_Patient  AND r.Id_rv_rv = $id LIMIT 1"; 
      if($this->db!= null)
      {
          return $this->db->query($sql)->fetch();
          
      }else{
          return null;
      }
  }
  public function nbRv(){
    $sql="SELECT *  FROM Rv";
    if($this->db!=null){
     return $this->db->query($sql)->rowCount();
    }else{
        return null;

    }

    }
    //fonction ajout Rendez_vous
public function addRv(RendezVousC $rv){
  $sql="INSERT INTO Rv VALUES(NULL,'".$rv->getCodeRv()."','".$rv->getDateRv()."','".$rv->getIdM()."','".$rv->getIdP()."')";
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
  //fonction  recherche  rendez_ous
  public function recherche($recherche){
      $sql="SELECT * FROM Rv  WHERE  code_Rv ='$recherche'";
      if($this->db!= null)
      {
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
      $sql = "UPDATE Rv SET 
                       code_Rv ='".$rv->getCodeRv()."',
                       Date_Heur_Rv ='".$rv->getDateRv()."',
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

 /* if($result===false){
    throw new Exception("aucun resultat trouvé");
    
  }
  return $result;
}  */ 
}
?>