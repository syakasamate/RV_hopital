<?php
 ini_set("display_errors",1);
 error_reporting(E_ALL);
require_once'entities/Rendez_Vous.class.php';
 class RendezVousDB{
     //contructeur Rendez_vous

        public $days=['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samdi','Dimanche'];
        private $months=['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre',
        'Nomvembre','Decembre'];
        public $month;
        public $year;
/**
 * 
 */
public function __construct(?int $month=null , ?int $year=null){
    if($month==null  || $month<1 || $month>12){
        $month=intval(date('m'));
    }
        if($year===null){
            $year=intval(date('Y'));
        }
   
    $this->month=$month;
    $this->year=$year;
}
/**
 * Retour le premier jout mois
 */
public function getStartingDay():DateTime{
    return  new DateTime("{$this->year}-{$this->month}-01");

}

/**
* Retoureneb le mois en toute lettre (exp mars 2018);       
*/
public function toString():string{
   return $this->months[$this->month-1].''.$this->year;
    
}
public function geTWeeks(): int{
    $start=$this->getStartingDay();
    $and=(clone $start)->modify('+1 month -1 day');
   $weeks=intval($and->format('W'))-intval($start->format('W'))+1;
   if($weeks<0){
       $weeks=intval($and->format('W'));
   }else{
       return $weeks;
   } 
}
public function widthinMonth(DateTime $date): bool{
    return $this->getStartingDay()->format('Y-m')===$date->format('Y-m');
     
}
/**
 * Return le mois suivant
 */
public function nextMonth()
{
    $month=$this->month+1;
    $year=$this->year;
    if($month>12){
        $month=1;
        $year+=1;

    }
    return new RendezVousDB($month,$year);
} 
/**
 * Return le mois precedent
 */
public function previousMonth()
{
    $month=$this->month-1;
    $year=$this->year;
    if($month<1){
        $month=12;
        $year -=1;

    }
    return new RendezVousDB($month,$year);
} 



function e404(){
    require_once '../public/404.php';
    exit();
}
function add(...$vars){
    foreach($vars as $var){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
   
}



function h(?string $value): string{
    if($value===null){
    return '';
    }
    return htmlentities($value);
}

 


    
 }
?>