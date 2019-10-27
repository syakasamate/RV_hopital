<?php require_once'view/head1.php';
require_once'view/headAdmin.php';
$data=$data+1;
$r=sprintf("%05d",$data);
?>
<body>
<div class="container   col-md-6 col-xs-10 col-md-offset-3" style="margin-top:-800px; ">
    <div class="panel panel-info">
    <div class="panel-heading"><h4>Ajout Service</h4></div>
    <div class="panel-body">
    <?php
					if(($dat)){
						if ($dat!=0){
                            ?>
                            <div class="alert alert-success">Données ajoutées!</div>
                            <?php
						}else{
                            ?>
                            <div class="alert alert-danger">Erreur!</div>
                            <?php
                        }
                        }
       ?>
    <form action="<?php echo URL.'Service/addS';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">Code Service</label>
    <input type="text" class="form-control" name="codeS"  value="SR-<?= $r?>" readonly>
    </div>
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
    

</body>
</html>