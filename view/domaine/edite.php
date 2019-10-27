<?php require_once'view/head.php';

    foreach($data as $dom ){
           $dom[0];
    }
?>

<body class="card text-white bg-info" >
<div class="container  col-md-6 col-xs-10 col-md-offset-3" style="margin-top:80px;">
    <div class="panel panel-info">
    <div class="panel-heading"> Modification Domaine  </div>
    <div class="panel-body">
    <form action="<?php echo URL.'Domaine/update';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">ID Domaine</label>
    <input type="text" class="form-control" name="idD" value="<?= $dom[0]?>" readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">CODE Domaine</label>
    <input type="text" class="form-control" name="codeD" value="<?= $dom[1]?>" readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label"> Nom Domaine </label>
    <input type="text" class="form-control" name="nomD"  value="<?= $dom[2]?>">
    </div>
    <input type="submit" value="Modifier" name="Modifier"  class="btn btn-primary">
    <button type="reset" class="btn btn-warning"> Annuler</button>
    <button  class="btn btn-info"> <a href="<?php echo URL.'Domaine/listeD';?>"></a> Retour</button>

    </form>
    </div>
    </div>
    </div>
    </div>
    <div>
  

</body>
</html>