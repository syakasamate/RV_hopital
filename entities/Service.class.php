<?php
class  ServiceC{
    private $idS;
    private $nomS;

  


	public function getIdS() {
		return $this->idS;
	}

	public function setIdS($idS) {
		$this->idD = $idS;
	}

	public function getNomS() {
		return $this->nomS;
	}

	public function  setNomS($nomS) {
		$this->nomS=$nomS;
	}

     
    public  function construct($idS ,$nomS){
        $this->idS=$idS;
        $this->nomS=$nomS;
       
    } 
}
?>