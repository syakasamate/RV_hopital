<?php require_once'view/head.php';
 
?>

<body class="card text-white bg-info" >
<div class="container col-md-5 col-md-offset-2">
    <div class="panel panel-info">
    <div class="panel-heading">Ajout Rendez_Vous </div>
    <div class="panel-body">
    <form action="<?php echo URL.'RendezVous/addR';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">Heure Rv</label>
    <input type="time" class="form-control" name="heureRv">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Date Rv</label>
    <input type="date" class="form-control" name="dateRv">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Medecin</label>
    <select name="nomM" id="nomM">
      <option value=""></option>
    <?php
    foreach($data as $med ){
    foreach($med as $medecin){
      ?>
        <option value="<?php  echo $medecin[0];?>"><?=$medecin[1]?></option>
        <?php
      
    }
}
?>
    </select>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Patient</label>
    <select name="nomP" id="nomp">
      <option value=""></option>
    <?php 
    foreach($dat as $pat ){
    foreach($pat as $patient){
        ?>
     <option value="<?= $patient[0]?>"><?=$patient[1]?></option>
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
    </div>
    <div>
  

</body>
</html>