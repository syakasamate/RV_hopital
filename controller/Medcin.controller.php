<?php
// les dependances 
session_start();
require_once'model/MedcinDAO.php';
require_once'model/ServiceDAO.php';
require_once'model/DomaineDAO.php';
require_once'entities/Medcin.class.php';
require_once'model/IPatientDAO.php';
class Medcin extends  Controller{
    public function construct(){
        parent::__construct();
    }
    public function addM(){
        //Instanciation du model
        if(isset($_SESSION['ad']) && $_SESSION['ad']==ADMIN){
            $addm=new MedcinDB();
            $pdb=new PatientDB(); 
            if(isset($_POST['envoyer'])){
            $codeM=$_POST['codeM'];
            $nomM=$_POST['nomM'];
            $prenomM=$_POST['prenomM'];
            $telM=$_POST['telM'];
            $emailM=$_POST['emailM'];
            $idS=$_POST['nomS'];
            $idD=$_POST['nomD'];
            
           $data['ok']=0;
            if(!empty($nomM)&&!empty($prenomM)&&!empty($telM)&&!empty($emailM)&& !empty($idS)&& !empty($idD)&&
            $pdb->telP($telM) && $pdb->emailvalid($emailM)){
              
                //Instanciation du class
                $medcin= new MedcinC();
                $medcin->setCodeM($codeM);
                $medcin->setNomM($nomM);
                $medcin->setPrenomM($prenomM);
                $medcin->setTelM($telM);
                $medcin->setEmailM($emailM);
                $medcin->setIdS($idS);
                $medcin->setIdD($idD);
             $donne1=$addm->addMedcin($medcin);
           

            }
            //Instanciation du model
            $listS=new ServiceDB();
            //liste service
            $data['list']=$listS->listService();
            //Instanciation du model
            $listD=new DomaineDB();
            //liste Domaine
            $dat['list']=$listD->listeDomaine();
                 $donne=$addm->nbMed();
            return $this->view->load("medcin/add.php",$data,$dat,$donne,$donne1);
        }else{
            $listS=new ServiceDB();
            $data['list']=$listS->listService();
            $listD=new DomaineDB();
            $dat['list']=$listD->listeDomaine();
            $donne=$addm->nbMed();
            return $this->view->load("medcin/add.php",$data,$dat,$donne);

        }
     
    }else{
            
        header(LOCATION);
    }
}
   
   //Le Model liste Medcin
   function listeM(){
    if(isset($_SESSION['ad']) && $_SESSION['ad']==ADMIN){

    $listM=new MedcinDB();
     $data['list']=$listM->listMedcin();
     return $this->view->load(LISTEM,$data);
    }else{
            
        header(LOCATION);
    }
   }  
   public function recherche(){
    if(isset($_SESSION['ad']) && $_SESSION['ad']==ADMIN){

    $idM=$_GET['recherche'];
     $pdb=new MedcinDB();    
     $dat['list']=$pdb->recherche($idM);
     if($dat['list']){
    return $this->view->load(LISTEM,$dat);
}else{
    $dat['list']="le code recherchez n'existe pas!";
    $listM=new MedcinDB();
     $data['liste']=$listM->listMedcin();
    return $this->view->load(LISTEM,$data,$dat);

}
        
    }else{
            
        header(LOCATION);
    }
    }
    public function edit($idM){
        if(isset($_SESSION['ad']) && $_SESSION['ad']==ADMIN){

        //Instanciation du model
           $listM=new MedcinDB();
        //Supression
          $donne['test']=$listM->getMedcin($idM);
        //chargement de la vue edite.php
            $listS=new ServiceDB();
            $data['list']=$listS->listService();
            $listD=new DomaineDB();
            $dat['list']=$listD->listeDomaine();
        return $this->view->load("medcin/edite.php", $data,$dat,$donne);
        }else{
            
            header(LOCATION);
        }
    }
    public function delete($idM){
        if(isset($_SESSION['ad']) && $_SESSION['ad']==ADMIN){
        //Instanciation du model
        $listM=new MedcinDB();
        //Supression
        $listM->deleteMedcin($idM);
        //Retour vers la liste
        return $this->listeM();
        }else{
            
            header(LOCATION);
        }
    }
    public function update(){
        if(isset($_SESSION['ad']) && $_SESSION['ad']==ADMIN){

        //Instanciation du model
        $addm=new MedcinDB();
        if(isset($_POST['Modifier'])){
            extract($_POST);
            if(!empty($idM)&&!empty($nomM)&&!empty($prenomM)&&!empty($telM)&&!empty($emailM)&& !empty($nomS)&& !empty($nomD)){
                //Instanciation du class
                $medcin= new MedcinC();
                $medcin->setIdM($idM);
                $medcin->setCodeM($codeM);
                $medcin->setNomM($nomM);
                $medcin->setPrenomM($prenomM);
                $medcin->setTelM($telM);
                $medcin->setEmailM($emailM);
                $medcin->setIdS($nomS);
                $medcin->setIdD($nomD);
             $OK=$addm->updateMedcin($medcin);
             $data['ok']=$OK;
           
            }
        }
       
        return  $this->listeM();
    }else{
            
        header(LOCATION);
    }

}
   
}

?>