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
           $genre=$_POST['sexe'];
           $tel=$_POST['telP'];
           $adresse=$_POST['adresseP'];
           $email=$_POST['emailP'];
           if(!empty($nom)&&!empty($prenom)&&!empty($age)&&!empty($genre)&&!empty($tel)&&!empty($email)
            &&!empty($prenom)&& $pdb->telP($tel)==1 && $pdb->emailvalid($email)){
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
           }else{
               ?>
            <p class="text-danger"><?php echo "Veillez Bien Remplir le Formulaire ";?></p>
            <?php
        }
        
         return  $this->view->load("patient/add.php");
       }else{
        return $this->view->load("patient/add.php");
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
     $data['liste']=$pdb->listepatient();
       return $this->view->load("patient/liste.php",$data);
    }
    public function edit($idP){
			
        //Instanciation du model
        $pdb=new PatientDB();  
        //Supression
        $data['test']=$pdb->getPatient($idP);
        //chargement de la vue edit.html
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
    
}
?>