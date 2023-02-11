<?php
session_start();
$_SESSION["s_zone_messagerie"]=1;
require_once('php/config.php');
$id=$_SESSION["s_id"];
$reponse_cnt_total_message=mysql_query("SELECT COUNT(DISTINCT entete_messages.bdd_id) AS count_total_msg FROM entete_messages INNER JOIN contenu_messages ON entete_messages.bdd_id=contenu_messages.bdd_entete_message WHERE (bdd_signature LIKE '%-$id' OR bdd_signature LIKE '$id-%') AND ((bdd_id_expediteur='$id' AND bdd_etat_expediteur='-1') OR (bdd_id_destinataire='$id' AND bdd_etat_destinataire='-1'))") or die ('Erreur : '.mysql_error());
$count_cnt_total_message=mysql_fetch_assoc($reponse_cnt_total_message);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Corbeille</title>
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
function OnChange_Select()
{
    
    var iSelect = parseInt(document.getElementById("id_select").value); 
	
	var d_count_select_elt=0, d_last_elt = <?php echo $count_cnt_total_message['count_total_msg'];?>,s_cod_del,s_codes_del_msg="";
    switch(iSelect)
    {
        case 1 : //select all
			if(d_last_elt>=1){
				document.getElementById("chk_1").checked=true;
				if ( d_last_elt >= 2){
					for (i=2;i <= d_last_elt;i++){
						document.getElementById("chk_"+i).checked=true;
					}
				}
			}break;
        
        case 2 : //select none
	        if(d_last_elt >=1){
		        for (i=1;i <= d_last_elt;i++) document.getElementById("chk_"+i).checked=false;
	        }break;
        
        case 3 : //select read
			if(d_last_elt >=1){
				var iRead = parseInt(document.getElementById("read_1").value); 
				if ( iRead == 1 ) document.getElementById("chk_1").checked=true;
				else document.getElementById("chk_1").checked=false;

				if(d_last_elt >= 2){
					for (i=2;i <= d_last_elt;i++){
						var iRead = parseInt(document.getElementById("read_"+i).value); 
						if ( iRead == 1 ) document.getElementById("chk_"+i).checked=true;
						else document.getElementById("chk_"+i).checked=false;
					}
				}
			}break;
        
        case 4 : //select non read
			if(d_last_elt >=1){
				var iRead = parseInt(document.getElementById("read_1").value); 
				if ( iRead == 0 ) document.getElementById("chk_1").checked=true;
				else document.getElementById("chk_1").checked=false;

				if(d_last_elt >= 2){
					for (i=2;i <= d_last_elt;i++){
						var iRead = parseInt(document.getElementById("read_"+i).value); 
						if ( iRead == 0 ) document.getElementById("chk_"+i).checked=true;
						else document.getElementById("chk_"+i).checked=false;
					}
				}
			}break;
    }
}
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
		<td rowspan="14" width="585"><table cellpadding="0" cellspacing="3" border="0" height="300" width="565"><tbody><tr><td height="20">&nbsp;</td></tr><tr valign="top"><td><form method="post" action="/wActionMessage.php" id="FormActionMessage" name="FormActionMessage"><table cellpadding="0" cellspacing="0" border="0" width="100%"><tbody>
		  <tr valign="middle"><td><table cellpadding="0" cellspacing="0" border="0" width="100%"><tbody><tr> <td height="20"><img src="/images/titre_page_messages_envoyes.gif" height="23" width="298"></td></tr></tbody></table></td></tr>
		  <tr><td height="10"></td></tr>
		  <tr><td colspan="11"></td></tr> 
		  <tr valign="middle"><td height="10"></td></tr>
		  <tr valign="middle">
			<td><table cellpadding="0" cellspacing="0" align="center" bgcolor="white" border="0" width="100%"><tbody>
			  <tr><td colspan="12"><table cellpadding="1" cellspacing="0" bgcolor="#90b4de" border="0" width="100%"><tbody>
				<tr><td colspan="5" height="2"></td></tr>
				<tr>
				  <td width="67">
					<input name="id_proprietaire" value="<?php echo $id;?>" type="hidden">
					<input style="display:none;" id="action_liste_id_message" name="action_liste_id_message" value="" type="submit">
					<input onclick="OnClick_Submit('-2');" style="CURSOR:pointer;" value="Vider" alt="Vider" type="button">
				  </td>
				  <td><input onclick="OnClick_Submit('1');" style="CURSOR:pointer;" value="Restaurer" alt="Restaurer" type="button"></td>
				  <td width="100"><select style="font-size:11pt;" id="id_select" name="id_select" onchange="OnChange_Select();">
					<option selected="selected" value="">&lt; Sélectionner : &gt;</option>
					<option value="1">Tout&nbsp;&nbsp;</option>
					<option value="2">Aucun&nbsp;&nbsp;</option>
					<option value="3">Déjà lu&nbsp;&nbsp;</option>
					<option value="4">Non lu&nbsp;&nbsp;</option>
				  </select></td>
				</tr>
				<tr><td colspan="5" height="2"></td></tr>
			  </tbody></table></td></tr>
			  <tr class="Entete1" bgcolor="#7f7f7f" height="18" valign="middle">
				<td><img src="/images/space.gif" height="1" width="1"></td>
				<td valign="middle" width="5%">	</td>
				<td bgcolor="White"><img src="/images/space.gif" height="1" width="1"></td>
				<td valign="middle" width="24%"><table border="0" width="100%"><tbody><tr>
				  <td>&nbsp;<b>De/À</b></td>
				  <td align="right"><table><tbody><tr>
					<td style="CURSOR:pointer"><img src="/images/n_Fleche_bas.gif" alt="" height="8" width="7"></td>
					<td style="CURSOR:pointer"><img src="/images/n_Fleche_haut.gif" alt="" height="8" width="7">&nbsp;</td>
				  </tr></tbody></table></td>
				</tr></tbody></table></td>
				<td bgcolor="White"><img src="/images/space.gif" height="1" width="1"></td>
				<td valign="middle" width="38%"><table border="0" width="100%"><tbody><tr>
				  <td>&nbsp;<b>Message</b></td>
				  <td align="right"><table><tbody><tr>
					<td style="CURSOR:pointer"><img src="/images/n_Fleche_bas.gif" alt="" height="8" width="7"></td>
					<td style="CURSOR:pointer"><img src="/images/n_Fleche_haut.gif" alt="" height="8" width="7">&nbsp;</td>
				  </tr></tbody></table></td>
				</tr></tbody></table></td>
				<td bgcolor="White"><img src="/images/space.gif" height="1" width="1"></td>
				<td valign="middle" width="21%"><table border="0" width="100%"><tbody><tr>
				  <td>&nbsp;<b>Date</b></td>
				  <td align="right"><table><tbody><tr>
					<td height="8"><img src="/images/n_Fleche_bas_active.gif" alt="" height="8" width="7"></td>
					<td style="CURSOR:pointer"><img src="/images/n_Fleche_haut.gif" alt="" height="8" width="7">&nbsp;</td>
				  </tr></tbody></table></td>
				</tr></tbody></table></td>
				<td bgcolor="White"><img src="/images/space.gif" height="1" width="1"></td>
				<td valign="middle" width="12%">&nbsp;<b>Annonce</b></td>
				<td><img src="/images/space.gif" height="1" width="1"></td>
			  </tr><?php $liste_id_msg_non_repeated=array();
					$reponse_liste_message=mysql_query("SELECT DISTINCT * FROM entete_messages INNER JOIN contenu_messages ON entete_messages.bdd_id=contenu_messages.bdd_entete_message WHERE (bdd_signature LIKE '%-$id' OR bdd_signature LIKE '$id-%') AND ((bdd_id_expediteur='$id' AND bdd_etat_expediteur='-1') OR (bdd_id_destinataire='$id' AND bdd_etat_destinataire='-1')) ORDER BY contenu_messages.bdd_id DESC") or die ('Erreur : '.mysql_error());
					$i=1;while($count_liste_message=mysql_fetch_assoc($reponse_liste_message)){
					  if(!in_array($count_liste_message["bdd_entete_message"],$liste_id_msg_non_repeated)){
						$liste_id_msg_non_repeated[]=$count_liste_message["bdd_entete_message"];?>
			  <tr class="Tableau1" <?php if(($count_liste_message["bdd_id_expediteur"]==$id && $count_liste_message["bdd_etat_expediteur"]==0) || ($count_liste_message["bdd_id_destinataire"]==$id && $count_liste_message["bdd_etat_destinataire"]==0)){?>style="font-weight: bold;"<?php }?> valign="middle">
				<td bgcolor="#eeeeee"><img src="/images/space.gif" height="1" width="1"></td>
				<td style="CURSOR:pointer" align="center">
				  <input id="chk_<?php echo $i;?>" name="id_msg_checked[]" value="<?php echo $count_liste_message["bdd_entete_message"];?>" type="checkbox">
				  <input id="read_<?php echo $i;?>"
					value="<?php if($count_liste_message["bdd_id_expediteur"]==$id){
						echo $count_liste_message["bdd_etat_expediteur"];
						$id_personne_msg=$count_liste_message["bdd_id_destinataire"];
						$de_ou_a="À";
					  }elseif($count_liste_message["bdd_id_destinataire"]==$id){
						echo $count_liste_message["bdd_etat_destinataire"];
						$id_personne_msg=$count_liste_message["bdd_id_expediteur"];
						$de_ou_a="De";
					  }?>" type="hidden">
				</td>
				<td bgcolor="#eeeeee"><img src="/images/space.gif" height="1" width="1"></td>
				<td style="CURSOR:pointer">&nbsp;&nbsp;<?php echo $de_ou_a." ".id_to_nom_prenom($id_personne_msg);?></td>
				<td bgcolor="#eeeeee"><img src="/images/space.gif" height="1" width="1"></td>
				<td>&nbsp;<a href="/message.php?id=<?php echo $count_liste_message["bdd_entete_message"];?>"><?php
				  if(strlen($count_liste_message["bdd_message"])>30)echo substr($count_liste_message["bdd_message"],0,30)."...";
				  elseif(strlen($count_liste_message["bdd_message"])<=30 && strlen($count_liste_message["bdd_message"])>0)echo $count_liste_message["bdd_message"];?>
				</a></td>
				<td bgcolor="#eeeeee"><img src="/images/space.gif" height="1" width="1"></td>
				<td valign="middle">&nbsp;&nbsp;<?php echo $count_liste_message["bdd_date"]." ".$count_liste_message["bdd_heure"];?></td>
				<td bgcolor="#eeeeee"><img src="/images/space.gif" height="1" width="1"></td>
				<td align="center"><a href="/DetailsAnnonceAutres.php?cod_ann=<?php if($count_liste_message["bdd_id_annonce"]>0)echo $count_liste_message["bdd_id_annonce"];?>" target="_blank"><?php if($count_liste_message["bdd_id_annonce"]>0)echo $count_liste_message["bdd_id_annonce"];?></a></td>
				<td bgcolor="#eeeeee"><img src="/images/space.gif" height="1" width="1"></td>
			  </tr>
			  <tr bgcolor="Gainsboro" height="1"><td colspan="11" height="1"></td></tr>
			  <tr><td colspan="11"></td></tr><?php $i++;}}?>
			  <tr><td colspan="11" height="10"></td></tr>
			</tbody></table>
			<table cellpadding="0" cellspacing="0" align="center" width="100%"><tbody>
			  <tr align="left">
				<td align="left" width="40"><img src="/images/n_first_ns.gif" border="0"></td>
				<td align="right" width="40"><img src="/images/n_prev_ns.gif" border="0"></td>
				<td align="center" valign="top" width="20"><font style="FONT-FAMILY: Arial,Helvetica; FONT-SIZE: 10pt; TEXT-DECORATION: none" color="#d0d0d0" face="Arial, Helvetica" size="2">
				  <b>1</b>
				</font></td>
				<td align="left" width="40"><img src="/images/n_next_ns.gif" border="0">  </td>
				<td align="right" width="40"><img src="/images/n_last_ns.gif" border="0">  </td>
				<td colspan="10" align="right">&nbsp;1&nbsp;-&nbsp;<?php echo $count_cnt_total_message['count_total_msg'];?> sur <?php echo $count_cnt_total_message['count_total_msg'];?>&nbsp;&nbsp;</td>
			  </tr>
			  <tr><td height="5"></td></tr>
			  <tr><td colspan="15"><table cellpadding="1" cellspacing="0" bgcolor="#90b4de" border="0" width="100%"><tbody>
				<tr><td colspan="3" height="2"></td></tr>
				<tr>
				  <td width="67"><input onclick="OnClick_Submit('-1');" style="CURSOR:pointer;" value="Supprimer" alt="Supprimer" type="button"></td>
				  <td width="67"><input onclick="OnClick_Submit('0');" style="CURSOR:pointer;" value="Marquer Comme Non Lu" alt="Marquer Comme Non Lu" type="button"></td>
				  <td><input onclick="OnClick_Submit('1');" style="CURSOR:pointer;" value="Marquer Comme Lu" alt="Marquer Comme Lu" type="button"></td>
				</tr>
				<tr><td colspan="3" height="2"></td></tr>
			  </tbody></table></td></tr>
			  <tr><td height="10"></td></tr>
			  <tr><td colspan="15">
				<font color="Black" face="Tahoma,Arial" size="1"><font color="red">Important :</font>&nbsp;Le contenu des messages n'engage que leurs expéditeurs. Malgré les vérifications effectuées, notre site ne donne aucune garantie concernant : la véracité,	la qualité et le contenu des messages. Nous vous conseillons vivement de prêter attention avant tout contact !</font>
			  </td></tr>
			</tbody></table></td>
		  </tr>
		  <tr><td height="10"></td></tr>
		</tbody></table></form></td></tr></tbody></table></td>
	</tr></tbody></table>
  </td>
  <td bgcolor="#999999" width="1"><img src="/images/space.gif" alt="" height="1" border="0" width="1"></td>
</tr></tbody></table>
<?php include_footer();?>
</body>
</html>