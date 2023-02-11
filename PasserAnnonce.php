<?php
session_start();
require_once('php/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Passer Une Annonce</title>
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
		<td><table cellpadding="0" cellspacing="0" width="98%"><tbody>
		  <tr valign="top"><td><div id="InputTitPage">
			<img src="/images/icon_ins_annonce_36x36.gif" alt="" border="0" height="36" width="36">
		    Publication d'annonces
          </div></td></tr>
		  <tr valign="top">
	        <td><table cellpadding="0" cellspacing="3" align="center" border="0" width="100%"><tbody><tr><td><table cellpadding="0" cellspacing="0" align="center" width="100%"><tbody>
			  <tr><td class="pa_intro">Pour insérer une annonce, veuillez sélectionner une catégorie :</td></tr>
			  <tr><td>
				<div class="pa_cadre_categorie" onclick="window.location.href='/InsererAnnonce.php?TypeAnnonce=wImmobilier.php'">
				  <div class="link">
					<a href="/InsererAnnonce.php?TypeAnnonce=wImmobilier.php"><img src="/images/icon_ins_immo_36x36.gif" alt="" class="" height="36" width="36"></a>  
                    <a href="/InsererAnnonce.php?TypeAnnonce=wImmobilier.php">Ajout dans immobilier</a>
                  </div>
                  <div>Achat, Vente, Location, Location saisonnière, Terrain, Villa, Maison, Bureaux, Commerces ...</div>
              </td></tr>
            </tbody></table></td></tr></tbody></table></td>
		  </tr>
		</tbody></table>
	  </td>
	</tr></tbody></table>
  </td>
  <td bgcolor="#999999" width="1"><img src="/images/space.gif" alt="" height="1" border="0" width="1"></td>
</tr></tbody></table>
<?php include_footer();?>
</body>
</html>