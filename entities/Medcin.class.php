<?php
class MedcinC{
	private $idM;
	private $codeM;
    private $nomM;
    private $prenomM;
    private $telM;
    private $EmailM;
    private $idS;
    private $idD;


    public function getIdM() {
		return $this->idM;
	}

	public function setIdM($idM) {
		$this->idM = $idM;
	}
    public function getCodeM() {
		return $this->codeM;
	}

	public function setCodeM($codeM) {
		$this->codeM=$codeM;
	}
	public function getNomM() {
		return $this->nomM;
	}

	public function setNomM($nomM) {
		$this->nomM = $nomM;
	}

	public  function getPrenomM() {
		return $this->prenomM;
	}

	public function setPrenomM($prenomM) {
		$this->prenomM = $prenomM;
	}

	public function getTelM() {
		return $this->telM;
	}

	public function setTelM($telM) {
		$this->telM = $telM;
	}

	public function getEmailM() {
		return $this->EmailM;
	}

	public function setEmailM($EmailM) {
		$this->EmailM = $EmailM;
	}

	public function getIdS() {
		return $this->idS;
	}

	public function setIdS($idS) {
		$this->idS = $idS;
	}

	public function getIdD() {
		return $this->idD;
	}

	public function setIdD($idD) {
		$this->idD = $idD;
	}

	

}
?>