<?php require_once'view/head1.php' ;
require_once'view/headAdmin.php';
$dat=$dat+1;
$r=sprintf("%05d",$dat);
?>
<body class="card text-white bg-info">
<div class="container  col-md-8 -xs-10 col-md-offset-3" style="margin-top:-800px;">
    <div class="panel panel-info">
    <div class="panel-heading">Ajout de Patient </div>
    <div class="panel-body">
    <?php
					if(!empty($data)){
						if ($data!=0){
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
    <form action="<?php echo URL.'Domaine/addD';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">Code Domaine</label>
    <input type="text" class="form-control" name="codeD"  value="DOM-<?= $r?>" readonly>
     </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Domaine</label>
    <input type="text" class="form-control" name="nomD">
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