<?php
session_start();
require_once('php/config.php');

//page précedente
$precd=$_SERVER["HTTP_REFERER"];
list($phttp1,$pvide2,$pwww3,$niveau1)=explode('/',$precd);
if(preg_match("#^.*(\?).*$#",$niveau1)){$retour=$precd."&";}
else{$retour=$precd."?";}

  $session=$_SESSION['s_session'];
	//Creation des variables non definis
	$login=(isset($_POST['idMailLogin']) && !empty($_POST['idMailLogin'])) ? $_POST['idMailLogin'] : '';
	$mdp=(isset($_POST['idPasswordLogin']) && !empty($_POST['idPasswordLogin'])) ? $_POST['idPasswordLogin'] : '';

	  //ENREGISTRER LES DONNEES DANS LES SESSIONS EN CAS D'ERREUR POUR NE PAS PERDRE LES DONNEES
	  $_SESSION['s_login_c']=$login;

			$reponse_login_mdp=mysql_query("SELECT * FROM membres WHERE (bdd_login='$login' OR bdd_mail='$login') AND bdd_mdp='$mdp'") or die ('Erreur : '.mysql_error());	//verification si le login ou le mail existe déjà avec le mot de passe
			$count_login_mdp=mysql_fetch_assoc($reponse_login_mdp);$id=$count_login_mdp['bdd_id'];
			if($id>0){
			  $nouveau_session=creer_session_et_insert_bdd($id,1,$ip);
			  $_SESSION['s_session']=$nouveau_session;
			  $_SESSION['s_id']=$id;
			  $_SESSION['s_login']="";

			  	$_SESSION['s_login']=$count_login_mdp['bdd_login'];setcookie("s_login", $count_login_mdp['bdd_login']);
				$_SESSION['s_mdp']=$count_login_mdp['bdd_mdp'];setcookie("s_mdp", $count_login_mdp['bdd_mdp']);
				$_SESSION['s_mail']=$count_login_mdp['bdd_mail'];setcookie("s_mail", $count_login_mdp['bdd_mail']);
				$_SESSION['s_nom']=$count_login_mdp['bdd_nom'];setcookie("s_nom", $count_login_mdp['bdd_nom']);
				$_SESSION['s_prenom']=$count_login_mdp['bdd_prenom'];setcookie("s_prenom", $count_login_mdp['bdd_prenom']);
				$_SESSION['s_nom_prenom']=$count_login_mdp['bdd_nom']." ".$count_login_mdp['bdd_prenom'];setcookie("s_nom_prenom", $count_login_mdp['bdd_nom']." ".$count_login_mdp['bdd_prenom']);
				$_SESSION['s_qs']=$count_login_mdp['bdd_qs'];setcookie("s_qs", $count_login_mdp['bdd_qs']);
				$_SESSION['s_rs']=$count_login_mdp['bdd_rs'];setcookie("s_rs", $count_login_mdp['bdd_rs']);
				$_SESSION['s_sexe']=$count_login_mdp['bdd_sexe'];setcookie("s_sexe", $count_login_mdp['bdd_sexe']);
				$_SESSION['s_birthday_day']=$count_login_mdp['bdd_birthday_day'];setcookie("s_birthday_day", $count_login_mdp['bdd_birthday_day']);
				$_SESSION['s_birthday_month']=$count_login_mdp['bdd_birthday_month'];setcookie("s_birthday_month", $count_login_mdp['bdd_birthday_month']);
				$_SESSION['s_birthday_year']=$count_login_mdp['bdd_birthday_year'];setcookie("s_birthday_year", $count_login_mdp['bdd_birthday_year']);
				$_SESSION['s_pays']=$count_login_mdp['bdd_pays'];setcookie("s_pays", $count_login_mdp['bdd_pays']);
				$_SESSION['s_telephone']=$count_login_mdp['bdd_telephone'];setcookie("s_telephone", $count_login_mdp['bdd_telephone']);
				$_SESSION['s_portable']=$count_login_mdp['bdd_portable'];setcookie("s_portable", $count_login_mdp['bdd_portable']);
				$_SESSION['s_fax']=$count_login_mdp['bdd_fax'];setcookie("s_fax", $count_login_mdp['bdd_fax']);

				$_SESSION['s_nombre_messages_corbeille']=nombre_message_corbeille($id);setcookie("s_nombre_messages_corbeille", nombre_message_corbeille($id));
				$_SESSION['s_nombre_annonces']=0;setcookie("s_nombre_annonces", 0);
				$_SESSION['s_nombre_favoris']=0;setcookie("s_nombre_favoris", 0);
			  
			  header('Location:'.$precd);

			}else header('Location:'.$retour.'erreur=not_found');
?>
