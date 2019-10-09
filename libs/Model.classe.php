<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
class Model{
    protected $db;
    public function __construct(){

        $this->db=$this->getconnexion();

    }

    private function getconnexion(){
        try {
        $host=DataBaseConfig::params()[0];
        $user=DataBaseConfig::params()[1];
        $pasword=DataBaseConfig::params()[2];
        $database=DataBaseConfig::params()[3];
    
         $dbn="mysql:host=$host;dbname=$database";
        $this->db=new PDO($dbn,$user,$pasword,
   array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION) );
        
        } catch (PDOException  $e) {
            $erreur_base=$e->getMessage();
            if(substr( $erreur_base,0,8)=="SQLSTATE"){
                echo"vous n'avez pas créé la base de donnee";
    
            }else{
                die("ERREUR ".$e->getMessage()); 
            }
           
        }
        return $this->db;
    }
}
?>