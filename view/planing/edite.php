<?php require_once'view/head.php';
 foreach($dat as $pl){
    $pl[0];
}
 ?>
<body  class="card text-white bg-info">
<div class="container col-md-7 col-md-offset-2">
    <div class="panel panel-info">
    <div class="panel-heading"> <h4> Modification du  Planing</h4></div>
    <div class="panel-body">
    <form action="<?php echo URL.'Planing/update';?>"   method="post" >
    <div class="form-group">
    <label for="" class="form control-label">ID Planing</label>
    <input type="text" class="form-control" name="idPl" value="<?=$pl[0]?>" readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">CODE Planing</label>
    <input type="text" class="form-control" name="codePl" value="<?=$pl[1]?>" readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Date Planing</label>
    <input type="date" class="form-control" name="datePl"  value="<?=$pl[2]?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Heure-Debut</label>
    <input type="time" class="form-control" name="heureDebPl"  value="<?=$pl[3]?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Heure-Fin</label>
    <input type="time" class="form-control" name="heureFinPl"  value="<?=$pl[4]?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Medcin</label>
    <select   class="form-control" name="nomMed" id="nomMed">
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
    <input type="submit" value="Modification " name="Modifier"  class="btn btn-primary">
    <button type="reset" class="btn btn-warning"> Annuler</button>
    <button  class="btn btn-info"> <a href="<?php echo URL.'Planing/listePl';?>"></a> Retour</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    <div>
    

</body>
</html>