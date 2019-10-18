<?php require_once'view/head.php' ?>
<body>
<div class="container col-md-9 col-md-offset-2">
    <div class="panel panel-info">
    <div class="panel-heading">Ajout de Patient
    <div class="panel-body">
    <form action="<?php echo URL.'Service/addS';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">Nom Service</label>
    <input type="text" class="form-control" name="nomS">
    </div>
    <input type="submit" value="Enregistrer" name="envoyer"  class="btn btn-primary">
    <button type="reset" class="btn btn-warning"> Annuler</button>

    </form>
    </div>
    </div>
    </div>
    </div>
    <div>
    </div>

</body>
</html>