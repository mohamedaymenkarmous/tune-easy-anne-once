<?php
session_start();
require_once('php/config.php');
$_SESSION['s_pays_inscription']=(isset($_SESSION['s_pays_inscription']) && !empty($_SESSION['s_pays_inscription'])) ? $_SESSION['s_pays_inscription'] : '';
$_SESSION['s_birthday_day_inscription']=(isset($_SESSION['s_birthday_day_inscription']) && !empty($_SESSION['s_birthday_day_inscription'])) ? $_SESSION['s_birthday_day_inscription'] : '';
$_SESSION['s_birthday_month_inscription']=(isset($_SESSION['s_birthday_month_inscription']) && !empty($_SESSION['s_birthday_month_inscription'])) ? $_SESSION['s_birthday_month_inscription'] : '';
$_SESSION['s_birthday_year_inscription']=(isset($_SESSION['s_birthday_year_inscription']) && !empty($_SESSION['s_birthday_year_inscription'])) ? $_SESSION['s_birthday_year_inscription'] : '';
$_SESSION['s_nom_inscription']=(isset($_SESSION['s_nom_inscription']) && !empty($_SESSION['s_nom_inscription'])) ? $_SESSION['s_nom_inscription'] : '';
$_SESSION['s_prenom_inscription']=(isset($_SESSION['s_prenom_inscription']) && !empty($_SESSION['s_prenom_inscription'])) ? $_SESSION['s_prenom_inscription'] : '';
$_SESSION['s_mail_inscription']=(isset($_SESSION['s_mail_inscription']) && !empty($_SESSION['s_mail_inscription'])) ? $_SESSION['s_mail_inscription'] : '';
$_SESSION['s_login_inscription']=(isset($_SESSION['s_login_inscription']) && !empty($_SESSION['s_login_inscription'])) ? $_SESSION['s_login_inscription'] : '';
$_SESSION['s_mdp_inscription']=(isset($_SESSION['s_mdp_inscription']) && !empty($_SESSION['s_mdp_inscription'])) ? $_SESSION['s_mdp_inscription'] : '';
$_SESSION['s_mdp2_inscription']=(isset($_SESSION['s_mdp2_inscription']) && !empty($_SESSION['s_mdp2_inscription'])) ? $_SESSION['s_mdp2_inscription'] : '';
$_SESSION['s_qs_inscription']=(isset($_SESSION['s_qs_inscription']) && !empty($_SESSION['s_qs_inscription'])) ? $_SESSION['s_qs_inscription'] : '';
$_SESSION['s_rs_inscription']=(isset($_SESSION['s_rs_inscription']) && !empty($_SESSION['s_rs_inscription'])) ? $_SESSION['s_rs_inscription'] : '';
$_SESSION['s_telephone_inscription']=(isset($_SESSION['s_telephone_inscription']) && !empty($_SESSION['s_telephone_inscription'])) ? $_SESSION['s_telephone_inscription'] : '';
$_SESSION['s_portable_inscription']=(isset($_SESSION['s_portable_inscription']) && !empty($_SESSION['s_portable_inscription'])) ? $_SESSION['s_portable_inscription'] : '';
$_SESSION['s_fax_inscription']=(isset($_SESSION['s_fax_inscription']) && !empty($_SESSION['s_fax_inscription'])) ? $_SESSION['s_fax_inscription'] : '';
$_GET['erreur']=(isset($_GET['erreur']) && !empty($_GET['erreur'])) ? $_GET['erreur'] : '';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Inscription</title>
<meta name="keywords" content="annonce" lang="fr">
<meta name="description" content="annonce">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="category" content="petites annonces">
<meta name="robots" content="INDEX,FOLLOW">
<meta name="distribution" content="global">
<meta name="revisit-after" content="4 day">
<meta name="Language" content="Francais">
<meta name="Abstract" content="Le site de petites annonces">
<link rel="stylesheet" href="/style.css" type="text/css">
<link rel="stylesheet" href="/input_forms_20121112.css" type="text/css">
<link rel="stylesheet" type="text/css" href="/dhtmlxcombo.css">
<link rel="stylesheet" type="text/css" href="/dhtmlxcalendar.css">
<link rel="stylesheet" type="text/css" href="/dhtmlxcalendar_dhx_skyblue.css">
</head>
<body bgcolor="#eeeeee">
<?php if($_GET['erreur']) include($_GET['erreur'].".php");?>

<table align="center" bgcolor="White" border="0" cellpadding="0" cellspacing="0" width="767"><tbody><tr>
  <td bgcolor="#999999" width="1"><img src="/images/space.gif" alt="" height="1" border="0" width="1"></td>
  <td valign="top" width="100%"> 
	<table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody>
	  <?php include_head();?>
	</tbody></table>
	<table class="aaTitresAccueil" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody>
	  <tr valign="top">
		<td class="MenuVertical" rowspan="23" height="30" bgcolor="#e6e6e6" valign="top" width="160">
		  <table class="MenuVertical" width="100%"><tbody>
			<?php include_menu();?>
		  </tbody></table>
		</td>
		<td rowspan="23" bgcolor="#999999" width="1"><img src="/images/space.gif" alt="" height="1" border="0" width="1"></td>
		<td rowspan="20" width="10"></td>
		<td>&nbsp;</td>
		<td rowspan="20" width="10"></td>
	  </tr>
	  <tr valign="top"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr valign="top"><td><form method="post" action="/wInsererUser.php" id="FormInsertionUser" name="FormInsertionUser"><table cellpadding="0" cellspacing="0" width="99%"><tbody>
		<tr><td><table class="if_cadre" align="center" border="0" cellpadding="0" cellspacing="3" width="100%"><tbody><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody>
		  <tr class="if_entete"><td colspan="6">Type de compte (Obligatoire)</td></tr>
		  <tr><td height="10"></td></tr>
		  <tr>
			<td class="if_label_field" id="id_label_cod_pay">Pays de résidence</td>
			<td><div id="combo_pay"><div class="dhx_combo_box dhx_skyblue" style="width: 150px;">
			  <select id="pays" name="pays">
				<option value="0">Pays :</option>
				<?php $tableau_pays=array("Afghanistan","Afrique Du Sud","Albanie","Algérie","Allemagne","Andorre","Angola","Anguilla ","Antigua Et Barbuda","Antilles Néerlandaises","Arabie Saoudite","Argentine","Arménie","Aruba","Australie","Autriche","Azerbaïdjan","Bahamas","Bahreïn","Bangladesh","Barbade","Belau","Belgique","Belize","Bénin","Bermudes","Bhoutan","Biélorussie","Birmanie","Bolivie","Bosnie Herzégovine","Botswana","Brésil","Brunei","Bulgarie","Burkina Faso","Burundi","Cambodge","Cameroun","Canada","Cap Vert","Chili","Chine","Chypre","Colombie","Comores","Congo","Corée Du Nord","Corée Du Sud","Costa Rica","Côte D'Ivoire","Croatie","Cuba","Danemark","Djibouti","Dominique","Égypte","Émirats Arabes Unis","Équateur","Érythrée","Espagne","Estonie","États Unis","Éthiopie","Fidji","Finlande","France","Gabon","Gambie","Géorgie","Ghana","Gibraltar","Grèce","Grenade","Groenland","Guadeloupe","Guam","Guatemala","Guinée",">Guinée Équatoriale","Guinée Bissao","Guyana","Guyane Française","Haïti","Honduras","Hong Kong","Hongrie","Ile Christmas","Ile Norfolk","Iles Cayman","Iles Cook","Iles Des Cocos","Iles Falkland","Iles Féroé","Îles Marshall","Iles Pitcairn","Iles Salomon","Iles Svalbard Et Jan Mayen","Iles Turks Et Caicos","Iles Vierges Américaines","Iles Vierges Britanniques","Inde","Indonésie","Iran","Iraq","Irlande","Islande","Israël","Italie","Jamaïque","Japon","Jordanie","Kazakhstan","Kenya","Kirghizistan","Kiribati","Koweït","Laos","Lesotho","Lettonie","Liban","Liberia","Libye","Liechtenstein","Lituanie","Luxembourg","Macao","Macédoine","Madagascar","Malaisie","Malawi","Maldives","Mali","Malte","Mariannes Du Nord","Maroc","Martinique","Maurice","Mauritanie","Mayotte","Mexique","Micronésie","Moldavie","Monaco","Mongolie","Montserrat","Mozambique","Namibie","Nauru","Népal","Nicaragua","Niger","Nigeria","Nioué","Norvège","Nouvelle Calédonie","Nouvelle Zélande","Oman","Ouganda","Ouzbékistan","Pakistan","Panama","Papouasie Nouvelle Guinée","Paraguay","Pays Bas","Pérou","Philippines","Pologne","Polynésie Française","Porto Rico","Portugal","Qatar","République Centrafricaine","République Dominicaine","République Tchèque","Réunion","Roumanie","Royaume Uni","Russie","Rwanda","Sahara Occidental35","Saint Christophe Et Niévès","Sainte Hélène","Sainte Lucie","Saint Marin","Saint Pierre et Miquelon","Saint Siège","Saint Vincent Et Les Grenadines","Salvador","Samoa","Samoa Américaines","Sao Tomé Et Principe","Sénégal","Serbie Et Monténégro","Seychelles","Seychelles","Sierra Leone","Singapour","Slovaquie","Slovénie","Somalie","Soudan","Sri Lanka","Suisse","Suriname","Swaziland","Syrie","Tadjikistan","Taïwan","Tanzanie","Tchad","Thaïlande","Timor Oriental","Togo","Tokélaou","Tonga","Trinité Et Tobago","Tunisie","Turkménistan","Turquie","Tuvalu","Ukraine","Uruguay","Vanuatu","Venezuela","Viêt Nam","Wallis Et FutunaYémen","Zambie","Zimbabwe");
				for($i=1;$i<=229;$i++){
				  echo '<option ';
				  if($_SESSION['s_pays_inscription']===$tableau_pays[$i-1]){
					echo 'selected=selected';
				  }echo ' value="'.$tableau_pays[$i-1].'">'.$tableau_pays[$i-1].'</option>';
				}?>
			  </select>
			</div></div></td></tr>
			<tr><td height="10"></td></tr>
		  </tbody></table></td></tr></tbody></table></td></tr>
		  <tr><td height="25"></td></tr>
		  <tr><td><table class="if_cadre" align="center" border="0" cellpadding="0" cellspacing="3" width="100%"><tbody>
			<tr id="divPart" style=""><td>	
			  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody>
				<tr class="if_entete"><td colspan="6">Informations Personelles (Obligatoire)</td></tr>
				<tr><td height="10"></td></tr>
				<tr>
				  <td class="if_label_field" id="id_label_nom_cli">Nom</td>
				  <td><input id="id_nom_cli" name="id_nom_cli" size="30" type="text" value="<?php echo $_SESSION["s_nom_inscription"];?>"></td>
				  <td class="if_help_field_jaune" rowspan="3">- Votre vrai Nom / prénom<br>- Pas de pseudos svp</td>
				</tr>
				<tr><td height="10"></td></tr>
				<tr>
				  <td class="if_label_field" id="id_label_prenom_cli">Prénom</td>
				  <td><input id="id_prenom_cli" name="id_prenom_cli" size="30" type="text" value="<?php echo $_SESSION["s_prenom_inscription"];?>"></td>
				</tr>
				<tr><td height="10"></td></tr>
				<tr>
				  <td class="if_label_field" id="id_label_sexe_cli">Sexe</td>
				  <td>
					<select id="id_sexe_cli" name="id_sexe_cli">
					  <option value="0">Sexe :</option>
					  <option <?php $_SESSION['s_sexe_inscription']=(isset($_SESSION['s_sexe_inscription']) && !empty($_SESSION['s_sexe_inscription'])) ? $_SESSION['s_sexe_inscription'] : 0;if($_SESSION['s_sexe_inscription']==1){
						echo "selected=selected";
					  }?> value="1">Femme</option>
					  <option <?php if($_SESSION['s_sexe_inscription']==2){echo "selected=selected";}?> value="2">Homme</option>
					</select>
				  </td>
				</tr>
			  </tbody></table>
			  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody>
				<tr><td height="10"></td></tr>
				<tr>
				  <td class="if_label_field" id="id_label_dat_naiss_cli">Date de Naissance</td>
				  <td>
					<div style="position:relative; width: 350px">
					  <select name="birthday_day" id="birthday_day">
						<option value="0">Jour :</option>
						<?php
						for($i=1;$i<=31;$i++){
						  echo '<option ';if($i===$_SESSION['s_birthday_day_inscription']){
							echo 'selected=selected';
						  }echo ' value="'.$i.'">'.$i.'</option>';
						}?>
					  </select>
					  <select class="" id="birthday_month" name="birthday_month">
						<option value="0">Mois :</option>
						<?php $tableau_birthday_month=array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
						for($i=1;$i<=12;$i++){
						  echo '<option ';
						  if($_SESSION['s_birthday_month_inscription']===$tableau_birthday_month[$i-1]){
							echo 'selected=selected';
						  }echo ' value="'.$tableau_birthday_month[$i-1].'">'.$tableau_birthday_month[$i-1].'</option>';
						}?>
					  </select> 
					  <select name="birthday_year" id="birthday_year">
						<option value="0">Année :</option>
						<?php
						for($i=1900;$i<=date("Y");$i++){
						  echo '<option ';
						  if($i===$_SESSION['s_birthday_year_inscription']){
							echo 'selected=selected';
						  }echo ' value="'.$i.'">'.$i.'</option>';
						}?>
					  </select>
					  <img class="PhotoDetails" src="/images/icon_calendar_20x20.gif" alt="Calendrier" height="20" border="0" width="20">
				    </div>
				  </td>
				</tr>
			  </tbody></table>
			</td></tr>
			<tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td height="10"></td></tr><tr><td id="td_bloc_conditions" class="if_condition_inscript_part" colspan="3">
			  <span id="txt_part">
				<b>Important (à lire attentivement )</b><br><br>
				1/ Une seule inscription par personne physique.<br>
				2/ Les informations doivent être exactes (<u>nom</u>, <u>prénom</u>, <u>date de naissance</u>,...).<br>
				3/ Le ou les de téléphones et e-mails doivent être exactes et personnelles.<br>
		    	4/ Deux comptes n'ont pas le droit d'utiliser un même téléphone ou un même e-mail.<br>
		      </span><br>
			  <b>J'ai lu et j'accepte sans réserve </b>
			  <input name="chk_accept_conditions" id="chk_accept_conditions" value="1" type="checkbox">
		    </td></tr><tr><td height="10"></td></tr></tbody></table></td></tr>
		</tbody></table></td></tr>
		<tr><td height="25"></td></tr>
		<tr><td><table class="if_cadre" align="center" border="0" cellpadding="0" cellspacing="3" width="100%"><tbody><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody>
		  <tr class="if_entete"><td colspan="6">Informations de connexion (Obligatoire)</td></tr>
		  <tr><td height="10"></td></tr>
		  <tr>
		    <td class="if_label_field" id="id_label_login_cli">Login</td>
		    <td><input id="id_login_cli" name="id_login_cli" size="40" value="<?php echo $_SESSION["s_login_inscription"];?>"></td>
		  </tr>
		  <tr><td height="10"></td></tr>
		  <tr>
		    <td class="if_label_field" id="id_label_mail_cli">Mail</td>
		    <td><input id="id_mail_cli" name="id_mail_cli" size="40" value="<?php echo $_SESSION["s_mail_inscription"];?>"></td>
		  </tr>
		  <tr><td height="10"></td></tr>
		  <tr>
		    <td class="if_label_field" id="idLabelPassword1">Mot de passe</td>
		    <td><input id="id_pwd1_cli" name="id_pwd1_cli" size="30" value="" type="password" value="<?php echo $_SESSION["s_mdp_inscription"];?>"></td>
		  </tr>
		  <tr><td height="10"></td></tr>
		  <tr>
		    <td class="if_label_field" id="idLabelPassword2">Re- Mot de passe</td>
		    <td><input id="id_pwd2_cli" name="id_pwd2_cli" size="30" value="" type="password" value="<?php echo $_SESSION["s_mdp2_inscription"];?>"></td>
		  </tr>
		  <tr><td height="10"></td></tr>
		  <tr>
		    <td class="if_label_field" id="id_label_qs_cli">Question Secrète</td>
		    <td><input id="id_qs_cli" name="id_qs_cli" size="40" value="<?php echo $_SESSION["s_qs_inscription"];?>"></td>
		  </tr>
		  <tr><td height="10"></td></tr>
		  <tr>
		    <td class="if_label_field" id="id_label_rs_cli">Réponse Secrète</td>
		    <td><input id="id_rs_cli" name="id_rs_cli" size="40" value="<?php echo $_SESSION["s_rs_inscription"];?>"></td>
		  </tr>
		  <tr><td height="10"></td></tr>
		</tbody></table></td></tr></tbody></table></td></tr>
		<tr><td height="25"></td></tr>
		<tr><td><table class="if_cadre" align="center" border="0" cellpadding="0" cellspacing="3" width="100%"><tbody><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody>
		  <tr class="if_entete"><td colspan="6">Informations de Contact (Optionnel)</td></tr>
		  <tr><td height="10"></td></tr>
		  <tr>
			<td class="if_label_field" id="id_lib_phone">Téléphone</td>
			<td style="width: 140px">
			  <input id="id_tel_cli" name="id_tel_cli" size="20" type="text" value="<?php echo $_SESSION["s_telephone_inscription"];?>">
	          <img src="/images/icon_phone_20x20.gif" class="PhotoDetails" alt="" height="20" border="0" width="20">
			</td>
			<td rowspan="5" class="if_help_field_jaune">
			  <b><u>Important</u></b>
			  <br>Les numéros doivent être au format international<br><br><i>Ex.</i> <b>+216 71 123 456</b> pour la Tunisie
			</td>
		  </tr>
		  <tr><td height="10"></td></tr>
		  <tr>
			<td class="if_label_field" id="id_lib_phone2">Portable</td>
			<td>
			  <input id="id_tel_cli2" name="id_tel_cli2" size="20" type="text" value="<?php echo $_SESSION["s_portable_inscription"];?>">
			  <img src="/images/icon_cellphone_20x20.gif" class="PhotoDetails" alt="" height="20" border="0" width="20">
			</td>
		  </tr>
		  <tr><td height="10"></td></tr>
		  <tr>
			<td class="if_label_field" id="id_lib_fax">Fax</td>
			<td>
			  <input id="id_fax_cli" name="id_fax_cli" size="20" type="text" value="<?php echo $_SESSION["s_fax_inscription"];?>">
			  <img src="/images/icon_fax_20x20.gif" class="PhotoDetails" alt="" height="20" border="0" width="20">
			</td>
		  </tr>
		  <tr><td height="20"></td></tr>
		</tbody></table></td></tr></tbody></table></td></tr>
		<tr><td class="if_note">Ces informations peuvent vous aider lors de la saisie de vos annonces, ces champs seront prè-remplis.</td></tr>
		<tr><td height="10"></td></tr>
		<tr><td align="right"><div id="idBtnValider"><ul><li class="valider"><input type="submit" value="Valider" name="validation"/></li></ul></div></td></tr>
		<tr><td height="40"></td></tr>
	  </tbody></table></form></td></tr></tbody></table></td></tr>
	</tbody></table> 
  </td>
  <td bgcolor="#999999" width="1"><img src="/images/space.gif" alt="" height="1" border="0" width="1"/></td>
</tr></tbody></table>
<?php include_footer();?>
</body>
</html>