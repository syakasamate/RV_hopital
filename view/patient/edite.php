<?php require_once'view/head.php';
foreach($data as $pa){
    $pa[1];
}
 ?>
<body class="card text-white bg-info ">
<div class="container col-md-7 col-md-offset-2">
    <div class="panel panel-info">
    <div class="panel-heading"><h4> Modification de  Patient</h4></div>
    <div class="panel-body">
    <form  id="ajoutp" action="<?php echo URL.'Patient/update';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label"> ID  Patient</label>
    <input type="text" class="form-control" name="idP"  value="<?= $pa[0]?>" required  readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">CODE  Patient</label>
    <input type="text" class="form-control" name="codeP"  value="<?= $pa[1]?>" required  readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Patient</label>
    <input type="text" class="form-control" name="nomP"  value="<?= $pa[2]?>" required>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Prenom Patient</label>
    <input type="text" class="form-control" name="prenomP" id='prenom'   value="<?= $pa[3]?>" required>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Age Patient</label>
    <input type="text" class="form-control" name="ageP"  value="<?= $pa[4]?>" required>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Genre Patient</label><br>
    <input type="radio" name="sexe" value="M" checked="checked" >Masculin 
    <input type="radio" name="sexe" value="F" > Feminin
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Tel Patient</label>
    <input type="text" class="form-control" name="telP"  value="<?= $pa[6]?>" required>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Adresse Patient</label>
    <input type="text" class="form-control" name="adresseP"  value="<?=$pa[7]?>" required >
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Email Patient</label>
    <input type="text" class="form-control" name="emailP"  value="<?= $pa[8]?>" required>
    </div>

    <input type="submit" value="Modifier" name="Modifier"  class="btn btn-primary col-md-offset-3" id='bouton_envoi'>
    <button type="reset" class="btn btn-warning"> Annuler</button>
    <button  class="btn btn-info"> <a href="<?php echo URL.'Patient/listeP';?>"></a> Retour</button>

    </form>
    </div>
    </div>
    </div>
    </div>
    <div>
        <script>
         var formValid = document.getElementById('bouton_envoi');
         var prenom = document.getElementById('prenom');
         var missPrenom = document.getElementById('missPrenom');
        
        formValid.addEventListener('click', validation);
        
        function validation(event){
            //Si le champ est vide
            if (prenom.validity.valueMissing{
                event.preventDefault();
                missPrenom.textContent = 'Prénom manquant';
                missPrenom.style.color = 'red';
            }

        }
     <script>
</body>
</html>