<?php
require_once'model/ServiceDAO.php';
require_once'entities/Service.class.php';

class Service extends Controller{
    public function controller(){
        parent::__controller();
    }
      public  function addS(){
            $dds=new ServiceDB();
            if(isset($_POST['envoyer'])){
                $data['ok']=0;
                $nomS=$_POST['nomS'];
                if(!empty($nomS)){
                    $service=new ServiceC();
                    $service->setNomS($nomS);
                 $ok=$dds->addService($service);
                 $data['ok']=$ok;
                 
                }
                return $this->view->load('service/add.php',$data);   
            }else{
                return $this->view->load('service/add.php');   

            }
        }
        
       
  
}
?>