        <?php
            ini_set("display_errors",1);
            error_reporting(E_ALL);
            session_start();
            //les depandances
          require_once'model/UserDAO.php';
          require_once'model/SecretaireDAO.php';
          require_once'model/MedcinDAO.php';
          require_once'model/ServiceDAO.php';
          require_once'model/DomaineDAO.php';
          require_once'model/IPatientDAO.php';
          require_once'model/Rendez_VousDAO.php';
         require_once'entities/User.class.php';
         require_once'model/EventDAO.php';

        class Users extends Controller {
            
            public function construct(){
                parent::__construct();
            }
   //la fonction connection
   public function logg(){
      session_unset();
      session_destroy();
      header(LOC);
   }
        public function log(){
            $erreur=false;
            if(isset($_POST['connecter'])){
            $udb= new userDB();
            $login=$_POST['login'];
            $password=$_POST['pasword'];
            $udb->login($login,$password);
            $data=$udb->login($login,$password);
            foreach($data as $pa){
                    $pa['id'];
            }
            //si la connection existe
                if($data){
                   
                    if($pa[PROFIL]=='secretaire'){
                        $_SESSION['sec']=$pa[PROFIL];
                    header('Location:menu');
                    }elseif($pa[PROFIL]=='admin'){
                        $_SESSION['ad']=$pa[PROFIL];
                        header('Location:menuA');
                    }elseif($pa[PROFIL]=='medcin'){
                           $_SESSION['med']=$pa[PROFIL];
                        header('Location:menuM');
                    }
                    
                
                }
                else{
            
                $data="Mauvaise login ou Mot de Passe";
                return $this->view->load(USER,$data);

                
            }

            return $this->view->load(USER);
            
            }else{
            
            return $this->view->load(USER);
            
            }
            
        }
        //fonction menu secretaire 
                public function menu(){
                    $addr= new EventDB();
                    $dat=$addr->nbRv();
                    $pdb=new PatientDB();
                    $data=$pdb->nbPa();
                    if(isset( $_SESSION['sec'])&&  $_SESSION['sec']==SEC){

                return $this->view->load('menu.php',$data,$dat);
                    }else{
           
                        header(LOCATION);
                    }
                    }
            //fonction menu admin
                public function menuA(){
                    $nbsec=new SecretaireDB();
                    $nbserv=new ServiceDB();
                    $nbmed=new MedcinDB();
                    $nbdom=new DomaineDB();
                    $data=$nbsec->nbSec();
                    $dat=$nbmed->nbMed();
                    $donne=$nbserv->nbServ();
                    $donne1=$nbdom->nbdom();
                    if(isset($_SESSION['ad']) && $_SESSION['ad']==ADMIN){

                    return $this->view->load('menuA.php',$data,$dat,$donne,$donne1);
                    }else{
           
                        header(LOCATION);
                    }
                    }
                //fonction menu Medcin
                    public function menuM(){
                        if(isset($_SESSION['med'])&& $_SESSION['med']==MED){

                        return $this->view->load('menuM.php');
                        }else{
           
                            header(LOCATION);
                        }
                }
        }
        ?>