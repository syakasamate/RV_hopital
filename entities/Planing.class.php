<?php
class PlaningC{
		private  $idPl;
		private $codePl;
        private $datePl;
        private $heureDebPl;
		private $heureFinPl;
		private $idM;
		public function getCodePl() {
			return $this->codePl;
		}
	
		public function setCodePl($codePl) {
			$this->codePl = $codePl;
		}
	public function getIdM() {
		return $this->idM;
	}

	public function setIdM($idM) {
		$this->idM =$idM;
	}


	public  function getIdPl() {
		return   $this->idPl;
	}

	public function setIdPl($idPl) {
		$this->idPl = $idPl;
	}

	public function getDatePl() {
		return $this->datePl;
	}

	public function setDatePl($datePl) {
		$this->datePl = $datePl;
	}

	public function getHeureDebPl() {
		return $this->heureDebPl;
	}

	public function setHeureDebPl($heureDebPl) {
		$this->heureDebPl = $heureDebPl;
	}

	public function getHeureFinPl() {
		return $this->heureFinPl;
	}

	public function setHeureFinPl($heureFinPl) {
		$this->heureFinPl = $heureFinPl;
	}


}

?>