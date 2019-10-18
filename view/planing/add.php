<?php require_once'view/head.php';
 ?>
<body  class="card text-white bg-info">
<div class="container col-md-7 col-md-offset-2">
    <div class="panel panel-info">
    <div class="panel-heading">Ajout Planing</div>
    <div class="panel-body">
    <form action="<?php echo URL.'Planing/addPl';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">Date Planing</label>
    <input type="date" class="form-control" name="datePl">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Heure-Debut</label>
    <input type="time" class="form-control" name="heureDebPl">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Heure-Fin</label>
    <input type="time" class="form-control" name="heureFinPl">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Medcin</label>
    <select name="nomMed" id="nomMed">
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
    <input type="submit" value="Enregistrer" name="envoyer"  class="btn btn-primary">
    </form>
    </div>
    </div>
    </div>
    </div>
    <div>
    

</body>
</html>