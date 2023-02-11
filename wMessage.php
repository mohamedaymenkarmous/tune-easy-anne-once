<?php
session_start();
require_once('php/config.php');
$id_annonce=$_GET['id_annonce'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Répondre à l'annonce</title>
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
		<td><table width="100%"><tbody><tr valign="top"><td><div id="InputTitPage">
		    <img src="/images/icon_mod_service_36x36.gif" width="36" height="36" border="0" alt="">
            Répondre à l'annonce
        </div></td></tr>
		<tr><td><form method="post" name="FormMessageReponse" action="/RedirectMessage.php" id="FormMessageReponse"><table width="100%" cellspacing="3" cellpadding="0" style="color=#0b2d62;font-size:11pt;font-family:tahoma" height="100" border="0" id="Table1"><tbody><tr><td>	
        <table align="center" border="0" cellpadding="0" cellspacing="3" width="100%" class="if_cadre"><tbody><tr><td>	
	        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
	        <tbody><tr class="if_entete"><td colspan="6">Votre Réponse à l'annonce [Réf <?php echo $id_annonce;?>]</td></tr>
	        <tr><td height="10"></td></tr>
	        <tr>
		        <td class="if_label_field" id="idLabelNom">Votre Nom</td>
		        <td>
                    <input type="text" id="idNom" name="idNom" size="40" value="<?php echo $_SESSION['s_nom_prenom'];?>">
				    <input type="hidden" id="cod_user" name="cod_user" value="<?php echo $_SESSION['s_id'];?>">
				    <input type="hidden" id="cod_ann" name="cod_ann" value="<?php echo $id_annonce;?>">
                </td>
	        </tr>
	        <tr><td height="10"></td></tr>
	        <tr>
		        <td class="if_label_field" id="idLabelCommentaire" valign="top">
		            Votre message<br>
                </td>
		        <td><textarea rows="6" id="idCommentaire" name="idCommentaire" cols="70">Bonjour</textarea></td>
	        </tr>
	        </tbody></table>
	    </td>
	    </tr>
	    </tbody></table>
    </td>	
    </tr>
    <tr><td height="5"></td></tr>
    <tr>
        <td align="right">
            <div id="idBtnValider">
            <ul>
                <li class="valider"><input type="submit" value="Envoyer"></li>
            </ul>
            </div>
        </td>
    </tr>
    <tr><td height="80"></td></tr>
    <tr><td>&nbsp;</td></tr>
    </tbody></table>
    </form>
    	
</td>	
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