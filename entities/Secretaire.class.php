<?php
class SecretaireC{
    private $nomSec;
    private $prenomSec;
    private $telSec;
    private $emailSec;
    private $idS;

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


}
?>