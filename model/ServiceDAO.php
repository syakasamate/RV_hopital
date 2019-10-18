<?php
require_once'entities/Service.class.php';
class ServiceDB extends Model{
    public function construct(){
        parent :: __construct();
    }
    public function addService(ServiceC $service){
        $sql="INSERT INTO Service Values(Null,'".$service->getNomS()."')";
        if($this->db!=null){
            $this->db->exec($sql);
        }else{
            return null;
        }
    }
    public function listService(){
        $sql="SELECT  * FROM  Service ";
        if($this->db!=null){
            return $this->db->query($sql)->fetchAll();
        }else{
            return null;
        }

    }
 
}
?>