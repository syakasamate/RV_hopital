<?php
require_once'model/DomaineDAO.php';
require_once'entities/Domaine.class.php';

class Domaine extends Controller{
    public function controller(){
        parent::__controller();
    }
      public  function addD(){
            $ddb=new DomaineDB();
            if(isset($_POST['envoyer'])){
                $data['ok']=0;
                $nomD=$_POST['nomD'];
                if(!empty($nomD)){
                    $domaine=new DomaineC();
                    $domaine->setNomD($nomD);
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