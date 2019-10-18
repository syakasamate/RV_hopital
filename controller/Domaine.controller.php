<?php
//les depandances
require_once'model/DomaineDAO.php';
require_once'entities/Domaine.class.php';

class Domaine extends Controller{
    //le constructeur
    public function controller(){
        parent::__controller();
    }
    // la methode ajout  Domaine
      public  function addD(){
          //Intanciation du model
            $ddb=new DomaineDB();
            if(isset($_POST['envoyer'])){
                $data['ok']=0;
                $nomD=$_POST['nomD'];
                if(!empty($nomD)){
                     //Intanciation du class 
                    $domaine=new DomaineC();
                    $domaine->setNomD($nomD);
                    //appel à la fonction ajout 
                 $ok=$ddb->addDomaine($domaine);
                 $data['ok']=$ok;
                 
                }
                return $this->view->load('domaine/add.php',$data);   
            }else{
                return $this->view->load('domaine/add.php');   

            }
        }
  
}
?>