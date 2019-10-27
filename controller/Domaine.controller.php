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
            $data['ok']=0;
            if(isset($_POST['envoyer'])){
                $nomD=$_POST['nomD'];
                $codeD=$_POST['codeD'];
                if(!empty($nomD)){
                     //Intanciation du class 
                    $domaine=new DomaineC();
                    $domaine->setCodeD($codeD);
                    $domaine->setNomD($nomD);

                    //appel à la fonction ajout 
                 $ok=$ddb->addDomaine($domaine);
                 $data['ok']=$ok;
                 
                }
                   $dat=$ddb->nbD();
                return $this->view->load('domaine/add.php',$data,$dat);   
            }else{
                $dat=$ddb->nbD();
                return $this->view->load('domaine/add.php',$data,$dat);   

            }
        }
         //methode de modification de Domaine
         public function update(){
            //Instanciation du model
            $ddb=new DomaineDB();
            if(isset($_POST['Modifier'])){
                extract($_POST);
                if(!empty($idD) && !empty($nomD)) {
                    $domaine=new DomaineC();
                    $domaine->setIdD($idD);
                    $domaine->setCodeD($codeD);
                    $domaine->setNomD($nomD);
                    //appel à la fonction de modification
                    $ok = $ddb->updateDomaine($domaine);
                    $data['listee']=$ok;
                }
            }
        
            return  $this->listeD();
        }
        public function edit($idD){
			
            //Instanciation du model
            $pdb=new DomaineDB(); 
            //Supression
            $data['test']=$pdb->getDomaine($idD);
            //chargement de la vue edite.php
            return $this->view->load("domaine/edite.php", $data);
        }
        public function delete($idD){
            //Instanciation du model
            $pdb=new  DomaineDB();  
            //Supression
            $pdb-> deleteDomaine($idD);
            //Retour vers la liste
            return $this->listeD();
        }
        //function liste Domaine
        public function  listeD(){
            $listed=new DomaineDB();
            $data['liste']= $listed->listeDomaine();
                return $this->view->load('domaine/liste.php',$data);   
        
        }

  
}
?>