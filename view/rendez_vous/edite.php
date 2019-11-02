<?php require_once'view/head.php';

    foreach($donne as $rv ){
           $rv[0];
    }
?>

<body class="card text-white bg-info" >
<div class="container  col-md-6 col-xs-10 col-md-offset-3" style="margin-top:-500px;">
    <div class="panel panel-info">
    <div class="panel-heading">Modifier  Rendez_Vous  </div>
    <div class="panel-body">
    <form action="<?php echo URL.'RendezVous/update';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">ID Rv</label>
    <input type="text" class="form-control" name="idRv" value="<?= $rv[0]?>" readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">CODE Rv</label>
    <input type="text" class="form-control" name="codeRv" value="<?= $rv[1]?>" readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Date Rv</label>
    <input type="datetime-local" class="form-control" name="dateRv"  value="<?= $rv[2]?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Medecin</label>
    <select  class="form-control" name="nomM" id="nomM">
    <?php
    foreach($data as $med ){
    foreach($med as $medecin){
      ?>
      <option value=""></option>
        <option value="<?php  echo $medecin[0];?>"><?=$medecin[2]?></option>
        <?php
      
    }
}
?>
    </select>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Patient</label>
    <select  class="form-control" name="nomP" id="nomp">
    <?php 
    foreach($dat as $pat ){
    foreach($pat as $patient){
        ?>
        <option value=""></option>
     <option value="<?= $patient[0]?>"><?=$patient[2]?></option>
     <?php
    }
}
  ?>  
    </select>
    </div>

    <input type="submit" value="Modifier" name="Modifier"  class="btn btn-primary">
    <button type="reset" class="btn btn-warning"> Annuler</button>
    <button  class="btn btn-info"> <a href="<?php echo URL.' RendezVous /listerv';?>"></a> Retour</button>

    </form>
    </div>
    </div>
    </div>
    </div>
    <div>
  

</body>
</html>