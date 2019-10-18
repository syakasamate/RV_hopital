<?php require_once'view/head.php';
 ?>
	<body>
		<img src="public/image/logo.jpg" class="resize" alt="mmm" />
		<div class="nav navbar navbar-default navbar-fixed-top ">
			<ul class="nav navbar-nav ">
				<li><a href="<?php echo URL.'Secretaire/addSec';?>" >Ajout Secretaire </a></li>
				<li><a href="<?php echo URL.'Medcin/addM';?>" >Ajout Medecin </a></li>
				<li><a href="<?php echo URL.'Domaine/addD';?>" >Ajout Domaine </a></li>
				<li><a href="<?php echo URL.'Service/addS';?>" >Ajout Service </a></li>
            </ul>
		</div>
	
	</body>
</html>