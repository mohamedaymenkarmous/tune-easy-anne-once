<?php
session_start();
$_SESSION["s_zone_messagerie"]=1;
require_once('php/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Mes Messages</title>
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
		<td rowspan="14" width="565">
          <table height="300" cellpadding="0" cellspacing="3" width="100%"><tbody>
			<tr><td height="30">&nbsp;</td></tr>
            <tr><td height="20"><img src="/images/titre_page_mes_messages.gif" height="23" width="298"></td></tr>
            <tr><td height="30">&nbsp;</td></tr>
			<tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td height="5"></td></tr><tr><td></td></tr><tr><td height="5"></td></tr></tbody></table></td></tr> 
            <tr><td height="30">&nbsp;</td></tr>
            <form action="MesMessages.php" method="POST" name="FormViderCorbeille" id="FormViderCorbeille"></form>
			<input name="id_vider_corbeille" id="id_vider_corbeille" value="false" type="hidden">
			<tr valign="top"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody>
			  <tr><td><table height="200" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td><div style="width:100%;"><div style="width:366px;">
				  <div id="Div5" style="width:100%;"><table height="40" cellpadding="0" cellspacing="0" width="100%"><tbody><tr valign="top"><td><font style="font-size:13px; font-family:Arial; font-weight:bold; color: rgb(148, 0, 211); text-decoration: none;">Bienvenue, <?php if($_SESSION['s_nom_prenom'])echo $_SESSION['s_nom_prenom'];?> !</font></td></tr></tbody></table></div><br>
				  <div style="border-top: 1px solid rgb(222, 227, 219); width:100%;height:1px;"></div><br>
				  <div id="W2" style="width:100%;"><table cellpadding="0" cellspacing="0" width="100%"><tbody><tr>
					<td width="68"><a href="/BoiteReception.php"><img src="/images/mailbox.gif" height="60" border="0" width="60"></a></td>
					<td>&nbsp;</td>
					<td valign="top" width="280px">
					  <a href="/BoiteReception.php" style="font-weight: bold; color: #3466cc; text-decoration: none;">Boîte de réception <?php echo "(".nombre_message_negatif($_SESSION["s_nombre_messages"]).")";?></a> 
					  <font face="arial" size="-1"><br><?php if($_SESSION["s_nombre_messages"]==0){?>Tous les messages ont été lus.<?php }elseif($_SESSION["s_nombre_messages"]==-1){?>Vous n'avez aucun message.<?php }else{?>Vous avez <b><?php echo $_SESSION["s_nombre_messages"];?> message(s) non lu(s)</b>.<?php }?></font>
					</td> 
				  </tr></tbody></table></div><br>
				  <div style="border-top: 1px solid rgb(222, 227, 219); width:100%;height:1px;"></div><br>
				  <div id="Div2" style="width:100%;"><table cellpadding="0" cellspacing="0" width="100%"><tbody><tr>
					<td align="center" valign="top" width="68"><a href="/Corbeille.php"><img src="/images/trashfull.gif" alt="avatars" height="60" border="0" width="60"></a></td>
					<td>&nbsp;</td>
					<td valign="top" width="280px">
					  <a href="/Corbeille.php" style="font-weight: bold; color: #3466cc; text-decoration: none;">Corbeille<?php if($_SESSION["s_nombre_messages_corbeille"]>0)echo "(".$_SESSION["s_nombre_messages_corbeille"].")";?></a> 
					  <font face="arial" size="-1"><br><?php if($_SESSION["s_nombre_messages_corbeille"]>0){?>La Corbeille contient <?php echo $_SESSION["s_nombre_messages_corbeille"];?> message(s).<?php }else{?>La Corbeille ne contient aucun message.<?php }?></font>
					</td> 
				  </tr></tbody></table></div><br>
				  <div style="border-top: 1px solid rgb(222, 227, 219); width:100%;height:1px;"></div><br>
			  </div></div></td></tr></tbody></table></td></tr>
              <tr><td height="5"></td></tr>
              <tr><td colspan="2"></td></tr>
              <tr><td height="5"></td></tr>
            </tbody></table></td></tr>
		  </tbody></table>
		</td>
	</tr></tbody></table>
  </td>
  <td bgcolor="#999999" width="1"><img src="/images/space.gif" alt="" height="1" border="0" width="1"></td>
</tr></tbody></table>
<?php include_footer();?>
</body>
</html>