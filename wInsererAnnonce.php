<?php
session_start();
require_once('php/config.php');
$type_annonce=strtolower(substr($_GET['TypeAnnonce'],0,-4));
$id=$_GET["user"];

$rubrique=(isset($_POST['Rubrique']) && !empty($_POST['Rubrique'])) ? $_POST['Rubrique'] : '';
$pays=(isset($_POST['pays']) && !empty($_POST['pays'])) ? $_POST['pays'] : '';
$gouvernorat=(isset($_POST['gouvernorat']) && !empty($_POST['gouvernorat'])) ? $_POST['gouvernorat'] : '';
$prix=(isset($_POST['Prix']) && !empty($_POST['Prix'])) ? $_POST['Prix'] : '';
$titre=(isset($_POST['Titre']) && !empty($_POST['Titre'])) ? $_POST['Titre'] : '';
$texte=(isset($_POST['Texte']) && !empty($_POST['Texte'])) ? $_POST['Texte'] : '';

$url_image="upload/".$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$url_image);
chmod($url_image, 0777);

mysql_query("INSERT INTO annonce (bdd_id, bdd_type_annonce, bdd_titre, bdd_texte, bdd_rubrique, bdd_pays, bdd_gouvernorat, bdd_prix, bdd_url_image, bdd_heure_insertion, bdd_date_insertion, bdd_heure_modification, bdd_date_modification, bdd_proprietaire, bdd_etat) VALUES ('', '$type_annonce', '$titre', '$texte', '$rubrique', '$pays', '$gouvernorat', '$prix', '$url_image', '$heure', '$date', '$heure', '$date', '$id', '1')") or die ('Erreur : '.mysql_error());

$reponse_annonce=mysql_query("SELECT bdd_id FROM annonce WHERE bdd_proprietaire='$id' ORDER BY bdd_id DESC") or die ('Erreur : '.mysql_error());
$count_annonce=mysql_fetch_assoc($reponse_annonce);$id_annonce=$count_annonce["bdd_id"];

if($_GET['TypeAnnonce']=="Immobilier.php"){
	$type=(isset($_POST['Type']) && !empty($_POST['Type'])) ? $_POST['Type'] : '';
	$surface=(isset($_POST['Surface']) && !empty($_POST['Surface'])) ? $_POST['Surface'] : '';
	$adresse=(isset($_POST['Adresse']) && !empty($_POST['Adresse'])) ? $_POST['Adresse'] : '';
	mysql_query("INSERT INTO annonce_immobilier (bdd_id_annonce, bdd_type, bdd_surface, bdd_adresse) VALUES ('$id_annonce', '$type', '$surface', '$adresse')") or die ('Erreur : '.mysql_error());
}
header('Location:DetailsAnnonce.php?TypeAnnonce=r'.$_GET['TypeAnnonce']."&id=".$id_annonce);
?>