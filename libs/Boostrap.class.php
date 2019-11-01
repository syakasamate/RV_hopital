<?php
 class Boostrap{
   
    public function  __construct(){
           $var=null;
           $var= new Model();
           //Recuperation de  l'url
           $bimd='Users/medical.jpg';
           $cal='public/style/style.css';
           if($_GET['url']==$cal){
            require_once'public/style/style.css';
        }
           if($_GET['url']==$bimd){
               require_once'Users/medical.jpg';
           }
           
           $img='public/css/style.css';
           $img1='public/css/style2.css';
            $css='Patient/public/css/style.css';
             $d='Domaine/public/css/style2.css';
             $ser='Service/public/css/style.css';
               $m='Medcin/public/css/style2.css';
               $p='Planing/public/css/style.css';
               $se='Secretaire/public/css/style2.css';
               $r='RendezVous/public/css/style.css';
           if($_GET['url']==$img1||$_GET['url']==$d||$_GET['url']==$ser||$_GET['url']==$m||
           $_GET['url']==$se||$_GET['url']==$p||$_GET['url']==$r){
            require_once'public/css/style2.css';
           }
           if($_GET['url']==$img||$_GET['url']==$css){
            require_once'public/css/style.css';
           }
           $js='public/js/style.js';
             
           if($_GET['url']==$js){
                 require_once'public/js/style.js';
           }
           $serv='Service/public/js/bootstrap.min.css';
           $med='Medcin/public/js/bootstrap.min.css';
           $dom='Domaine/public/js/bootstrap.min.css';
           $pl='Planing/public/js/bootstrap.min.css';
           $sec='Secretaire/public/js/bootstrap.min.css';
           $modif='Patient/public/js/bootstrap.min.css';
           $rt='public/js/bootstrap.min.css';
           $rv='RendezVous/public/js/bootstrap.min.css';
           
             if($_GET['url']==$rt ||  $_GET['url']==$modif || $_GET['url']==$rv ||$_GET['url']==$serv ||$_GET['url']==$med
             ||$_GET['url']==$dom ||$_GET['url']==$pl||$_GET['url']==$sec){
               require_once'public/js/bootstrap.min.css';
               
           }
          $f='public/fontawesome-free-5.10.1-web/css/all.css';
          if($_GET['url']==$f){
           require_once'public/fontawesome-free-5.10.1-web/css/all.css';
          }
       if(isset($_GET['url'])){
            $url= explode("/",$_GET['url']);
            if($_GET['url']=="index.php"){
               $user="Users";
                $file = 'controller/'.$user.'.controller.php';
				if(file_exists($file))
				{
					require_once $file;
                    $controller = $user;
                  
					$controller = new $controller();
					if(method_exists($controller,"log")){
                        $controller->log();
					}
    
                }
               
        }
            //si l'url est different du fichier boostrap
            $controller='controller/'.$url[0].'.controller.php';
              //si le  fichier controller existe
            if(file_exists($controller)){
                require_once $controller;
                $contol_objet=new $url[0]();
            
                if(isset($url[2])){
                    if(method_exists($contol_objet,$url[1])){
                        $m=$url[1];
                        $contol_objet->$m($url[2]);
                    }
                   else{
                     echo "la methode $url[1] n'existe pas";
                    }
                }elseif($url[1]){
                   
                    if(method_exists($contol_objet,$url[1])){
                        $m=$url[1];
                        $contol_objet->$m();

                    }
                   else{
                     echo "la methode $url[1] n'existe pas";
                    } 
                }

            }  
            elseif($_GET['url']=="index.php"){
              echo"";
              
            }  else{
                  echo "le controller $url[0] n'esxiste pas";
            } 
        }
        
        }
        
      
    }

?>