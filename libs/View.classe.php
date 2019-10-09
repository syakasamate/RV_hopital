<?php
class View{
    
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
        default:
         break;
    }

    }
     private function charger($page, $data=array()){
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