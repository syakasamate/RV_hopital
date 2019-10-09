<?php
 class Boostrap{
   
    public  function  __construct(){
           $var=Null;
           $var= new Model();
        if(isset($_GET['url'])){
            $url= explode("/",$_GET['url']);
            $img='public/css/style.css';
            if( $_GET['url']==$img){
             require_once'public/css/style.css';
            }
            $rt='public/js/bootstrap.min.css';
        
            if($_GET['url']==$rt ){
                require_once'public/js/bootstrap.min.css';
                
            }
           if($_GET['url']!=$rt){
            $controller='controller/'.$url[0].'.controller.php';
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
            else{
                echo "le controller $url[0] n'esxiste pas";
            }
           }
            
        }
    }
}
?>