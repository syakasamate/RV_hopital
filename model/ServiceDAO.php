<?php
require_once'entities/Service.class.php';
class ServiceDB extends Model{
    public function construct(){
        parent :: __construct();
    }
    //fonction ajout  service
    public function addService(ServiceC $service){
        $sql="INSERT INTO Service Values(Null,'".$service->getCodeS()."','".$service->getNomS()."')";
        if($this->db!=null){
            $this->db->exec($sql);
        }else{
            return null;
        }
    }
     //fonction liste service
    public function listService(){
        $sql="SELECT  * FROM  Service ";
        if($this->db!=null){
            return $this->db->query($sql)->fetchAll();
        }else{
            return null;
        }

    }
    //fonction nnombre secretaire
    public function nbServ(){
        $sql="SELECT *  FROM secretaire";
        if($this->db!=null){
         return $this->db->query($sql)->rowCount();
        }else{
            return null;
    
        }
    
        }
         //fonction nnombre secretaire
    public function nbS(){
        $sql="SELECT *  FROM Service";
        if($this->db!=null){
         return $this->db->query($sql)->rowCount();
        }else{
            return null;
    
        }
    
        }
        //fonction liste recherche
        public function recherche($recherche){
            $sql="SELECT * FROM Service WHERE  code_S ='$recherche'";
            if($this->db!= null)
            {
                return $this->db->query($sql)->fetchAll();
            }else{
                return null;
            }
        }
   // la fontion suppression 
   public function deleteService($idS){
    $sql = "DELETE FROM Service WHERE Id_Serv_Service = $idS";

    if($this->db != null)
    {
        return $this->db->exec($sql);
    }else{
        return null;
    }
}
// cette fonction nous renvoi la colonne selectionné 
public function getService($idS)
{
    $sql = "SELECT *
            FROM Service
            WHERE Id_Serv_Service = ".$idS;
    if($this->db!= null)
    {
        return $this->db->query($sql)->fetch();
    }else{
        return null;
    }
}
      //la fonction modifier SERVICE
      public function updateService(ServiceC $service){
        $sql = "UPDATE Service SET Nom_Serv_Service='".$service->getNomS()."',
                                     code_S='".$service->getCodeS()."'
                             WHERE   Id_Serv_Service=".$service->getIdS();
        
        if($this->db != null)
        {
            return $this->db->exec($sql);
            
        }else{
            return null;
        }
    }
    public function updateServ(ServiceC $serv){
        $sql = "UPDATE Service SET Nom_Serv_Service = '".$serv->getNomS()."'
                    WHERE  Id_Serv_Service  = ".$serv->getIdS();
        
        if($this->db != null)
        {
            return $this->db->exec($sql);
            
        }else{
            return null;
        }
    }
}
?>