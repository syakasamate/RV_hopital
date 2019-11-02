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
                <a href="<?php  echo URL.'Users/logg/'.$deconnection=true;?>" class="decon"onclick="return confirm('voulez-vous deconnecter ?');">Deconnetion</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">click  </a>

</div>

<div style="padding-left:16px">
  
</div>
<div class="navbar">
  <h3>HOPITAL LA PAIX</h3>
  <div class="subnav">
    <button class="subnavbtn">DOMAINE</i></button>
    <div class="subnav-content">
    <a href="<?php echo URL.'Domaine/addD';?>" >AJOUT DOMAINE</a>
    <a href="<?php echo URL.'Domaine/listeD';?>">LISTE DOMAINE</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">SERVICE</i></button>
    <div class="subnav-content">
    <a href="<?php echo URL.'Service/addS';?>" ><h4>AJOUT SERVICE</h4> </a>
    <a href="<?php echo URL.'Service/listeS';?>" ><h4>LISTE SERVICE</h4> </a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">MEDECIN</button>
    <div class="subnav-content">
    <a href="<?php echo URL.'Medcin/addM';?>" >AJOUT MEDCIN </a>
    <a href="<?php echo URL.'Medcin/listeM';?>" >LiSTE MEDECIN </a>
    </div>
  </div> 
  
  <div class="subnav">
    <button class="subnavbtn">SECRETAIRE</i></button>
    <div class="subnav-content">
    <a href="<?php echo URL.'Secretaire/addSec';?>" >AJOUT  </a>
  <a href="<?php echo URL.'Secretaire/listeSec';?>" >LISTE  </a>
    </div>
  </div> 

</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>


