<?php require_once'view/head.php';
require_once'view/headAdmin.php';
$dat=$dat+1;
$r=sprintf("%05d",$dat);
 ?>
<body  class="card text-white bg-info" >
<div class="container col-md-6 col-xs-10 col-md-offset-3" style="margin-top:-900px;">
    <div class="panel panel-info">
    <div class="panel-heading">Ajout Secretaire</div>
    <div class="panel-body">
    <form action="<?php echo URL.'Secretaire/addSec';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">Code Secretaire</label>
    <input type="text" class="form-control" name="codeSec" value="SC-<?= $r?>" readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Secretaire</label>
    <input type="text" class="form-control" name="nomSec">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Prenom Secretaire</label>
    <input type="text" class="form-control" name="prenomSec">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Tel Secretaire</label>
    <input type="text" class="form-control" name="telSec">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Email Secretaire</label>
    <input type="text" class="form-control" name="emailSec">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Service</label>
    <select  class="form-control" name="nomS" id="nomS">
    <?php
    foreach($data as $serv ){
    foreach($serv as $service){
      ?>
        <option value=""></option>
        <option value="<?php  echo $service[0];?>"><?=$service[2]?></option>
        <?php
    }
}
?>
    </select>
    </div>
    
    <input type="submit" value="Enregistrer" name="envoyer"  class="btn btn-primary col-md-offset-3">
    <button type="reset" class="btn btn-warning"> Annuler</button>

    </form>
    </div>
    </div>
    </div>
    </div>
    <div>
    
   
</body>
</html>