        <?php
            ini_set("display_errors",1);
            error_reporting(E_ALL);
            session_start();
          require_once'model/UserDAO.php';
            require_once'entities/User.class.php';
        class Users extends Controller {
            
            public function construct(){
                parent::__construct();
            }
   //la fonction connection
        public function log(){
            if(isset($_POST['connecter'])){
            $udb= new userDB();
            $login=$_POST['login'];
            $password=$_POST['pasword'];
            $udb->login($login,$password);
            $log=$udb->login($login,$password);
            foreach($log as $pa){
                    $pa['id'];
            }
            //si la connection existe
                if($log){
                    $_SESSION['log']=true;
                    if($pa['profil']=='secretaire'){
                    header('Location:menu');
                    }elseif($pa['profil']=='admin'){
                        header('Location:menuA');
                    }else {
                        header('Location:menuM');
                    }
                
                }
                else{
                ?>
                <p class="text-danger"><?php echo "Mauvais identifiant ou mot de passe";?></p>
                <?php
            }

            return $this->view->load('users/log.php');
            
            }else{
            
            return $this->view->load('users/log.php');
            
            }
            
        }
                public function menu(){
                
                return $this->view->load('menu.php');
                    }
                public function menuA(){
                    return $this->view->load('menuA.php');
                    }
                    public function menuM(){
                        return $this->view->load('menuM.php');
                }
        }
        ?>