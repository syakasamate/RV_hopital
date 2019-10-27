<?php require_once'view/head.php';
foreach($donne as $med){
    $med[0];
}
 ?>
<body class="card text-white bg-info">
<div class="container col-md-9 col-md-offset-2">
    <div class="panel panel-info">
    <div class="panel-heading">Ajout Medcin </div>
    <div class="panel-body">
    <form action="<?php echo URL.'Medcin/update';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">ID Medcin</label>
    <input type="text" class="form-control" name="idM" value="<?= $med[0];?>" readonly >
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Code Medcin</label>
    <input type="text" class="form-control" name="codeM" value="<?= $med[1];?>" readonly >
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Medcin</label>
    <input type="text" class="form-control" name="nomM" value="<?=  $med[2];?>" >
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Prenom Medcin</label>
    <input type="text" class="form-control" name="prenomM" value="<?=  $med[3];?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Tel Medcin</label>
    <input type="text" class="form-control" name="telM"  value="<?=  $med[4];?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Email Medcin</label>
    <input type="text" class="form-control" name="emailM"  value="<?=  $med[5];?>">
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
    <div class="form-group">
    <label for="" class="form control-label">Nom Domaine</label>
    <select name="nomD" id="nomS">
    <?php 
    foreach($dat as $dom ){
    foreach($dom as $domaine){
        ?>
        echo $domaine[1];<option value=""></option>
     <option value="<?= $domaine[0]?>"><?=  $domaine[2]?></option>
     <?php
    }
}
  ?>  
    </select>
    </div>

    <input type="submit" value="Modifier" name="Modifier"  class="btn btn-primary">
    <button type="reset" class="btn btn-warning"> Annuler</button>
    <button  class="btn btn-info"> <a href="<?php echo URL.'Medcin/listeM';?>"></a> Retour</button>


    </form>
    </div>
    </div>
    </div>
   
    <div>
    </div>

</body>
</html>