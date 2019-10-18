<?php
require_once'model/SecretaireDAO.php';
require_once'model/ServiceDAO.php';
require_once'entities/Secretaire.class.php';
class Secretaire extends  Controller{
    public function construct(){
        parent::__construct();
    }
    public function addSec(){
            $addsec=new SecretaireDB();
            if(isset($_POST['envoyer'])){
            $nomSec=$_POST['nomSec'];
            $prenomSec=$_POST['prenomSec'];
            $telSec=$_POST['telSec'];
            $emailSec=$_POST['emailSec'];
            $idS=$_POST['nomS'];
           $data['ok']=0;
            if(!empty($nomSec)&&!empty($prenomSec)&&!empty($telSec)&&!empty($emailSec)&& !empty($idS)){
                $secretaire= new SecretaireC();
                $secretaire->setNomSec($nomSec);
                $secretaire->setPrenomSec($prenomSec);
                $secretaire->setTelSec($telSec);
                $secretaire->setEmailSec($emailSec);
                $secretaire->setIdS($idS);
                 $OK=$addsec->addSec($secretaire);
                $data['ok']=$OK;
           

            }
            $listS=new ServiceDB();
            $data['liste']=$listS->listService();
            return $this->view->load("secretaire/add.php",$data);
        }else{
            $listS=new ServiceDB();
            $data['liste']=$listS->listService();
            return $this->view->load("secretaire/add.php",$data);

        }
     
    }
   
   
}

?>