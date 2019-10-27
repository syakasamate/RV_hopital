<?php
class SecretaireC{
    private $idSec;
    private $codeSec;
    private $nomSec;
    private $prenomSec;
    private $telSec;
    private $emailSec;
    private $idS;
   

	public  function  getIdSec() {
		return $this->idSec;
	}

	public function  setIdSec($idSec) {
		return $this->idSec = $idSec;
    }
    public function getCodeSec() {
		return $this->codeSec;
	}

	public function setCodeSec($codeSec) {
		$this->codeSec =$codeSec;
	}

	public function getNomSec() {
		return $this->nomSec;
	}

	public function setNomSec($nomSec) {
		$this->nomSec = $nomSec;
	}

	public function  getPrenomSec() {
		return $this->prenomSec;
	}

	public function setPrenomSec($prenomSec) {
		$this->prenomSec=$prenomSec;
	}

	public function getTelSec() {
		return $this->telSec;
	}

	public function setTelSec($telSec) {
		$this->telSec=$telSec;
	}

	public function getEmailSec() {
		return $this->emailSec;
	}

	public function setEmailSec($emailSec) {
		$this->emailSec = $emailSec;
	}

	public function getIdS() {
		return $this->idS;
	}

	public function setIdS($idS) {
		$this->idS = $idS;
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
     $data['list']=$pdb->listepatient();
    return $this->view->load("patient/liste.php",$data);
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
}
?>