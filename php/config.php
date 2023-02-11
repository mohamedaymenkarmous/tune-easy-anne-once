<?php
$serveur='localhost';	//Nom du serveur (en local : locahost)
$user='root';//Nom de l'utilisateur (en local : root)
$mdp='';	//Mot de passe (en local : aucun)
$base='annonce';//'db2211326-main';	//Nom de la base de données

//Securisation supplementaire
$date = date("Y-m-d");
$heure = date("H:i");

//recuperer l'adresse ip
if($_SERVER){if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];}elseif(isset($_SERVER['HTTP_CLIENT_IP'])){$ip=$_SERVER['HTTP_CLIENT_IP'];}else{$ip=$_SERVER['REMOTE_ADDR'];}}
else{if(getenv('HTTP_X_FORWARDED_FOR')){$ip=getenv('HTTP_X_FORWARDED_FOR');}elseif(getenv('HTTP_CLIENT_IP')){$ip=getenv('HTTP_CLIENT_IP');}else{$ip=getenv('REMOTE_ADDR');}}

/* ATTENTION : NE PAS CHANGER CE QU'IL Y A CI-DESSOUS */
@$connect=mysql_connect($serveur, $user, $mdp) or die ('Erreur : '.mysql_error());
@mysql_select_db($base) or die ('Erreur : '.mysql_error());


$_COOKIE['session']=(isset($_COOKIE["session"]) && !empty($_COOKIE["session"])) ? $_COOKIE["session"] : '' ;
$_COOKIE['id']=(isset($_COOKIE["id"]) && !empty($_COOKIE["id"])) ? $_COOKIE["id"] : '' ;
$_COOKIE['login']=(isset($_COOKIE["login"]) && !empty($_COOKIE["login"])) ? $_COOKIE["login"] : '' ;
$_COOKIE['mdp']=(isset($_COOKIE["mdp"]) && !empty($_COOKIE["mdp"])) ? $_COOKIE["mdp"] : '' ;
$_COOKIE['mail']=(isset($_COOKIE["mail"]) && !empty($_COOKIE["mail"])) ? $_COOKIE["mail"] : '' ;
$_COOKIE['nom']=(isset($_COOKIE["nom"]) && !empty($_COOKIE["nom"])) ? $_COOKIE["nom"] : '' ;
$_COOKIE['prenom']=(isset($_COOKIE["prenom"]) && !empty($_COOKIE["prenom"])) ? $_COOKIE["prenom"] : '' ;
$_COOKIE['nom_prenom']=(isset($_COOKIE["nom_prenom"]) && !empty($_COOKIE["nom_prenom"])) ? $_COOKIE["nom_prenom"] : '' ;
$_COOKIE['qs']=(isset($_COOKIE["qs"]) && !empty($_COOKIE["qs"])) ? $_COOKIE["qs"] : '' ;
$_COOKIE['rs']=(isset($_COOKIE["rs"]) && !empty($_COOKIE["rs"])) ? $_COOKIE["rs"] : '' ;
$_COOKIE['sexe']=(isset($_COOKIE["sexe"]) && !empty($_COOKIE["sexe"])) ? $_COOKIE["sexe"] : '' ;
$_COOKIE['birthday_day']=(isset($_COOKIE["birthday_day"]) && !empty($_COOKIE["birthday_day"])) ? $_COOKIE["birthday_day"] : '' ;
$_COOKIE['birthday_month']=(isset($_COOKIE["birthday_month"]) && !empty($_COOKIE["birthday_month"])) ? $_COOKIE["birthday_month"] : '' ;
$_COOKIE['birthday_year']=(isset($_COOKIE["birthday_year"]) && !empty($_COOKIE["birthday_year"])) ? $_COOKIE["birthday_year"] : '' ;
$_COOKIE['pays']=(isset($_COOKIE["pays"]) && !empty($_COOKIE["pays"])) ? $_COOKIE["pays"] : '' ;

$_SESSION['s_session']=(isset($_SESSION["s_session"]) && !empty($_SESSION["s_session"])) ? $_SESSION["s_session"] : $_COOKIE['session'] ;
$_SESSION['s_id']=(isset($_SESSION["s_id"]) && !empty($_SESSION["s_id"])) ? $_SESSION["s_id"] : $_COOKIE['id'] ;
$_SESSION['s_login']=(isset($_SESSION["s_login"]) && !empty($_SESSION["s_login"])) ? $_SESSION["s_login"] : $_COOKIE['login'] ;
$_SESSION['s_mdp']=(isset($_SESSION["s_mdp"]) && !empty($_SESSION["s_mdp"])) ? $_SESSION["s_mdp"] : $_COOKIE['mdp'] ;
$_SESSION['s_mail']=(isset($_SESSION["s_mail"]) && !empty($_SESSION["s_mail"])) ? $_SESSION["s_mail"] : $_COOKIE['mail'] ;
$_SESSION['s_nom']=(isset($_SESSION["s_nom"]) && !empty($_SESSION["s_nom"])) ? $_SESSION["s_nom"] : $_COOKIE['nom'] ;
$_SESSION['s_prenom']=(isset($_SESSION["s_prenom"]) && !empty($_SESSION["s_prenom"])) ? $_SESSION["s_prenom"] : $_COOKIE['prenom'] ;
$_SESSION['s_nom_prenom']=(isset($_SESSION["s_nom_prenom"]) && !empty($_SESSION["s_nom_prenom"])) ? $_SESSION["s_nom_prenom"] : $_COOKIE['nom_prenom'] ;
$_SESSION['s_qs']=(isset($_SESSION["s_qs"]) && !empty($_SESSION["s_qs"])) ? $_SESSION["s_qs"] : $_COOKIE['qs'] ;
$_SESSION['s_rs']=(isset($_SESSION["s_rs"]) && !empty($_SESSION["s_rs"])) ? $_SESSION["s_rs"] : $_COOKIE['rs'] ;
$_SESSION['s_sexe']=(isset($_SESSION["s_sexe"]) && !empty($_SESSION["s_sexe"])) ? $_SESSION["s_sexe"] : $_COOKIE['sexe'] ;
$_SESSION['s_birthday_day']=(isset($_SESSION["s_birthday_day"]) && !empty($_SESSION["s_birthday_day"])) ? $_SESSION["s_birthday_day"] : $_COOKIE['birthday_day'] ;
$_SESSION['s_birthday_month']=(isset($_SESSION["s_birthday_month"]) && !empty($_SESSION["s_birthday_month"])) ? $_SESSION["s_birthday_month"] : $_COOKIE['birthday_month'] ;
$_SESSION['s_birthday_year']=(isset($_SESSION["s_birthday_year"]) && !empty($_SESSION["s_birthday_year"])) ? $_SESSION["s_birthday_year"] : $_COOKIE['birthday_year'] ;
$_SESSION['s_pays']=(isset($_SESSION["s_pays"]) && !empty($_SESSION["s_pays"])) ? $_SESSION["s_pays"] : $_COOKIE['pays'] ;

//inclure les fonctions
require_once('fonctions.php');

//initialiser les sessions
$_SESSION["s_session"]=(isset($_SESSION["s_session"]) && !empty($_SESSION["s_session"])) ? $_SESSION["s_session"] : '';
$_SESSION["s_id"]=(isset($_SESSION["s_id"]) && !empty($_SESSION["s_id"])) ? $_SESSION["s_id"] : '';
$_SESSION["s_zone_messagerie"]=(isset($_SESSION["s_zone_messagerie"]) && !empty($_SESSION["s_zone_messagerie"])) ? $_SESSION["s_zone_messagerie"] : 0;
if(if_page_message_php()===1){
	marquer_message_comme($_GET['id'],$_SESSION["s_id"],1);
}
$_SESSION['s_nombre_messages']=nombre_message($_SESSION['s_id']);
?>