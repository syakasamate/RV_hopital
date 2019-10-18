<?php
class  DomaineC{
    private $idD;
    private $nomD;

  


	public function getIdD() {
		return $this->idD;
	}

	public function setIdD($idD) {
		$this->idD = $idD;
	}

	public function getNomD() {
		return $this->nomD;
	}

	public function  setNomD($nomD) {
		$this->nomD=$nomD;
	}

     
    public  function construct($idD ,$nomD){
        $this->idD=$idD;
        $this->nomD=$nomD;
       
    } 
}
?>