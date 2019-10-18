<?php
require_once'entities/Planing.class.php';
require_once'model/MedcinDAO.php';
require_once'model/PlaningDAO.php';
class Planing extends Controller{
    public function construct(){
        parent::__construct();
    }
    //fonction ajout planing 
public function addPl(){
    $addpl=new PlaningDB();
            if(isset($_POST['envoyer'])){
            $DatePl=$_POST['datePl'];
            $heureDebPl=$_POST['heureDebPl'];
            $heureFinPl=$_POST['heureFinPl'];
            $nomMed=$_POST['nomMed'];
           $data['ok']=0;
            if(!empty($DatePl)&&!empty( $heureDebPl)&&!empty($heureDebPl)){
                $planing= new PlaningC();
                $planing->setDatePl( $DatePl);
                $planing-> setHeureDebPl($heureDebPl);
                $planing->setHeureFinPl($heureFinPl);
                $planing->setIdM($nomMed);
                $addpl->addPlaninig($planing);
        
           

            }
            //liste des medcin
            $listMed=new  MedcinDB();
            $data['list']=$listMed->listMedcin();
            return $this->view->load("planing/add.php",$data);
        }else{
            $listMed=new  MedcinDB();
            $data['liste']=$listMed->listMedcin();
            return $this->view->load("planing/add.php",$data);
            

        }
     
    }
    public function listepl(){
        $pldb=new PlaningDB();  
         $data['liste']=$pldb->listepl();
           return $this->view->load("planing/liste.php",$data);
        
    
        }
   
   
}

    

?>