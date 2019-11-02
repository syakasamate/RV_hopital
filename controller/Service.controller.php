<?php
//les depandances
session_start();
require_once'model/ServiceDAO.php';
require_once'entities/Service.class.php';
class Service extends Controller{
    //le constructeur service
    public function controller(){
        parent::__controller();
    }
    //la fonction qjout service
      public  function addS(){
          //Intanciation du modelelse
            if(isset($_SESSION['ad']) && $_SESSION['ad']==ADMIN){
            $dds=new ServiceDB();
            if(isset($_POST['envoyer'])){
                $data['ok']=0;
                $codeS=$_POST['codeS'];
                $nomS=$_POST['nomS'];
                if(!empty($nomS)){
                     //Intanciation du class
                    $service=new ServiceC();
                    $service->setCodeS($codeS);
                    $service->setNomS($nomS);
                 $dat=$dds->addService($service);
               
                 
                }
                $data=$dds->nbS();
                  
                return $this->view->load('service/add.php',$data,$dat);   
            }else{
                $data=$dds->nbS();
                return $this->view->load('service/add.php',$data);   

            }
            
        }else{
          header(LOCATION);
        }
    }
        //liste Domaine
        public function  listeS(){
            $listeS=new ServiceDB();
            $data['liste']= $listeS->listService();
                return $this->view->load(LISTES,$data);   
        
        }
        //recherche service
        public function recherche(){
            $idS=$_GET['recherche'];
             $pS=new ServiceDB();    
             $data['list']=$pS->recherche($idS);
             if($data['list']){
            return $this->view->load(LISTES,$data);
             }else{
                $dat['list']="le code recherchez n'existe pas!";
                $listeS=new ServiceDB();
                $data['liste']= $listeS->listService();
                 return $this->view->load(LISTES,$data,$dat);  
             }
            } 
    
          //methode de modification de service
          public function update(){
            //Instanciation du model
            $pS=new ServiceDB();    
            if(isset($_POST['Modifier'])){
                extract($_POST);
                if(!empty($idS) && !empty($nomS)) {
                    $service=new ServiceC();
                    $service->setIdS($idS);
                    $service->setNomS($nomS);
                    //appel à la fonction de modification
                    $ok = $pS->updateServ($service);
                    $data['listee']=$ok;
                }
            }
        
            return  $this->listeS();
        }
        public function edit($idS){
			
            //Instanciation du model
            $pS=new ServiceDB();    
            //Supression
            $data['test']=$pS->getService($idS);
            //chargement de la vue edite.php
            return $this->view->load("service/edite.php", $data);
        }
        public function delete($idS){
            //Instanciation du model
            $pS=new ServiceDB();    
            //Supression
            $pS->deleteService($idS);
            //Retour vers la liste
            return $this->listeS();
        }
       
  
}
?>