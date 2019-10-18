    <?php
    ini_set("display_errors",1);
    error_reporting(E_ALL);
    require_once'entities/Patient.class.php';
    class PatientDB extends Model{
       //constructeur du model de la class patient
        public function construct(){
            parent::__construct();
        }
        
        //la fonction ajout patient 
        public function addpatient(PatientC $patient){
            $sql="INSERT INTO Patient  VALUES(null,'".$patient->getNomP()."','".$patient->getPrenomP()."','".$patient->getAgeP()."'
            ,'".$patient->getGenreP()."','".$patient->getTelP()."','".$patient->getAdresseP()."','".$patient->getEmailP()."')";
            if($this->db!=null){
            return $this->db->exec($sql);
            }else {
            
            return null;
            }
        }
        //la fonction qui me renvoi une liste de patient
        public function listepatient(){
            $sql="SELECT * FROM Patient";
            if($this->db!=null){
                return $this->db->query($sql)->fetchAll();
            }else{
                return null;

            }
    
            }
            // la fonctin qui permet de verifier si un numero de telephone est valide 
            public function telP($tel){
                if( preg_match('/^(77|78|70|76)[0-9]{7}$/',$tel)){
                    return true;
                }
            }
            // la fonctin qui permet de verifier si un email est valide 
            function emailvalid($email){
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return true;
                }
            }
            // la fontion suppression patient 
            public function deletePatient($idP){
                $sql = "DELETE FROM Patient WHERE id_P_Patient = $idP";

                if($this->db != null)
                {
                    return $this->db->exec($sql);
                }else{
                    return null;
                }
            }
            // cette fonction nous renvoi la colonne selectionné 
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
            //la fonction modifier patient
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