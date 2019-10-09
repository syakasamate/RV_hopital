<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
require_once'menu.php';
require_once'config/DataBaseConfig.classe.php';
require_once'config/path.php';
require_once'config/routing.php';
require_once'libs/Boostrap.classe.php';
require_once'libs/Controller.classe.php';
require_once'libs/Model.classe.php';
require_once'libs/View.classe.php';
 $x=1;
 $boos =NULL;
 if($x>0){
 $boo= new Boostrap();
 }
?>
