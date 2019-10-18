<?php
class RendezVousC{
    //les attribut du table Rendez-vous
    private $idRv;
    private $heureRv;
    private $dateRv;
    private $idM;
    private $idP;


    //getter et Setter
	public function getIdRv() {
		return $this->idRv;
	}

	public function setIdRv($idRv) {
		$this->idRv = $idRv;
	}

	public function getHeureRv() {
		return $this->heureRv;
	}

	public function setHeureRv($heureRv) {
		$this->heureRv = $heureRv;
	}

	public function getDateRv() {
		return $this->dateRv;
	}

	public function setDateRv($dateRv) {
		$this->dateRv = $dateRv;
	}

	public function getIdM() {
		return $this->idM;
	}

	public function setIdM($idM) {
		$this->idM = $idM;
	}

	public function getIdP() {
		return $this->idP;
	}

	public function setIdP($idP) {
		$this->idP =$idP;
	}


}
?>