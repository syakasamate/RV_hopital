    <?php
    require_once'view/head.php' ;
require_once'view/headS.php' ;
    ini_set("display_errors",1);
    error_reporting(E_ALL);
    //les dependances
    require_once'model/Rendez_VousDAO.php';
    require_once'model/IPatientDAO.php';
    require_once'model/MedcinDAO.php';
    require_once'entities/Rendez_Vous.class.php';
    require_once'model/EventDAO.php';
        //constructeur du  controller Rendes_vous

class RendezVous extends Controller{
        public function construct(){
            parent::__construct();
        }


        public function listeC(){
                 $events= new EventDB();
                
             $month=new  RendezVousDB($_GET['month'] ?? null,$_GET['year'] ?? null);
             $start=$month->getStartingDay();
             
             $start=$start->format('N')==='1'? $start :$month->getStartingDay()->modify('last monday');
             $weeks=$month->geTWeeks(); 
             $end=(clone $start)->modify('+'.(6 + 7*($weeks-1)).'days');
            
             $events=$events->getEventsBetweenByDay($start,$end); 
             require_once'view/headerc.php';
             ?>
             <div class="d-flex flex-row align-items-center justify-content-between max-sm-3">
             <h1 style="margin-top:-700px;" class="col-md-offset-4"><?= $month->toString();?></h1>
              <div style="margin-left:94%">
             <a href="<?php  echo URL.'RendezVous/listeC'?>?month=<?=$month->previousMonth()->month;?>&year=<?=$month->previousMonth()->year;?>" class="btn btn-primary" style="margin-top:200px;">&lt</a>
             <a href="<?php  echo URL.'RendezVous/listeC'?>?month=<?=$month->nextMonth()->month;?>&year=<?=$month->nextMonth()->year;?>" class="btn btn-primary" style="margin-top:200px;">&gt</a>
             </div>
             </div>
             <table class=" container  col-md-8 col-xs-10 col-md-offset-3 calendar__table calendar__table--<?= $weeks;?>weeks " style="margin-top:-10px;" >
             <caption></caption>
             <th scope="col" ></th>
             <?php for($i=0;$i<$weeks;$i++):?>
             <tr>
            
               <?php foreach($month->days as $k => $day):
                $date=(clone $start)->modify("+".($k+ $i*7 )."days");
                //on recupere les evenements
                $eventsForDay=$events[$date->format('Y-m-d')]?? [];
            
                ?>
                
             <td class="<?= $month->widthinMonth($date)?'': 'calendar__othermonth';?>">
             <?php if($i==0):?> 
             <div class="calendar__weekday"> <?=$day;?></div>
             <?php endif?>
              <div class="calendar__day"><?=$date->format('d')?></div>
              <?php foreach($eventsForDay as $event):?>
              <div class="calendar__event">
              <?=(new DateTime($event['Date_Heur_Rv']))->format('H:i')?>- <a href="<?php  echo URL.'RendezVous/Detail'?>?id=<?=$event['Id_rv_rv'];?>"> <input type="submit"  class="btn-info" value='voir Detaille'></a> <br> <br>

              </div>
               <?php endforeach;?>
             </td> 
            <?php endforeach;?> 
             </tr>
            <?php endfor;?>
            </table> 
            <?=require_once'view/footerc.php';
        }

        public function Detail(){
            $events= new EventDB();
    
            if(!isset($_GET['id'])){
              
                 $ok=true;
            }
              try {
               $event =$events->find($_GET[('id')]);
             } catch (\Exeception $e) {
              e404();
              }
             
              ?>
           <div class="container    col-md-7 -xs-10 col-md-offset-3" style=" margin-top:-520px;margin-bottom:30px;">
        <div class="panel panel-info" >
            <div class="panel-heading"> <h5>Dataille Rendez_vous</h5></div>
            <div class="panel-body">
            <?php 
            if(isset($dat)){
              foreach($dat as $pa){
               ?>
                <div class="alert alert-danger"><?= $pa?></div>
            <?php
              }
            }?>
            <table class="table table-bordered">
             <caption></caption>
         
          <tr>
          <th scope="col">Code Rendez_vous</th>
          <th scope="col">Date Rv</th>
          <th scope="col">Heure Rv</th>
          <th scope="col">Nom Patient</th>
          <th scope="col">Nom Patient</th>
          <th scope="col" colspan="2 ">Action</th>
        </tr>
        <?php 
        echo "<tr>
        <td>$event[1]</td>
        <td>"?> <?=  (new DateTime($event[2]))->format('d/m/Y')?>  <?= "</td>
        <td>"?> <?= (new DateTime($event[2]))->format('H:i') ?><?="</td>
        <td>$event[3]</td>
        <td>$event[4]</td>"?>
        <td><button class="btn-info"><a href="<?php  echo URL.'RendezVous/edit/'.$event[0];?>"> Edider</a></button> </td>
        <?php
      echo" </tr> ";
             
        }
        
        
 // la methode ajout rencez_vous    
 public function addR(){
  if(isset( $_SESSION['sec'])&&  $_SESSION['sec']==SEC){

        //Intanciation du model
        $addr=new EventDB(); 
        if(isset($_POST['envoyer'])){
            $codeRv=$_POST['codeRv'];
            $dateRv=$_POST['dateRv'];
            $nomM=$_POST['nomM'];
            $nomP=$_POST['nomP'];
            if( !empty($dateRv)&& !empty($nomM) && !empty($nomP)){
                //Intanciation du class
                $rv= new  RendezVousC();
                $rv->setcodeRv($codeRv);
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
            $events= new EventDB();
             $donne=$events->nbRv();
            return $this->view->load("rendez_vous/add.php",$data,$dat,$donne);
        }else{
            $listM=new MedcinDB();
            $data['list']=$listM->listMedcin();
            $listP=new PatientDB();
            $dat['list']=$listP->listepatient();
            $events= new EventDB();
              $donne=$events->nbRv();
            return $this->view->load("rendez_vous/add.php",$data,$dat,$donne); 
        }
    
    }else{
           
      header(LOCATION);
  }
  }
    //liste des rendez_vous
    public function listerv(){
      if(isset( $_SESSION['sec'])&&  $_SESSION['sec']==SEC ||isset($_SESSION['med'])&& $_SESSION['med']==MED ){

        $rvdb=new EventDB();
        $data['liste']=$rvdb->listerv();
        return $this->view->load(LISTERV,$data);
      }else{
           
        header(LOCATION);
    }

        }
        //methode de modification de rendez_vous
        public function update(){
          if(isset( $_SESSION['sec'])&&  $_SESSION['sec']==SEC){
            //Instanciation du model
            $rdb=new EventDB();
            if(isset($_POST['Modifier'])){
                extract($_POST);
                if(!empty($idRv)&& !empty($dateRv)  && !empty($nomM)) {
                    $rv = new  RendezVousC();
                    $rv-> setCodeRv($codeRv);
                    $rv-> setIdRv($idRv);
                    $rv->setDateRv($dateRv);
                    $rv->setIdM($nomM);
                    $rv->setIdP($nomP);
                    //appel à la fonction de modification
                    $ok = $rdb->updateRv($rv);
                  header('location:../RendezVous/listeC');
                }
            }
            header('location:../RendezVous/listeC');

            return  $this->listerv();
        }else{
           
          header(LOCATION);
      }
      }
        public function edit($idRv){
          if(isset( $_SESSION['sec'])&&  $_SESSION['sec']==SEC){

            //Instanciation du model
            $rdb=new EventDB();
            //Supression
            $donne['list']=$rdb->getRv($idRv);
            //chargement de la vue edite.php
            $listM=new MedcinDB();
            $data['list']=$listM->listMedcin();
            //liste deroulante patient 
            $listP=new PatientDB();
            $dat['list']=$listP->listepatient();
            return $this->view->load("rendez_vous/edite.php",$data,$dat,$donne);
        }else{
           
          header(LOCATION);
      }
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
      if(isset( $_SESSION['sec'])&&  $_SESSION['sec']==SEC){

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
      }else{
           
        header(LOCATION);
    }
   
  }

    }
    ?>