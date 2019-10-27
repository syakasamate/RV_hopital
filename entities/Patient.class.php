<?php

class PatientC{
	private $idP;
     private $CodeP;
    private $nomP;
    private $prenomP;
	private $ageP;
	private $genreP;
    private $adresseP;
    private $telP;
    private $emailP;
    public function __construct(){

    }
     function construct($nomP,$prenomP,$ageP,$genreP,$adresseP,$telP,$emailP){
		$this->nomP=$nomP;
        $this->prenomP=$prenomP;
        $this->ageP=$ageP;
		$this->genreP=$genreP;
		$this->adresseP=$adresseP;
		$this->telP=$telP;
		$this->emailP=$emailP;
		

    }
	public function getIdP() {
		return $this->idP;
	}

	public function setIdP($idP) {
		$this->idP = $idP;
	}
	public function getCodeP() {
		return $this->CodeP;
	}

	public function setCodeP($CodeP) {
		$this->CodeP =$CodeP;
	}

	public function getNomP() {
		return $this->nomP;
    }
    
	public function setNomP($nomP) {
		$this->nomP = $nomP;
	}

	public function getPrenomP() {
		return $this->prenomP;
	}

	public  function setPrenomP($prenomP) {
		$this->prenomP = $prenomP;
	}

	public  function getAgeP() {
		return $this->ageP;
	}

	public function setAgeP($ageP) {
		$this->ageP=$ageP;
	}

	public function getGenreP() {
		return $this->genreP;
	}

	public function setGenreP($genreP) {
		$this->genreP = $genreP;
	}
	 public function getAdresseP(){
		 return $this->adresseP;
	 }
	 public function setAdresseP($adresseP){
		 $this->adresseP=$adresseP;
	 }

	public function  getTelP() {
		return $this->telP;
	}

	public function setTelP($telP) {
		$this->telP =$telP;
	}
	public function getEmailP(){
		return $this->emailP;
	}
	public function setEmailP($emailP){
		$this->emailP=$emailP;
	}
   

    
    

}

?>