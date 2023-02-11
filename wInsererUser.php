<?php
session_start();
require_once('php/config.php');
  $session=$_SESSION['s_session'];
	//Creation des variables non definis
	$login=(isset($_POST['id_login_cli']) && !empty($_POST['id_login_cli'])) ? $_POST['id_login_cli'] : '';
	$mdp=(isset($_POST['id_pwd1_cli']) && !empty($_POST['id_pwd1_cli'])) ? $_POST['id_pwd1_cli'] : '';
	$mdp_confirm=(isset($_POST['id_pwd2_cli']) && !empty($_POST['id_pwd2_cli'])) ? $_POST['id_pwd2_cli'] : '';
	$mail=(isset($_POST['id_mail_cli']) && !empty($_POST['id_mail_cli'])) ? $_POST['id_mail_cli'] : '';
	$nom=(isset($_POST['id_nom_cli']) && !empty($_POST['id_nom_cli'])) ? $_POST['id_nom_cli'] : '';
	$prenom=(isset($_POST['id_prenom_cli']) && !empty($_POST['id_prenom_cli'])) ? $_POST['id_prenom_cli'] : '';
	$sexe=(isset($_POST['id_sexe_cli']) && !empty($_POST['id_sexe_cli'])) ? $_POST['id_sexe_cli'] : "";
	$birthday_day=(isset($_POST['birthday_day']) && !empty($_POST['birthday_day'])) ? $_POST['birthday_day'] : "";
	$birthday_month=(isset($_POST['birthday_month']) && !empty($_POST['birthday_month'])) ? $_POST['birthday_month'] : "";
	$birthday_year=(isset($_POST['birthday_year']) && !empty($_POST['birthday_year'])) ? $_POST['birthday_year'] : "";
	$pays=(isset($_POST['pays']) && !empty($_POST['pays'])) ? $_POST['pays'] : "";
	$qs=(isset($_POST['id_qs_cli']) && !empty($_POST['id_qs_cli'])) ? $_POST['id_qs_cli'] : '';
	$rs=(isset($_POST['id_rs_cli']) && !empty($_POST['id_rs_cli'])) ? $_POST['id_rs_cli'] : '';
	$telephone=(isset($_POST['id_telephone_cli']) && !empty($_POST['id_telephone_cli'])) ? $_POST['id_telephone_cli'] : '';
	$portable=(isset($_POST['id_portable_cli']) && !empty($_POST['id_portable_cli'])) ? $_POST['id_portable_cli'] : '';
	$fax=(isset($_POST['id_fax_cli']) && !empty($_POST['id_fax_cli'])) ? $_POST['id_fax_cli'] : '';

	  //ENREGISTRER LES DONNEES DANS LES SESSIONS EN CAS D'ERREUR POUR NE PAS PERDRE LES DONNEES
	  $_SESSION['s_login_inscription']=$login;
	  $_SESSION['s_mdp_inscription']=$mdp;
	  $_SESSION['s_mdp2_inscription']=$mdp_confirm;
	  $_SESSION['s_mail_inscription']=$mail;
	  $_SESSION['s_nom_inscription']=$nom;
	  $_SESSION['s_prenom_inscription']=$prenom;
	  $_SESSION['s_qs_inscription']=$qs;
	  $_SESSION['s_rs_inscription']=$rs;
	  $_SESSION['s_sexe_inscription']=$sexe;
  	  $_SESSION['s_birthday_day_inscription']=$birthday_day;
  	  $_SESSION['s_birthday_month_inscription']=$birthday_month;
	  $_SESSION['s_birthday_year_inscription']=$birthday_year;
	  $_SESSION['s_pays_inscription']=$pays;
	  $_SESSION['s_telephone_inscription']=$telephone;
	  $_SESSION['s_portable_inscription']=$portable;
	  $_SESSION['s_fax_inscription']=$fax;
		//temps et date
		$date = date("Y-m-d");
		$heure = date("H:i");

		$tableau_birthday_sexe=array("Femme","Homme");
		$tableau_birthday_month=array("Janvier","F�vrier","Mars","Avril","Mai","Juin","Juillet","Ao�t","Septembre","Octobre","Novembre","D�cembre");
		$tableau_pays=array("Afghanistan","Afrique Du Sud","Albanie","Alg�rie","Allemagne","Andorre","Angola","Anguilla ","Antigua Et Barbuda","Antilles N�erlandaises","Arabie Saoudite","Argentine","Arm�nie","Aruba","Australie","Autriche","Azerba�djan","Bahamas","Bahre�n","Bangladesh","Barbade","Belau","Belgique","Belize","B�nin","Bermudes","Bhoutan","Bi�lorussie","Birmanie","Bolivie","Bosnie Herz�govine","Botswana","Br�sil","Brunei","Bulgarie","Burkina Faso","Burundi","Cambodge","Cameroun","Canada","Cap Vert","Chili","Chine","Chypre","Colombie","Comores","Congo","Cor�e Du Nord","Cor�e Du Sud","Costa Rica","C�te D'Ivoire","Croatie","Cuba","Danemark","Djibouti","Dominique","�gypte","�mirats Arabes Unis","�quateur","�rythr�e","Espagne","Estonie","�tats Unis","�thiopie","Fidji","Finlande","France","Gabon","Gambie","G�orgie","Ghana","Gibraltar","Gr�ce","Grenade","Groenland","Guadeloupe","Guam","Guatemala","Guin�e",">Guin�e �quatoriale","Guin�e Bissao","Guyana","Guyane Fran�aise","Ha�ti","Honduras","Hong Kong","Hongrie","Ile Christmas","Ile Norfolk","Iles Cayman","Iles Cook","Iles Des Cocos","Iles Falkland","Iles F�ro�","�les Marshall","Iles Pitcairn","Iles Salomon","Iles Svalbard Et Jan Mayen","Iles Turks Et Caicos","Iles Vierges Am�ricaines","Iles Vierges Britanniques","Inde","Indon�sie","Iran","Iraq","Irlande","Islande","Isra�l","Italie","Jama�que","Japon","Jordanie","Kazakhstan","Kenya","Kirghizistan","Kiribati","Kowe�t","Laos","Lesotho","Lettonie","Liban","Liberia","Libye","Liechtenstein","Lituanie","Luxembourg","Macao","Mac�doine","Madagascar","Malaisie","Malawi","Maldives","Mali","Malte","Mariannes Du Nord","Maroc","Martinique","Maurice","Mauritanie","Mayotte","Mexique","Micron�sie","Moldavie","Monaco","Mongolie","Montserrat","Mozambique","Namibie","Nauru","N�pal","Nicaragua","Niger","Nigeria","Niou�","Norv�ge","Nouvelle Cal�donie","Nouvelle Z�lande","Oman","Ouganda","Ouzb�kistan","Pakistan","Panama","Papouasie Nouvelle Guin�e","Paraguay","Pays Bas","P�rou","Philippines","Pologne","Polyn�sie Fran�aise","Porto Rico","Portugal","Qatar","R�publique Centrafricaine","R�publique Dominicaine","R�publique Tch�que","R�union","Roumanie","Royaume Uni","Russie","Rwanda","Sahara Occidental35","Saint Christophe Et Ni�v�s","Sainte H�l�ne","Sainte Lucie","Saint Marin","Saint Pierre et Miquelon","Saint Si�ge","Saint Vincent Et Les Grenadines","Salvador","Samoa","Samoa Am�ricaines","Sao Tom� Et Principe","S�n�gal","Serbie Et Mont�n�gro","Seychelles","Seychelles","Sierra Leone","Singapour","Slovaquie","Slov�nie","Somalie","Soudan","Sri Lanka","Suisse","Suriname","Swaziland","Syrie","Tadjikistan","Ta�wan","Tanzanie","Tchad","Tha�lande","Timor Oriental","Togo","Tok�laou","Tonga","Trinit� Et Tobago","Tunisie","Turkm�nistan","Turquie","Tuvalu","Ukraine","Uruguay","Vanuatu","Venezuela","Vi�t Nam","Wallis Et FutunaY�men","Zambie","Zimbabwe");
		$tableau_qs=array("Combien de fois tu as eu 20 comme note � l'INSAT ?","Combien d'heures au maximum tu es rest� r�veill� ?","Quelle mati�re aimerez vous le plus ?","Quel est votre Professeur pr�f�r� ?","Quel est votre Nom secret ?","Quel est le nom de la premi�re chanson sur laquelle j�ai dans� ?","Quel est le nom de la rue o� demeurait mon meilleur ami d�enfance ?","Quel est le nom de la ville o� j�aimerais le plus vivre ?","Quel est le nom de mon auteur pr�f�r� ?","Quel est le nom de mon chanteur pr�f�r� ?","Quel est le nom de mon musicien pr�f�r� ?","Quel est le nom de mon peintre pr�f�r� ?","Quel est le nom de mon personnage de roman pr�f�r� ?","Quel est le nom de mon premier animal domestique ?","Quel est le nom de mon premier dentiste ?","Quel est le nom du pays que j�aimerais le plus visiter ?","Quel est le nom du personnage historique que j�admire le plus ?","Quel est le plus beau cadeau que j�ai re�u ?","Quel est le poste que je d�testerais le plus occuper ?","Quel est le pr�nom que je refuserais donner � un enfant ?","Quel est le titre de mon livre pr�f�r� ?","Quelle est la  marque du premier v�hicule que j�ai conduit ?","Quelle est la marque de la premi�re voiture que j�ai r�v� poss�der ?","Quel est votre personnage pr�f�r� ?","O� habitez-vous quand vous etiez petit(e) ?","Quel est le nom de votre meilleur Ami(e) ?");

		if($mdp!=$mdp_confirm) header('Location:InsererUser.php?erreur=pass_empty');

			// VERIFICATIONS DES EXISTANCES ////
			$reponse_login=mysql_query("SELECT bdd_login FROM membres WHERE bdd_login='$login'") or die ('Erreur : '.mysql_error());	//verification si le login existe d�j�
			$count_login=mysql_num_rows($reponse_login);
			if($count_login == 1) header('Location:InsererUser.php?erreur=login_exist');

				mysql_query("INSERT INTO membres (bdd_id, bdd_login, bdd_mdp, bdd_mail, bdd_nom, bdd_prenom, bdd_sexe, bdd_birthday_day, bdd_birthday_month, bdd_birthday_year, bdd_pays, bdd_qs, bdd_rs, bdd_telephone, bdd_portable, bdd_fax, bdd_ip_inscription, bdd_heure_inscription, bdd_date_inscription) VALUES ('', '$login', '$mdp', '$mail', '$nom', '$prenom', '$sexe', '$birthday_day', '$birthday_month', '$birthday_year', '$pays', '$qs', '$rs', '$telephone', '$portable', '$fax', '$ip', '$heure', '$date')") or die ('Erreur : '.mysql_error());

				$reponse_login2=mysql_query("SELECT bdd_id FROM membres WHERE bdd_login='$login'") or die ('Erreur : '.mysql_error());	//importation de l'id du membre pour l'enregistrer dans la table de connexion autant que connect�
				$count_login2=mysql_fetch_assoc($reponse_login2);$id=$count_login2["bdd_id"];

				$new_session=creer_session_et_insert_bdd($id,1,$ip);

				$_SESSION['s_session']=$new_session;
				setcookie ("session", $new_session, time() + 100000000);
				$_SESSION['s_id']=$id;
				setcookie ("id", $id, time() + 100000000);
				$_SESSION['s_login_inscription']="";
				$_SESSION['s_mdp_inscription']="";
				$_SESSION['s_mdp2_inscription']="";
				$_SESSION['s_mail_inscription']="";
				$_SESSION['s_nom_inscription']="";
				$_SESSION['s_prenom_inscription']="";
				$_SESSION['s_qs_inscription']="";
				$_SESSION['s_rs_inscription']="";
				$_SESSION['s_sexe_inscription']="";
				$_SESSION['s_birthday_day_inscription']="";
				$_SESSION['s_birthday_month_inscription']="";
				$_SESSION['s_birthday_year_inscription']="";
				$_SESSION['s_pays_inscription']="";
				$_SESSION['s_telephone_inscription']="";
				$_SESSION['s_portable_inscription']="";
				$_SESSION['s_fax_inscription']="";

				$_SESSION['s_login']=$login;
				setcookie ("login", $login, time() + 100000000);
				$_SESSION['s_mdp']=$mdp;
				setcookie ("mdp", $mdp, time() + 100000000);
				$_SESSION['s_mail']=$mail;
				setcookie ("mdp", $mdp, time() + 100000000);
				$_SESSION['s_nom']=$nom;
				setcookie ("nom", $nom, time() + 100000000);
				$_SESSION['s_prenom']=$prenom;
				setcookie ("prenom", $prenom, time() + 100000000);
				$_SESSION['s_nom_prenom']=$nom." ".$prenom;
				setcookie ("nom_prenom", $nom." ".$prenom, time() + 100000000);
				$_SESSION['s_qs']=$qs;
				setcookie ("qs", $qs, time() + 100000000);
				$_SESSION['s_rs']=$rs;
				setcookie ("rs", $rs, time() + 100000000);
				$_SESSION['s_sexe']=$sexe;
				setcookie ("sexe", $sexe, time() + 100000000);
				$_SESSION['s_birthday_day']=$birthday_day;
				setcookie ("birthday_day", $birthday_day, time() + 100000000);
				$_SESSION['s_birthday_month']=$birthday_month;
				setcookie ("birthday_month", $birthday_month, time() + 100000000);
				$_SESSION['s_birthday_year']=$birthday_year;
				setcookie ("birthday_year", $birthday_year, time() + 100000000);
				$_SESSION['s_pays']=$pays;
				setcookie ("pays", $pays, time() + 100000000);	
				$_SESSION['s_nombre_annonces']=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Modification du Profil</title>
<meta name="keywords" content="annonce" lang="fr">
<meta name="description" content="annonce">  
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="category" content="petites annonces">
<meta name="robots" content="INDEX,FOLLOW">
<meta name="distribution" content="global">
<meta name="revisit-after" content="4 day">
<meta name="Language" content="Francais">
<meta name="Abstract" content="Le site de petites annonces">
<link rel="stylesheet" href="/input_forms_20121112.css" type="text/css">
<link rel="stylesheet" href="/style.css" type="text/css">
</head>
<body bgcolor="#eeeeee" text="#000000">

<table align="center" bgcolor="White" border="0" cellpadding="0" cellspacing="0" width="767"><tbody><tr>
  <td bgcolor="#999999" width="1"><img src="/images/space.gif" alt="" height="1" border="0" width="1"></td>
  <td valign="top" width="100%">
	<table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody>
	  <?php include_head();?>
	</tbody></table>
	<table cellpadding="0" cellspacing="0" width="100%"><tbody><tr valign="top">
		<td class="MenuVertical" rowspan="23" height="30" bgcolor="#e6e6e6" valign="top" width="160">
		  <table class="MenuVertical" width="100%"><tbody>
			<?php include_menu();?>
		  </tbody></table>
		</td>
		<td rowspan="23" bgcolor="#999999" width="1"><img src="/images/space.gif" alt="" height="1" border="0" width="1"></td>
		<td rowspan="20" width="10"></td>	
		<td>
		  <table cellpadding="0" cellspacing="0" width="98%"><tbody>
			<tr valign="top">
			  <td><div id="InputTitPage"><img src="/images/icon_mod_user_36x36.gif" alt="" height="36" border="0" width="36">Modification du profil</div></td>
			</tr>
			<tr valign="top"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr valign="top"><td><form method="post" action="wModifierUser.php" id="FormModificationUser" name="FormModificationUser"><table cellpadding="0" cellspacing="0" width="99%"><tbody>

	<h1><center><ins>Inscription</ins></center></h1><br/>
	  <fieldset>
		<legend><h2>Informations Personelles :</h2></legend>
		<table align="center">
		  <tr>
			<td><label for="login" style="color:red;">Votre Identifiant</label></td>
			<td><label name="separateur" type="text" style="color:red;"> : </label></td>
			<td><label id ="login" name="login" type="text" style="color:red;"><?php if($login) echo $login;?></label></td>
		  <tr/>
		  <tr>
			<td><label for="mail" style="color:red;">Votre Adresse Electronique</label></td>
			<td><label name="separateur" type="text" style="color:red;"> : </label></td>
			<td><label id ="mail" name="mail" type="text" style="color:red;"><?php if($mail) echo $mail;?></label></td>
		  <tr/>
		  <tr>
			<td><label for="pass" style="color:red;">Votre Mot De Passe</label></td>
			<td><label name="separateur" type="text" style="color:red;"> : </label></td>
			<td><label id="pass" style="color:red;"><?php if($mdp) echo $mdp;?></label></td>
		  <tr/>
		  <tr>
			<td><label for="qs" style="color:red;">Votre Question Secr�te</label></td>
			<td><label name="separateur" type="text" style="color:red;"> : </label></td>
			<td><label id="qs" style="color:red;"><?php if($tableau_qs[$qs-1]) echo $tableau_qs[$qs-1];?></label></td>
		  <tr/>
		  <tr>
			<td><label for="rs" style="color:red;">Votre R�ponse Secr�te</label></td>
			<td><label name="separateur" type="text" style="color:red;"> : </label></td>
			<td><label id="rs"style="color:red;"><?php if($rs) echo $rs;?></label></td>
		  <tr/>
		</table>
	  </fieldset>
	  <fieldset>
        <legend><h2>Informations G�n�rales :</h2></legend>
		<table align="center" style="color:black;">
		  <tr>
			<td><label for="nom">Votre Nom De Famille</label></td>
			<td><label name="separateur" type="text"> : </label></td>
			<td><label id="nom"><?php if($nom) echo $nom;?></label></td>
		  <tr/>
		  <tr>
			<td><label for="prenom">Votre Prenom</label></td>
			<td><label name="separateur" type="text"> : </label></td>
			<td><label id="prenom"><?php if($prenom) echo $prenom;?></label></td>
		  <tr/>
		  <tr>
			<td><label for="sexe">Votre Sexe</label></td>
			<td><label name="separateur" type="text"> : </label></td>
			<td><label id="sexe"><?php if($tableau_birthday_sexe[$sexe-1]) echo $tableau_birthday_sexe[$sexe-1];?></label></td>
		  <tr/>
		  <tr>
			<td><label for="birthday">Votre Date de naissance</label></td>
			<td><label name="separateur" type="text"> : </label></td>
			<td><label id="birthday"><?php if($birthday_day && $tableau_birthday_month[$birthday_month-1] && $birthday_year) echo $birthday_day.' '.$tableau_birthday_month[$birthday_month-1].' '.$birthday_year;?></label></td>
		  <tr/>
		  <tr>
			<td><label for="pays">Votre Pays</label></td>
			<td><label name="separateur" type="text"> : </label></td>
			<td><label id="pays"><?php if($tableau_pays[$pays-1]) echo $tableau_pays[$pays-1];?></label></td>
		  <tr/>
		  <tr>
			<td><label for="pays">Votre Telephone</label></td>
			<td><label name="separateur" type="text"> : </label></td>
			<td><label id="pays"><?php if($telephone)echo $telephone;else echo "Non d�fini";?></label></td>
		  <tr/>
		  <tr>
			<td><label for="pays">Votre Portable</label></td>
			<td><label name="separateur" type="text"> : </label></td>
			<td><label id="pays"><?php if($portable)echo $portable;else echo "Non d�fini";?></label></td>
		  <tr/>
		  <tr>
			<td><label for="pays">Votre Fax</label></td>
			<td><label name="separateur" type="text"> : </label></td>
			<td><label id="pays"><?php if($fax)echo $fax;else echo "Non d�fini";?></label></td>
		  <tr/>
        </table>
	  </fieldset>
	  <br/>
      <h4 align="center">Merci pour votre inscription le <?php echo $date. ' � ' .$heure;?><br/>Pour consulter votre compte veuillez <a href="ModifierUser.php">Visitez votre profil</a> !</h4>

			</tbody></table></form></td></tr></tbody></table></td></tr>
		  </tbody></table>
		</td>
	  </tr>
	</tbody></table>
  </td>
  <td bgcolor="#999999" width="1"><img src="/images/space.gif" alt="" height="1" border="0" width="1"></td>
</tr></tbody></table>
<?php include_footer();?>
</body>
</html>
	<?php
mysql_close();?>