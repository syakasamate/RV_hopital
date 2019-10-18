<?php require_once'view/head.php';
 ?>
<body class="card text-white bg-info">
<div class="container col-md-9 col-md-offset-2">
    <div class="panel panel-info">
    <div class="panel-heading">Ajout Medcin </div>
    <div class="panel-body">
    <form action="<?php echo URL.'Medcin/addM';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">Nom Medcin</label>
    <input type="text" class="form-control" name="nomM">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Prenom Medcin</label>
    <input type="text" class="form-control" name="prenomM">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Tel Medcin</label>
    <input type="text" class="form-control" name="telM">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Email Medcin</label>
    <input type="text" class="form-control" name="emailM">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Service</label>
    <select name="nomS" id="nomS">
    <?php
    foreach($data as $serv ){
    foreach($serv as $service){
      ?>
        <option value=""></option>
        <option value="<?php  echo $service[0];?>"><?=$service[1]?></option>
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
     <option value="<?= $domaine[0]?>"><?=  $domaine[1]?></option>
     <?php
    }
}
  ?>  
    </select>
    </div>

    <input type="submit" value="Enregistrer" name="envoyer"  class="btn btn-primary">
    <button type="reset" class="btn btn-warning"> Annuler</button>

    </form>
    </div>
    </div>
    </div>
   
    <div>
    </div>

</body>
</html>