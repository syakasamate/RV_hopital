
<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
require_once'model/EventDAO.php';
require_once'entities/Medcin.class.php';
class Event extends Controller{
      //le constructeur
      public function  controller(){
        parent::__controller();
    }
    
  
    public function Detail(){
        if(!isset($_GET['id'])){
            header('location: /404.php');
          }
          try {
           $event =$events->find($_GET[('id')]);
         } catch (\Exeception $e) {
          e404();
          }
         
          ?>
          <h1><?= h($event['code_Rv']);?></h1>
          <ul>
          <li>Date:<?=(new DateTime($event['Date_Heur_Rv']))->format('d/m/Y');?></li>
          <li>Heure de démarage:<?=(new DateTime($event['starttime']))->format('H:i');?></li>
         <li>
         Description: <br>
         <?= h($event['description']);?>
         </li>
          </ul>
         
          <?=require_once'view/footerc.php';
        
    }
       
}