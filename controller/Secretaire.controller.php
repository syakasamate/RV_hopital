<?php
 session_start();
//les depandances
require_once'model/SecretaireDAO.php';
require_once'model/ServiceDAO.php';
require_once'entities/Secretaire.class.php';
require_once'model/IPatientDAO.php';
class Secretaire extends  Controller{
    //constructeur du controller 
    public function construct(){
        parent::__construct();
    }
    //fonction ajout secretaire
  
    public function addSec(){
        if(isset($_SESSION['ad']) && $_SESSION['ad']==ADMIN){
          //Intenciation du model
            $pdb=new PatientDB(); 
            $addsec=new SecretaireDB();
            if(isset($_POST['envoyer'])){
             $codeSec=$_POST['codeSec'];
            $nomSec=$_POST['nomSec'];
            $prenomSec=$_POST['prenomSec'];
            $telSec=$_POST['telSec'];
            $emailSec=$_POST['emailSec'];
            $idS=$_POST['nomS'];
           $data['ok']=0;
            if(!empty($nomSec)&&!empty($prenomSec)&&!empty($telSec)&&!empty($emailSec)&& !empty($idS)&&
            $pdb->telP($telSec)&& $pdb->emailvalid($emailSec)){
                //Intenciation du class
                $secretaire= new SecretaireC();
                $secretaire->setCodeSec($codeSec);
                $secretaire->setNomSec($nomSec);
                $secretaire->setPrenomSec($prenomSec);
                $secretaire->setTelSec($telSec);
                $secretaire->setEmailSec($emailSec);
                $secretaire->setIdS($idS);
                 $OK=$addsec->addSec($secretaire);
                $data['ok']=$OK;
           

            }
            //Intenciation du model
            $listS=new ServiceDB();
            //liste des service
            $data['list']=$listS->listService();
            $dat=$addsec->nbSec();
            return $this->view->load("secretaire/add.php",$data,$dat);
        }else{
            $listS=new ServiceDB();
            $data['list']=$listS->listService();
            $dat=$addsec->nbSec();
            return $this->view->load("secretaire/add.php",$data,$dat);

        }
     
    }else{

        header(LOCATION);
    }
}
    //liste secretaire
    public function listeSec(){
        if(isset($_SESSION['ad']) && $_SESSION['ad']==ADMIN){
        $listeSec=new SecretaireDB();
        $data['liste']= $listeSec->listSecretaire();
         return $this->view->load(LISTESEC,$data);  
        }else{
           
            header(LOCATION);
        }
    }

    //fonction recherche  secretaire
    public function recherche(){
        if(isset($_SESSION['ad']) && $_SESSION['ad']==ADMIN){
        $idSec=$_GET['recherche'];
         $pSec=new  SecretaireDB();
         $data['list']=$pSec->recherche($idSec);
         if($data['list']){
        return $this->view->load(LISTESEC,$data);
        
    }else{
        $dat['list']="le code recherchez n'existe pas!";
        $listeSec=new SecretaireDB();
        $data['liste']= $listeSec->listSecretaire();
        return $this->view->load(LISTESEC,$data,$dat);
    }
        }else{
            
            header(LOCATION);
        }
    }
        public function update(){
            if(isset($_SESSION['ad']) && $_SESSION['ad']==ADMIN){
            //Instanciation du model
            $pSec=new  SecretaireDB();
            if(isset($_POST['Modifier'])){
              
                extract($_POST);
                if(!empty($idSec) && !empty($nomSec)&& !empty($prenomSec)  && !empty($telSec) && !empty($emailSec) && !empty($nomS)){
                   
                    $secretaire= new SecretaireC();
                    $secretaire->setIdSec($idSec);
                    $secretaire->setNomSec($nomSec);
                    $secretaire->setPrenomSec($prenomSec);
                    $secretaire->setTelSec($telSec);
                    $secretaire->setEmailSec($emailSec);
                    $secretaire->setIdS($nomS);
                    $OK=$pSec->updateSecretaire($secretaire);
               
                }
                
            }
          
            return  $this->listeSec();
        }else{
            session_destroy();
            header(LOCATION);
        }
        }
       
        public function edit($idSec){
            if(isset($_SESSION['ad']) && $_SESSION['ad']==ADMIN){
            //Instanciation du model
            $pSec=new  SecretaireDB();
            //Supression
            $dat['test']= $pSec->getSec($idSec);
            $listS=new ServiceDB();
            $data['list']=$listS->listService();
            //chargement de la vue edite.php
            return $this->view->load("secretaire/edite.php",$data, $dat);
            }else{

                header(LOCATION);
            }
        }
        public function delete($idSec){
            //Instanciation du model
            $pSec=new  SecretaireDB();
            //Supression
            $pSec-> deleteSec($idSec);
            //Retour vers la liste
            return $this->listeSec();
        } 
        
         
} 
?>