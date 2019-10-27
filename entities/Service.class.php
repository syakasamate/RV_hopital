<?php
class  ServiceC{
    private $idS;
    private $nomS;
   private $codeS;


	public function getCodeS() {
		return $this->codeS;
	}

	public function setCodeS($codeS) {
		$this->codeS = $codeS;
	}
  


	public function getIdS() {
		return $this->idS;
	}

	public function setIdS($idS) {
		$this->idS =$idS;
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