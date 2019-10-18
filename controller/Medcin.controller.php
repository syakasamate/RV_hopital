<?php
require_once'model/MedcinDAO.php';
require_once'model/ServiceDAO.php';
require_once'model/DomaineDAO.php';
require_once'entities/Medcin.class.php';
class Medcin extends  Controller{
    public function construct(){
        parent::__construct();
    }
    public function addM(){
            $addm=new MedcinDB();
            if(isset($_POST['envoyer'])){
            $nomM=$_POST['nomM'];
            $prenomM=$_POST['prenomM'];
            $telM=$_POST['telM'];
            $emailM=$_POST['emailM'];
            $idS=$_POST['nomS'];
            $idD=$_POST['nomD'];
           $data['ok']=0;
            if(!empty($nomM)&&!empty($prenomM)&&!empty($telM)&&!empty($emailM)&& !empty($idS)&& !empty($idD)){
                $medcin= new MedcinC();
                $medcin->setNomM($nomM);
                $medcin->setPrenomM($prenomM);
                $medcin->setTelM($telM);
                $medcin->setEmailM($emailM);
                $medcin->setIdS($idS);
                $medcin->setIdD($idD);
             $OK=$addm->addMedcin($medcin);
             $data['ok']=$OK;
           

            }
            $listS=new ServiceDB();
            $data['liste']=$listS->listService();
            $listD=new DomaineDB();
            $dat['list']=$listD->listeDomaine();
            return $this->view->load("medcin/add.php",$data,$dat);
        }else{
            $listS=new ServiceDB();
            $data['liste']=$listS->listService();
            $listD=new DomaineDB();
            $dat['list']=$listD->listeDomaine();
            return $this->view->load("medcin/add.php",$data,$dat);

        }
     
    }
   
   
}

?>