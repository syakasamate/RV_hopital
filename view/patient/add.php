<?php require_once'view/head.php' ;
require_once'view/headS.php' ;

    $data=$data+1;
$r=sprintf("%05d",$data);

?>
<body class="card text-white bg-info ">

<div class="container  col-md-6 col-xs-10 col-md-offset-3" style="margin-top:-500px;">
    
    <div class="panel panel-info">
    <div class="panel-heading">Ajout de Patient </div>
    <div class="panel-body">
        <?php
					if(!empty($dat)){
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
    <form  id="ajoutp" action="<?php echo URL.'Patient/addP';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">Code Patient </label>
    <input type="text" class="form-control" name="codeP" value="PA-<?= $r?>"required readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Patient</label>
    <input type="text" class="form-control" name="nomP" required>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Prenom Patient</label>
    <input type="text" class="form-control" name="prenomP" id='prenom' required>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Age Patient</label>
    <input type="text" class="form-control" name="ageP" required>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Genre Patient</label><br>
    <input type="radio" name="sexe" value="M" checked="checked" >Masculin 
    <input type="radio" name="sexe" value="F" > Feminin
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Tel Patient</label>
    <input type="text" class="form-control" name="telP" required>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Adresse Patient</label>
    <input type="text" class="form-control" name="adresseP" required >
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Email Patient</label>
    <input type="text" class="form-control" name="emailP" required>
    </div>

    <input type="submit" value="Enregistrer" name="envoyer"  class="btn btn-primary col-md-offset-3" id='bouton_envoi'>
    <button type="reset" class="btn btn-warning"> Annuler</button>

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