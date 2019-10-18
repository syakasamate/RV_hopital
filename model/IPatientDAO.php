<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
require_once'entities/Patient.class.php';
class PatientDB extends Model{

    public function construct(){
        parent::__construct();
    }


    public function addpatient(PatientC $patient){
        $sql="INSERT INTO Patient  VALUES(null,'".$patient->getNomP()."','".$patient->getPrenomP()."','".$patient->getAgeP()."'
        ,'".$patient->getGenreP()."','".$patient->getTelP()."','".$patient->getAdresseP()."','".$patient->getEmailP()."')";
        if($this->db!=null){
        return $this->db->exec($sql);
        }else {
          
         return null;
        }
    }
    public function listepatient(){
        $sql="SELECT * FROM Patient";
        if($this->db!=null){
            return $this->db->query($sql)->fetchAll();
        }else{
            return null;

        }
   
        }
        public function telP($tel){
            if( preg_match('/^(77|78|70|76)[0-9]{7}$/',$tel)){
                return true;
            }
        }
        function emailvalid($email){
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            }
        }
        public function deletePatient($idP){
			$sql = "DELETE FROM Patient WHERE id_P_Patient = $idP";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
        public function getPatient($idP)
        {
            $sql = "SELECT *
                     FROM Patient
                     WHERE id_P_Patient = ".$idP;
            if($this->db!= null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		public function updatePatient(PatientC $patient){
			$sql = "UPDATE Patient SET Nom_p = '".$patient->getNomP()."',
						    Prenom_p = '".$patient->getPrenomP()."',
                            Age_p='".$patient->getAgeP()."',
                            Genre_p='".$patient->getGenreP()."',
                            Tel_p='".$patient->getTelP()."',
                            Adresse_p='".$patient->getAdresseP()."',
                            Email_p='".$patient->getEmailP()."'
						WHERE  id_P_Patient  = ".$patient->getIdP();
			
			if($this->db != null)
			{
				return $this->db->exec($sql);
				
			}else{
				return null;
			}
		}
}
?>