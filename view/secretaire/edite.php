<?php require_once'view/head.php';
foreach($dat as $sec ){
    $sec[0];
}
 ?>
<body  class="card text-white bg-info" >
<div class="container col-md-9 col-md-offset-2">
    <div class="panel panel-info">
    <div class="panel-heading"> Modification Secraitere</div>
    <div class="panel-body">
    <form action="<?php echo URL.'Secretaire/update';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">ID secretaire</label>
    <input type="text" class="form-control" name="idSec" value="<?= $sec[0]?>" readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">CODE Secretaire</label>
    <input type="text" class="form-control" name="codeSec" value="<?= $sec[1]?>" readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Secretaire</label>
    <input type="text" class="form-control" name="nomSec" value="<?= $sec[2]?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Prenom Secretaire</label>
    <input type="text" class="form-control" name="prenomSec" value="<?=  $sec[3]?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Tel Secretaire</label>
    <input type="text" class="form-control" name="telSec" value="<?=  $sec[4]?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Email Secretaire</label>
    <input type="text" class="form-control" name="emailSec" value="<?=  $sec[5]?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Service</label>
    <select name="nomS" id="nomS">
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
    
    <input type="submit" value="Modifier" name="Modifier"  class="btn btn-primary col-md-offset-3">
    <button type="reset" class="btn btn-warning"> Annuler</button>
    <button  class="btn btn-info"> <a href="<?php echo URL.'Secretaire/listeSec';?>"></a> Retour</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    <div>
    
   
</body>
</html>