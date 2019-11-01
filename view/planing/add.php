<?php require_once'view/head.php';
 require_once'view/headMedecin.php';
 $donne=$donne+1;
 $r=sprintf("%05d",$donne);
  ?>

<body  class="">
<div class="container col-md-5 col-xs-9 col-md-offset-3" style="margin-top:-500px; ">
    <div class="panel panel-info">
    <div class="panel-heading">Ajout Planing</div>
    <div class="panel-body">
    <?php
					if(!empty($dat)){
						if ($dat != 0){
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
    <form action="<?php echo URL.'Planing/addPl';?>"   method="post" >
    <div class="form-group">
    <label for="" class="form control-label">Code Planing </label>
    <input type="texte" class="form-control" name="codePl"  value="PL-<?= $r?>" readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Date Planing</label>
    <input type="date" class="form-control" name="datePl">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Heure-Debut</label>
    <input type="time" class="form-control" name="heureDebPl">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Heure-Fin</label>
    <input type="time" class="form-control" name="heureFinPl">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Medcin</label>
    <select  class="form-control"  name="nomMed" id="nomMed">
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