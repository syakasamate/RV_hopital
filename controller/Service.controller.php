<?php
//les depandances
require_once'model/ServiceDAO.php';
require_once'entities/Service.class.php';
class Service extends Controller{
    //le constructeur service
    public function controller(){
        parent::__controller();
    }
    //la fonction qjout service
      public  function addS(){
          //Intanciation du model
            $dds=new ServiceDB();
            if(isset($_POST['envoyer'])){
                $data['ok']=0;
                $nomS=$_POST['nomS'];
                if(!empty($nomS)){
                     //Intanciation du class
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