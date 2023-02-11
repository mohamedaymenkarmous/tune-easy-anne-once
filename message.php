<?php
session_start();
$_SESSION["s_zone_messagerie"]=1;
require_once('php/config.php');
$id_msg=$_GET['id'];
$id=$_SESSION["s_id"];
$reponse_description_message=mysql_query("SELECT * FROM entete_messages INNER JOIN contenu_messages ON entete_messages.bdd_id=contenu_messages.bdd_entete_message WHERE ((contenu_messages.bdd_id_expediteur='$id' AND contenu_messages.bdd_etat_expediteur<>'-1') OR (contenu_messages.bdd_id_destinataire='$id' AND contenu_messages.bdd_etat_destinataire<>'-1')) AND contenu_messages.bdd_entete_message='$id_msg' ORDER BY contenu_messages.bdd_id DESC") or die ('Erreur : '.mysql_error());
$count_description_message=mysql_fetch_assoc($reponse_description_message);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title><?php if($count_description_message["bdd_id_expediteur"]==$id)echo id_to_nom_prenom($count_description_message["bdd_id_destinataire"]);elseif($count_description_message["bdd_id_destinataire"]==$id)echo id_to_nom_prenom($count_description_message["bdd_id_expediteur"]);?></title>
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
<script>
function OnClick_Submit(id_msg){
	document.getElementById("action_liste_id_message").value=id_msg;
	document.getElementById("action_liste_id_message").click();
}
</script>
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
		<td width="585">
		  <table cellpadding="0" cellspacing="3" height="300" width="100%"><tbody>
			<tr><td align="left" height="15"></td></tr>
			<tr valign="top"><td>
			  <form method="post" action="/wActionMessage.php" id="FormActionMessage" name="FormActionMessage"><table style=" font-family: Tahoma;font-size: 9px;" cellpadding="0" cellspacing="0" width="100%"><tbody>
				<tr><td></td></tr> 
				<tr><td height="10"></td></tr>
				<tr><td height="5"><?php $id_mp=id_message_precedent($id,$id_msg);if($id_mp>0){?><a href="/message.php?id=<?php echo $id_mp;?>">Précédent</a><?php }else echo "Précédent";?>&nbsp;|&nbsp;<?php $id_ms=id_message_suivant($id,$id_msg);if($id_ms>0){?><a href="/message.php?id=<?php echo $id_ms;?>">Suivant</a><?php }else echo "Suivant";?> &nbsp;|&nbsp;<a href="/BoiteReception.php">Retour à la Boite de Reception</a> </td></tr>
				<tr><td height="5"></td></tr>
				<tr><td><table id="Table5" cellpadding="1" cellspacing="0" bgcolor="#90b4de" border="0" width="100%"><tbody>
				  <tr><td colspan="3" height="2"></td></tr>
				  <tr></tr>
				  <tr><td align="left">
					<input name="id_proprietaire" value="<?php echo $id;?>" type="hidden">
					<input style="display:none;" id="action_liste_id_message" name="action_liste_id_message" value="" type="submit">
					<input onclick="OnClick_Submit('-1');" style="CURSOR:pointer;" value="Supprimer" alt="Supprimer" type="button">
					<input type="button" onclick="window.location.href='/wMessage.php?id_annonce=<?php echo $count_description_message["bdd_id_annonce"];?>'" value="Répondre">
					<input name="id_msg_checked[]" value="<?php echo $id_msg;?>" type="checkbox" checked="checked" style="display:none;">
				  </td></tr>
				  <tr><td colspan="3" height="2"></td></tr>
				</tbody></table></td></tr>
				<tr><td height="5"></td></tr>
				<tr><td><table id="Table2" cellpadding="0" cellspacing="0" align="center" bgcolor="DarkGray" border="0" width="100%"><tbody>
				  <tr bgcolor="White">
					<td bgcolor="#d6deec" nowrap="nowrap" width="90"><b>À :</b></td>
					<td height="4" width="5"></td>
					<td><?php echo id_to_nom_prenom($count_description_message["bdd_id_expediteur"]);?>&nbsp;&nbsp;</td>
				  </tr>
				  <tr><td colspan="3" height="1"></td></tr>
				  <tr bgcolor="White">
					<td bgcolor="#d6deec" width="90"><b>De :</b></td>
					<td height="4" width="5"></td>
					<td><?php echo id_to_nom_prenom($count_description_message["bdd_id_destinataire"]);?>&nbsp;&nbsp;</td>
				  </tr>
				  <tr><td colspan="3" height="1"></td></tr>
				  <tr bgcolor="White">
					<td bgcolor="#d6deec"><b>Date</b></td>
					<td height="4" width="5"></td>
					<td bgcolor="White"><?php echo $count_description_message["bdd_date"]." ".$count_description_message["bdd_heure"]?></td>
				  </tr>
				  <tr><td colspan="3" height="1"></td></tr>
				  <tr bgcolor="White">
					<td bgcolor="#d6deec"><b>Annonce</b></td>
					<td height="4" width="5"><?php $id_annonce=$count_description_message["bdd_id_annonce"];$reponse_contenu_annonce=mysql_query("SELECT * FROM annonce INNER JOIN annonce_immobilier ON annonce.bdd_id=annonce_immobilier.bdd_id_annonce WHERE bdd_id='$id_annonce'") or die ('Erreur : '.mysql_error());$count_contenu_annonce=mysql_fetch_assoc($reponse_contenu_annonce);?></td>
					<td bgcolor="White"> « <font style="color: #ff0066;"><?php echo $count_contenu_annonce['bdd_titre'];?></font> » | Réf : <a href="/DetailsAnnonce.php?TypeAnnonce=r<?php echo $count_contenu_annonce["bdd_type_annonce"];?>.php&id=<?php echo $count_description_message["bdd_id_annonce"];?>" target="_blank"><?php echo $count_description_message["bdd_id_annonce"];?></a> </td>
				  </tr>
				  <tr><td colspan="3" height="1"></td></tr>
				</tbody></table></td></tr>
				<tr><td><?php
				$reponse_contenu_message=mysql_query("SELECT * FROM entete_messages INNER JOIN contenu_messages ON entete_messages.bdd_id=contenu_messages.bdd_entete_message WHERE ((contenu_messages.bdd_id_expediteur='$id' AND contenu_messages.bdd_etat_expediteur<>'-1') OR (contenu_messages.bdd_id_destinataire='$id' AND contenu_messages.bdd_etat_destinataire<>'-1')) AND contenu_messages.bdd_entete_message='$id_msg' ORDER BY contenu_messages.bdd_id DESC") or die ('Erreur : '.mysql_error());?>
				  <table id="Table6" cellpadding="0" cellspacing="0" align="center" bgcolor="#f5f8f9" border="0" width="100%"><tbody>
					<tr><td colspan="3" height="15"></td></tr><?php while($count_contenu_message=mysql_fetch_assoc($reponse_contenu_message)){?>
					<tr>
					  <td valign="top" width="auto"><?php echo id_to_nom_prenom($count_contenu_message['bdd_id_expediteur']);?>: <br/><?php echo $count_contenu_message['bdd_date']." ".$count_contenu_message['bdd_heure'];?></td>
					  <td valign="top" width="450"><textarea align="justify" style="resize:none;width:100%;background-color:transparent;margin:0;padding:0;border:0;" readonly="true"><?php echo $count_contenu_message['bdd_message']?></textarea></td><td>&nbsp;</td>
					</tr><?php }?>
					<tr><td colspan="3" height="15"></td></tr>
				  </tbody></table>
				</td></tr>
				<tr><td height="10"></td></tr>
				<tr><td></td></tr> 
				<tr><td height="10"></td></tr>
				<tr><td>	
				  <table id="Table3" cellpadding="1" cellspacing="0" bgcolor="#90b4de" border="0" width="100%"><tbody>
					<tr><td colspan="3" height="2"></td></tr>
					<tr></tr>
					<tr><td align="left"><input style="CURSOR:pointer" type="submit" value="Supprimer" alt="Supprimer" border="0" height="18" hspace="2" width="67"><input type="button" onclick="window.location.href='/wMessage.php?id_annonce=<?php echo $count_description_message["bdd_id_annonce"];?>'" value="Répondre"></td></tr>
					<tr><td colspan="3" height="2"></td></tr>
				  </tbody></table>
				</td></tr>
				<tr><td height="5"></td></tr>
				<tr><td height="5">Précédent&nbsp;|&nbsp;<a href="">Suivant</a> &nbsp;|&nbsp;<a href="/BoiteReception.php">Retour à la Boite de Reception</a></td></tr>
				<tr><td height="20"></td></tr>
			  </tbody></table></form>
			</td></tr>
		  </tbody></table>
		</td>
	</tr></tbody></table>
  </td>
  <td bgcolor="#999999" width="1"><img src="/images/space.gif" alt="" height="1" border="0" width="1"></td>
</tr></tbody></table>
<?php include_footer();?>
</body>
</html>