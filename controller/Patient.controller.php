<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
require_once'model/IPatientDAO.php';
require_once'entities/Patient.class.php';
class Patient  extends Controller{
    
    public function  construct(){
        parent::__construct();

    }

    public function addP(){
       $pdb=new PatientDB();     
       if(isset($_POST['envoyer'])){
           $data['ok']=0;
           $nom=$_POST['nomP'];
           $prenom=$_POST['prenomP'];
           $age=$_POST['ageP'];
           $genre=$_POST['genreP'];
           $tel=$_POST['telP'];
           $adresse=$_POST['adresseP'];
           $email=$_POST['emailP'];
           if(!empty($nom)&&!empty($prenom)){
               $patientObjet= new PatientC();
               $patientObjet->setNomP($nom);
               $patientObjet->setPrenomP($prenom);
               $patientObjet->setAgeP($age);
               $patientObjet->setGenreP($genre);
               $patientObjet->setTelP($tel);
               $patientObjet->setAdresseP($adresse);
               $patientObjet->setEmailP($email);
       $ok=$pdb->addpatient($patientObjet);
               $data['ok']=$ok;

           }
         return  $this->view->load("patient/add.php",$data);
       }else{
        return $this->view->load("patient/add.php");
       }

    }
   public function listeP(){
    $pdb=new PatientDB();  
     $data['liste']=$pdb->listepatient();
       return $this->view->load("patient/liste.php",$data);
    

    }
    
    
}
?>