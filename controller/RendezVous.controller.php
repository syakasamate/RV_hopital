    <?php
    //les dependances
    require_once'model/Rendez_VousDAO.php';
    require_once'model/IPatientDAO.php';
    require_once'model/MedcinDAO.php';
    require_once'entities/Rendez_Vous.class.php';

    class RendezVous extends Controller{
        //constructeur du  controller Rendes_vous
        public function construct(){
            parent::__construct();
        }
    //la methode ajout rencez_vous    
    public function addR(){
        //Intanciation du model
        $addr=new RendezVousDB ();
        if(isset($_POST['envoyer'])){
            $codeRv=$_POST['codeRv'];
            $heureRv=$_POST['heureRv'];
            $dateRv=$_POST['dateRv'];
            $nomM=$_POST['nomM'];
            $nomP=$_POST['nomP'];
            if(!empty($heureRv)&& !empty($dateRv)&& !empty($nomM) && !empty($nomP)){
                //Intanciation du class
                $rv= new  RendezVousC();
                $rv->setcodeRv($codeRv);
                $rv->setheureRv($heureRv);
                $rv->setDateRv($dateRv);
                $rv->setIdM($nomM);
                $rv->setIdP($nomP);
                //appel à la fonction ajout
                $donne1=$addr->addRv($rv);
                
            }
            //liste deroulante medecin
            $listM=new MedcinDB();
            $data['list']=$listM->listMedcin();
            //liste deroulante patient 
            $listP=new PatientDB();
            $dat['list']=$listP->listepatient();
            $donne=$addr->nbRv();
            return $this->view->load("rendez_vous/add.php",$data,$dat,$donne,$donne1);
        }else{
            $listM=new MedcinDB();
            $data['list']=$listM->listMedcin();
            $listP=new PatientDB();
            $dat['list']=$listP->listepatient();
            $donne=$addr->nbRv();
            return $this->view->load("rendez_vous/add.php",$data,$dat,$donne); 
        }
    
    }
    //liste des rendez_vous
    public function listerv(){
        $rvdb=new RendezVousDB ();  
        $data['liste']=$rvdb->listerv();
        return $this->view->load(LISTERV,$data);
        

        }
        //methode de modification de rendez_vous
        public function update(){
            //Instanciation du model
            $rdb=new RendezVousDB();
            if(isset($_POST['Modifier'])){
                extract($_POST);
                if(!empty($idRv) && !empty($heureRv)&& !empty($dateRv)  && !empty($nomM)) {
                    $rv = new  RendezVousC();
                    $rv-> setCodeRv($codeRv);
                    $rv-> setIdRv($idRv);
                    $rv->setheureRv($heureRv);
                    $rv->setDateRv($dateRv);
                    $rv->setIdM($nomM);
                    $rv->setIdP($nomP);
                    //appel à la fonction de modification
                    $ok = $rdb->updateRv($rv);
                    $data['listee']=$ok;
                }
            }
        
            return  $this->listerv();
        }
    
        public function edit($idRv){
                
            //Instanciation du model
            $rdb=new RendezVousDB();  
            //Supression
            $donne['list']=$rdb->getRv($idRv);
            //chargement de la vue edite.php
            $listM=new MedcinDB();
            $data['list']=$listM->listMedcin();
            //liste deroulante patient 
            $listP=new PatientDB();
            $dat['list']=$listP->listepatient();
            return $this->view->load("rendez_vous/edite.php",$data,$dat,$donne);
        }
        public function delete($idRv){
            //Instanciation du model
            $rdb=new RendezVousDB();  
            //Supression
            $rdb->deleterv($idRv);
            //Retour vers la liste
            return $this->listerv();
        }
          // fonction rechere rendez_vous
    public function recherche(){
        $idRv=$_GET['recherche'];
        $rdb=new RendezVousDB();  
        $dat['list']=$rdb->recherche($idRv);
       if( $dat['list']){
      
      return $this->view->load(LISTERV,$dat);
      }else{
          $dat['list']="le code recherchez n'existe pas!";
          $rvdb=new RendezVousDB ();  
        $data['liste']=$rvdb->listerv();
          return $this->view->load(LISTERV,$data,$dat);

      }
   
  }

    }
    ?>