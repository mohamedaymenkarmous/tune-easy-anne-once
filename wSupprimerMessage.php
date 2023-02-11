<?php
session_start();
require_once('php/config.php');

  $session=$_SESSION['s_session'];
	//Creation des variables non definis
	$id_msg_checked=(isset($_POST['id_msg_checked']) && !empty($_POST['id_msg_checked'])) ? $_POST['id_msg_checked'] : '';
	$id_proprietaire=(isset($_POST['id_proprietaire']) && !empty($_POST['id_proprietaire'])) ? $_POST['id_proprietaire'] : '';
	$action_liste_id_message=(isset($_POST['action_liste_id_message']) && !empty($_POST['action_liste_id_message'])) ? $_POST['action_liste_id_message'] : '';
	foreach($id_msg_checked as $num_id_msg){
		marquer_message_comme($num_id_msg,$id_proprietaire,$action_liste_id_message);
	}
	header('Location:/BoiteReception.php');
?>