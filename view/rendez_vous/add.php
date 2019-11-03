            <?php
           ini_set("display_errors",1);
           error_reporting(E_ALL);
             require_once'view/head.php';
            require_once'view/headS.php';
            $donne=$donne+1;
        $r=sprintf("%05d",$donne);
        ?>
            

            <body class="card text-white bg-info" >
            <div class="container col-md-6 col-xs-10 col-md-offset-3" style="margin-top:-500px;">
                <div class="panel panel-info">
                <div class="panel-heading">Ajout Rendez_Vous </div>
                <div class="panel-body">
            <form action="<?php echo URL.'RendezVous/addR';?>"   method="post">
                <div class="form-group">
                <label for="" class="form control-label">Code Rv</label>
                <input type="texte" class="form-control" name="codeRv"  value="RV-<?= $r?>" readonly>
                </div>      
                <div class="form-group">
                <label for="" class="form control-label">Date Et Heure</label>
                <input type="datetime-local" class="form-control" name="dateRv">
                </div>
                <?php 
               if(!empty($donne1)){
                 ?>
                <div class="alert alert-danger"><?=$donne1?></div>
                <?php
               }
               ?>
               <?php 
               if(!empty($donne2)){
                 ?>
                <div class="alert alert-danger"><?=$donne2?></div>
                <?php
               }
               ?>
                <div class="form-group">
                <label for="" class="form control-label">Nom Medecin</label>
                <select    class="form-control" name="nomM" id="nomM">
                  <option value=""></option>
                <?php
                foreach($data as $med ){
                foreach($med as $medecin){
                  ?>
                    <option value="<?php  echo $medecin[0];?>"><?=$medecin[2]?></option>
                    <?php
                  
                }
            }
            ?>
                </select>
                </div>
                <div class="form-group">
                <label for="" class="form control-label">Nom Patient</label>
                <select   class="form-control" name="nomP" id="nomp">
                  <option value=""></option>
                <?php 
                foreach($dat as $pat ){
                foreach($pat as $patient){
          
                    ?>
                <option value="<?= $patient[0]?>"><?=$patient[2]?></option>
                <?php
                }
            }
              ?>  
                </select>
                </div>

                <input type="submit" value="Enregistrer" name="envoyer"  class="btn btn-primary">
                <input  type="reset" class="btn btn-warning"> 

                </form>
                </div>
                </div>
                </div>
                </div>
                <div>
              

            </body>
            </html>