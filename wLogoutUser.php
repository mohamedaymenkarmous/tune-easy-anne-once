<?php
session_start();
require_once('php/config.php');
	$session=$_SESSION['s_session'];
	$id=$_GET['id'];
	mysql_query("UPDATE connexion SET bdd_etat='0' WHERE bdd_session='$session' AND bdd_id='$id'")or die ('Erreur : '.mysql_error()." FLAG105");
	unset($_COOKIE);
	session_unset();
	session_destroy();  
	header('Location:'.$_SERVER["HTTP_REFERER"]);
mysql_close();  
exit();

?> 
