<?php
session_start();
require_once('php/config.php');
$id_annonce=(isset($_POST['cod_ann']) && !empty($_POST['cod_ann'])) ? $_POST['cod_ann'] : '';
$id=(isset($_POST['cod_user']) && !empty($_POST['cod_user'])) ? $_POST['cod_user'] : '';
$commentaire=(isset($_POST['idCommentaire']) && !empty($_POST['idCommentaire'])) ? $_POST['idCommentaire'] : '';

$reponse_id_annn=mysql_query("SELECT bdd_proprietaire FROM annonce WHERE bdd_id='$id_annonce'") or die ('Erreur : '.mysql_error());
$count_id_annn=mysql_fetch_assoc($reponse_id_annn);
$id_prop=$count_id_annn["bdd_proprietaire"];
$reponse_msg_exist_id=mysql_query("SELECT entete_messages.bdd_id AS id_msg FROM entete_messages INNER JOIN contenu_messages ON entete_messages.bdd_id=contenu_messages.bdd_entete_message WHERE bdd_signature LIKE '$id_prop-$id' OR bdd_signature LIKE '$id-$id_prop'") or die ('Erreur : '.mysql_error());
$count_msg_exist_id=mysql_fetch_assoc($reponse_msg_exist_id);
$id_ann=$count_msg_exist_id['id_msg'];
if($id_ann>0){
	mysql_query("INSERT INTO contenu_messages (bdd_id, bdd_id_expediteur, bdd_id_destinataire, bdd_message, bdd_date, bdd_heure, bdd_etat_expediteur, bdd_etat_destinataire, bdd_entete_message) VALUES ('', '$id', '$id_prop', '$commentaire', '$date', '$heure', '1', '0','$id_ann')") or die ('Erreur : '.mysql_error());
}else{
	if($id>$id_prop) $signature=$id_prop.'-'.$id;
	else $signature=$id.'-'.$id_prop;
	mysql_query("INSERT INTO entete_messages (bdd_id, bdd_id_annonce, bdd_signature) VALUES ('', '$id_annonce', '$signature')") or die ('Erreur : '.mysql_error());
	$reponse_msg_exist_new_id=mysql_query("SELECT bdd_id FROM entete_messages WHERE bdd_signature LIKE '$id_prop-$id' OR bdd_signature LIKE '$id-$id_prop'") or die ('Erreur : '.mysql_error());
	$count_msg_exist_new_id=mysql_fetch_assoc($reponse_msg_exist_new_id);
	$id_ann=$count_msg_exist_new_id["bdd_id"];
	mysql_query("INSERT INTO contenu_messages (bdd_id, bdd_id_expediteur, bdd_id_destinataire, bdd_message, bdd_date, bdd_heure, bdd_etat_expediteur, bdd_etat_destinataire, bdd_entete_message) VALUES ('', '$id', '$id_prop', '$commentaire', '$date', '$heure', '1', '0','$id_ann')") or die ('Erreur : '.mysql_error());
}
header('Location:message.php?id='.$id_ann);
?>