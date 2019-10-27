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
       $dat=0;    
       if(isset($_POST['envoyer'])){
            $code=$_POST['codeP'];
           $nom=$_POST['nomP'];
           $prenom=$_POST['prenomP'];
           $age=$_POST['ageP'];
           $genre=$_POST['sexe'];
           $tel=$_POST['telP'];
           $adresse=$_POST['adresseP'];
           $email=$_POST['emailP'];
         
           if(!empty($nom)&&!empty($prenom)&&!empty($age)&&!empty($genre)&&!empty($tel)&&!empty($email)
            &&!empty($prenom)&& $pdb->telP($tel) && $pdb->emailvalid($email)){
               $patientObjet= new PatientC();
               $patientObjet->setNomP($nom);
               $patientObjet->setCodeP($code);
               $patientObjet->setPrenomP($prenom);
               $patientObjet->setAgeP($age);
               $patientObjet->setGenreP($genre);
               $patientObjet->setTelP($tel);
               $patientObjet->setAdresseP($adresse);
               $patientObjet->setEmailP($email);
               $dat=$pdb->addpatient($patientObjet);
                
          
        }
               $data=$pdb->nbPa();
         return  $this->view->load("patient/add.php",$data,$dat);
       }else{
        $data=$pdb->nbPa();
        return $this->view->load("patient/add.php",$data);
       }

    }
    public function update(){
        //Instanciation du model
        $pdb=new PatientDB();
        if(isset($_POST['Modifier'])){
            extract($_POST);
            if(!empty($idP) && !empty($nomP)&& !empty($prenomP)  && !empty($ageP) && !empty($sexe) && !empty($telP) && !empty($adresseP)
            && !empty($emailP)) {
                $patientObject = new PatientC();
                $patientObject->setIdP($idP);
                $patientObject->setCodeP($codeP);
                $patientObject->setNomP($nomP);
                $patientObject->setPrenomP($prenomP);
                $patientObject->setAgeP($ageP);
                $patientObject->setGenreP($sexe);
                $patientObject->setAdresseP($adresseP);
                $patientObject->setTelP($telP);
                $patientObject->setEmailP($emailP);
                
                $ok = $pdb->updatePatient($patientObject);
                $data['liste']=$ok;
            }
        }
       
        return  $this->listeP();
    }
   public function listeP(){
    $pdb=new PatientDB();  
     $data['list']=$pdb->listepatient();
    return $this->view->load(LISTEP,$data);
    }
    public function edit($idP){
			
        //Instanciation du model
        $pdb=new PatientDB();  
        //Supression
        $data['test']=$pdb->getPatient($idP);
        //chargement de la vue edite.php
        return $this->view->load("patient/edite.php", $data);
    }
    public function delete($idP){
        //Instanciation du model
        $pdb=new PatientDB();  
        //Supression
        $pdb-> deletePatient($idP);
        //Retour vers la liste
        return $this->listeP();
    }
    // fonction rechere patient
    public function recherche(){
          $idP=$_GET['recherche'];
         $pdb=new PatientDB();    
         $dat['list']=$pdb->recherche($idP);
         if( $dat['list']){
        
        return $this->view->load(LISTEP,$dat);
        }else{
            $dat['list']="le code recherchez n'existe pas!";
            $pdb=new PatientDB();  
            $data['liste']=$pdb->listepatient();
            return $this->view->load(LISTEP,$data,$dat);

        }
     
    }
    
}
?>