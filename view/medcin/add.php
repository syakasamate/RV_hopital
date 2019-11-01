<?php require_once'view/head1.php';
require_once'view/headAdmin.php';
$donne=$donne+1;
$r=sprintf("%05d",$donne);
 ?>
<body class="card text-white bg-info">
<div class="container  col-md-8 -xs-10 col-md-offset-3" style="margin-top:-700px;">
    <div class="panel panel-info">
    <div class="panel-heading">Ajout Medcin </div>
    <div class="panel-body">
    <?php
					if(!empty( $donne1)){
						if ($donne1!=0){
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
    <form action="<?php echo URL.'Medcin/addM';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">Code Medcin</label>
    <input type="text" class="form-control" name="codeM" value="MD-<?= $r?>" readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Medcin</label>
    <input type="text" class="form-control" name="nomM">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Prenom Medcin</label>
    <input type="text" class="form-control" name="prenomM">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Tel Medcin</label>
    <input type="text" class="form-control" name="telM">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Email Medcin</label>
    <input type="text" class="form-control" name="emailM">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Service</label>
    <select   class="form-control"  name="nomS" id="nomS">
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
    <div class="form-group">
    <label for="" class="form control-label">Nom Domaine</label>
    <select  class="form-control" name="nomD" id="nomS">
    <?php 
    foreach($dat as $dom ){
    foreach($dom as $domaine){
        ?>
        echo $domaine[1];<option value=""></option>
     <option value="<?= $domaine[0]?>"><?=  $domaine[2]?></option>
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
   
    <div>
    </div>

</body>
</html>