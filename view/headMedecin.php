
<?php 
session_start();
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="topnav  navbar-fixed-top" id="myTopnav">
                <a href="<?php  echo URL.'Users/logg/'.$deconnection=true;?>" class="decon" onclick="return confirm('voulez-vous deconnecter ?');">Deconnetion</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">click  </a>

</div>

<div style="padding-left:16px">
  
</div>
<div class="navbar">
  <h3>HOPITAL LA PAIX</h3>
  <div class="subnav">
    <button class="subnavbtn">PLANING</button>
    <div class="subnav-content">
    <a href="<?php echo URL.'Planing/addPl';?>" >Ajout Planing</a>
    <a href="<?php echo URL.'Planing/listePl';?>">Liste Planing</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">RENDEZ_VOUS</i></button>
    <div class="subnav-content">
  <a href="<?php  echo URL.'RendezVous/listeC';?>" >Liste R_V</a>
    </div>
  </div> 

</div>
 
</body>
</html>