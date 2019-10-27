<?php
require_once'entities/Planing.class.php';
require_once'model/MedcinDAO.php';
require_once'model/PlaningDAO.php';
class Planing extends Controller{
    public function construct(){
        parent::__construct();
    }
    //methode  ajout planing 
public function addPl(){
    //Intanciation du model
    $addpl=new PlaningDB();
           $dat=0;
            if(isset($_POST['envoyer'])){
            $codePl=$_POST['codePl'];
            $DatePl=$_POST['datePl'];
            $heureDebPl=$_POST['heureDebPl'];
            $heureFinPl=$_POST['heureFinPl'];
            $nomMed=$_POST['nomMed'];
           $data['ok']=0;
          
            if(!empty($DatePl)&&!empty( $heureDebPl)&&!empty($heureFinPl)&&!empty($nomMed)){
                //Intanciation du class
                $planing= new PlaningC();
                $planing->setCodePl( $codePl);
                $planing->setDatePl( $DatePl);
                $planing-> setHeureDebPl($heureDebPl);
                $planing->setHeureFinPl($heureFinPl);
                $planing->setIdM($nomMed);
                //appel à la fonction ajout planing 
               $dat=$addpl->addPlaninig($planing);
        
           

            }
            //liste des medecin
            $listMed=new  MedcinDB();
            $data['list']=$listMed->listMedcin();
            $donne= $addpl->nbPl();
            return $this->view->load("planing/add.php",$data,$dat,$donne);
        }else{
            $listMed=new  MedcinDB();
            $data['list']=$listMed->listMedcin();
            $donne= $addpl->nbPl();
            return $this->view->load("planing/add.php",$data,$dat,$donne);
            

        }
     
    }
    //fonction liste planing
    public function listepl(){
        $pldb=new PlaningDB();  
         $data['list']=$pldb->listepl();
           return $this->view->load(LISTEPL,$data);
        
    
        }
        public function recherche(){
            $idP=$_GET['recherche'];
             $pl=new PlaningDB();   
             $data['list']=$pl->recherche($idP);
             if($data['list']){
            return $this->view->load(LISTEPL,$data);
        }else{
            $dat['list']="le code recherchez n'existe pas!";
            $pldb=new PlaningDB();  
         $data['liste']=$pldb->listepl();
           return $this->view->load(LISTEPL,$data,$dat); 
        }
            } 
    
    //methode de modification de rendez_vous
    public function update(){
        //Instanciation du model
        $pl=new PlaningDB();  
        if(isset($_POST['Modifier'])){
    
            extract($_POST);
          if(!empty($idPl) && !empty($datePl)&& !empty($heureDebPl) && !empty($heureFinPl)&&!empty($nomMed)) {
                $planing= new PlaningC();
                $planing->setCodePl($codePl);
                $planing->setIdPl($idPl);
                $planing->setDatePl( $datePl);
                $planing-> setHeureDebPl($heureDebPl);
                $planing->setHeureFinPl($heureFinPl);
                $planing->setIdM($nomMed);
                //appel à la fonction de modification
                $ok = $pl->updatePl($planing);
                $data['listee']=$ok;
           }
        }
    
        return  $this->listepl();
    }

    public function edit($idPl){
            
        //Instanciation du model
        $pdb=new PlaningDB();
        //Supression
        $dat['list']=$pdb->getPl($idPl);
        
        //liste deroulante Medcin 
        $listMed=new  MedcinDB();
        $data['liste']=$listMed->listMedcin();
        //chargement de la vue edite.php
        return $this->view->load("planing/edite.php",$data,$dat);
    }
    public function delete($idPl){
        //Instanciation du model
        $pdb=new PlaningDB();
        //Supression
        $pdb->deletePl($idPl);
        //Retour vers la liste
        return $this->listepl();
    }

}

    

?>