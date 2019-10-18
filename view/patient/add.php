<?php require_once'view/head.php' ?>
<body class="card text-white bg-info ">
<div class="container col-md-7 col-md-offset-2">
    <div class="panel panel-info">
    <div class="panel-heading">Ajout de Patient </div>
    <div class="panel-body">
    <form action="<?php echo URL.'Patient/addP';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">Nom Patient</label>
    <input type="text" class="form-control" name="nomP">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Prenom Patient</label>
    <input type="text" class="form-control" name="prenomP">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Age Patient</label>
    <input type="text" class="form-control" name="ageP">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Genre Patient</label><br>
    <input type="radio" name="sexe" value="M" checked="checked" >Masculin 
    <input type="radio" name="sexe" value="F" > Feminin
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Tel Patient</label>
    <input type="text" class="form-control" name="telP">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Adresse Patient</label>
    <input type="text" class="form-control" name="adresseP">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Email Patient</label>
    <input type="text" class="form-control" name="emailP">
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