<?php
session_start();
require_once('php/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Acceuil</title>
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
</head>
<body bgcolor="#eeeeee">


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
	  <tr valign="top"><td colspan="3" valign="top" width="585"><table class="DernieresAnnonces" border="0" width="100%"><tbody>
		<tr><td align="left"><img src="/images/titre_page_coup_coeur.gif" alt="Les 10 dernieres annonces" height="23" width="220"></td></tr>
		<tr><td height="4"></td></tr>
		<tr><td width="100%"><table border="0" cellspacing="0" width="100%"><tbody>
		  <tr><td height="5"></td></tr>
		  <tr><td height="5"></td></tr>
		  <tr><td height="5"></td></tr>
		</tbody></table></td></tr>
		<tr><td height="5"></td></tr>
		<tr valign="top"><td><table class="DernieresAnnonces" border="0"><tbody>
		  <tr><td colspan="2">
			<p>Bienvenue sur notre portail de petites Annonces sur <a href="/">Tune Easy Anne Once</a>.</p>
			<p>Trouvez des annonces immobilier de location de maisons, appartements, appart à Tunis, Nabeul, Monastir, Manouba, Gabes, Kram, Carthage, Menzah, Manar, Soukra, Carrefour et toute la Tunisie.</p>
			<p>Des appartements, Villa, Tunis Hammamet Nabeul Sidi bou said, Bizerte, Sousse, Kantaoui, Monastir, Djerba, Zarzis  Studio, Appartement et maisons en location, location meublée,location saisonniere, Achat ou Vente.</p>
			<p>Trouver aussi les annonces de vente de voiture, peugeot, renault, isuzu, golf 4, peugeot 205, peugeot 307, Bmw, Ford, Volkswagen, Mercedes, Fiat, Citroen, Mitsubishi, Nissan, Toyota, Seat</p>
			<p>Trouvez aussi toutes les bonnes affaires, ordinateurs portables, imprimantes, dell, compaq, hp, appareils photos numériques.</p>
		  </td></tr>
		  <tr><td height="5"></td></tr>
		</tbody></table></td></tr>
	  </tbody></table></td></tr>
	</tbody></table> 
  </td>
  <td bgcolor="#999999" width="1"><img src="/images/space.gif" alt="" height="1" border="0" width="1"/></td>
</tr></tbody></table>
<?php include_footer();?>
</body>
</html>
