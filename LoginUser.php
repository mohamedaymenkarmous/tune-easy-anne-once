<?php
session_start();
require_once('php/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Authentification</title>
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
	  <tr valign="top"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr valign="top"><td><table cellpadding="0" cellspacing="0" width="99%"><tbody><tr valign="top"><td>
		<table cellpadding="0" cellspacing="0" width="98%"><tbody>
		  <tr valign="top"><td><div id="InputTitPage"><img src="/images/icon_login_user_36x36.gif" alt="" height="36" border="0" width="36">Authentification</div></td></tr>
          <tr valign="top"><td><table class="pa_pleft30" align="center" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td>
			<div class="login_rectgris">
			  <span class="bleu">Vous êtes déjà inscrit ?</span><br>
		      <span class="info">Veuillez saisir votre mail et votre mot de passe pour vous identifier. </span>
              <form action="/wLoginUser.php" method="post" name="FormLoginUser" id="FormLoginUser">
				<input name="Page" id="Page" value="" type="hidden">
                <table><tbody>
				  <tr><td height="20"></td></tr>
		          <tr> 
					<td class="if_label_field"><label id="id_lab_mail">Mail :</label></td>
					<td><input id="idMailLogin" name="idMailLogin" size="35" type="text"></td>
		          </tr>
		          <tr>
					<td class="if_label_field"><label id="id_lab_pwd">Mot de passe :</label></td>
					<td><input id="idPasswordLogin" name="idPasswordLogin" size="20" value="" type="password"></td>
		          </tr>
		          <tr><td></td><td height="10"><input type="submit" value="valider" alt="" height="18" border="0" width="67"></td></tr>
		          <tr><td height="20"></td></tr>
		          <tr align="left">
					<td colspan="2">
		              <span class="info">Vous avez oublié votre mot de passe ?&nbsp;</span>
		              <a href="/SendPassword.php">Cliquez ici</a> 
		            </td>
				  </tr>
	            </tbody></table>
			  </form>
            </div>
            <div class="login_rectgris">
		      <span class="rose">Vous êtes un nouveau client ?</span><br>
		      <a href="/InsererUser.php">Inscrivez-vous gratuitement en quelques minutes !</a> 
            </div>
          </td></tr></tbody></table></td></tr>
        </tbody></table>
	  </td></tr></tbody></table></td></tr></tbody></table></td></tr>
	</tbody></table> 
  </td>
  <td bgcolor="#999999" width="1"><img src="/images/space.gif" alt="" height="1" border="0" width="1"/></td>
</tr></tbody></table>
<?php include_footer();?>
</body>
</html>