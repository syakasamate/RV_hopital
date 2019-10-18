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
            $heureRv=$_POST['heureRv'];
            $dateRv=$_POST['dateRv'];
            $nomM=$_POST['nomM'];
            $nomP=$_POST['nomP'];
            if(!empty($heureRv)&& !empty($dateRv)&& !empty($nomM) && !empty($nomP)){
                //Intanciation du class
                $rv= new  RendezVousC();
                $rv->setheureRv($heureRv);
                $rv->setDateRv($dateRv);
                $rv->setIdM($nomM);
                $rv->setIdP($nomP);
                //appel à la fonction ajout
                $addr->addRv($rv);
                
            }
            //liste deroulante medecin
            $listM=new MedcinDB();
            $data['list']=$listM->listMedcin();
            //liste deroulante patient 
            $listP=new PatientDB();
            $dat['list']=$listP->listepatient();
            return $this->view->load("rendez_vous/add.php",$data,$dat);
        }else{
            $listM=new MedcinDB();
            $data['list']=$listM->listMedcin();
            $listP=new PatientDB();
            $dat['list']=$listP->listepatient();
            return $this->view->load("rendez_vous/add.php",$data,$dat); 
        }
    
    }
    //liste des rendez_vous
    public function listerv(){
        $rvdb=new RendezVousDB ();  
        $data['liste']=$rvdb->listerv();
        return $this->view->load("rendez_vous/liste.php",$data);
        

        }
        //methode de modification de rendez_vous
        public function update(){
            //Instanciation du model
            $rdb=new RendezVousDB();
            if(isset($_POST['Modifier'])){
                extract($_POST);
                if(!empty($idRv) && !empty($heureRv)&& !empty($dateRv)  && !empty($nomM)) {
                    $rv = new  RendezVousC();
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

    }
    ?>