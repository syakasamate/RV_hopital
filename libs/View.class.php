<?php
class View{
   //la fonction pour charger la fonction charger 
 public function load(){
    $num=func_num_args();
    $arg=func_get_args();

    switch($num){
        case 1:
        $this->charger($arg[0]);
        break;
        case 2:
        $this->charger($arg[0],$arg[1]);
        break;
        case 3;
        $this->charger($arg[0],$arg[1],$arg[2]);
        break;
        case 4;
        $this->charger($arg[0],$arg[1],$arg[2],$arg[3]);
        break;
        case 5;
        $this->charger($arg[0],$arg[1],$arg[2],$arg[3],$arg[4]);
        break;
        default:
        break;
    }
    }
    //la fonction pour charger les pages et les donées
     private function charger($page, $data=array(),$dat=array(),$donne=array(),$donne1=array()){
         $date=$data;
         $page='view/'.$page;
         if(file_exists($page)){
             require_once $page;
         }else{
             echo" la view $page n'existe pas";
         }
        
     }
}


?>