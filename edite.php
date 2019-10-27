<?php require_once'view/head.php';
 foreach($data as $patient ){
      $patient; 
    }

      ?>
 
<body class="card text-white bg-info ">
<div class="container col-md-7 col-md-offset-2">
    <div class="panel panel-info">
    <div class="panel-heading"> Page Modification Patient </div>
    <div class="panel-body">
    <form action="<?php echo URL.'Patient/update';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">ID Patient<label>
    <input type="text" class="form-control" name="idP" value="<?= $patient[0];?> "readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Patient</label>
    <input type="text" class="form-control" name="nomP" value="<?= $patient[1];?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Prenom Patient</label>
    <input type="text" class="form-control" name="prenomP" value="<?= $patient[2];?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Age Patient</label>
    <input type="text" class="form-control" name="ageP" value="<?= $patient[3];?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Genre Patient</label><br>
    <input type="radio" name="sexe" value="M" checked="checked" >Masculin 
    <input type="radio" name="sexe" value="F" > Feminin
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Tel Patient</label>
    <input type="text" class="form-control" name="telP" value="<?= $patient[5];?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Adresse Patient</label>
    <input type="text" class="form-control" name="adresseP" value="<?= $patient[6];?>">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Email Patient</label>
    <input type="text" class="form-control" name="emailP" value="<?= $patient[7];?>">
    </div>

    <input type="submit" value="Modifier" name="Modifier"  class="btn btn-primary col-md-offset-3">
    <button type="reset" class="btn btn-warning"> Annuler</button>

    </form>
    </div>
    </div>
    </div>
    </div>
    <div>
  
  
</body>
</html>