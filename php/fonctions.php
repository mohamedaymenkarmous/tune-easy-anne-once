<?php
function not_found(){header("HTTP/1.0 404 Not Found");include($_SERVER['DOCUMENT_ROOT'].'/Erreur.php');exit;}

function chercher_session($session){
  $reponse=mysql_query("SELECT bdd_session FROM connexion WHERE bdd_session='$session'") or die ('Erreur : '.mysql_error());	//importation la session qui correspond à la session en parametre
  $count=mysql_fetch_assoc($reponse);
  return ($count["bdd_session"]==$session) ? 0 : 1;
}

function genere_session_unique(){
	$valide=1;
	do{
		$session="";
		for ($ligne=0;$ligne<30;$ligne++)//Création d'un identifiant aléatoire
			$session.=substr('0123456789AZERTYUIOPMLKJHGFDSQWXCVBN',(rand()%(strlen('0123456789AZERTYUIOPMLKJHGFDSQWXCVBN'))),1);
		$valide=chercher_session($session);
	}while($valide==0);//si la session existe on regenere un autre code
	return $session;
}

function creer_session_et_insert_bdd($id,$etat,$ip){
	$_SESSION['s_session']=genere_session_unique();
	$session=$_SESSION['s_session'];
	$_SESSION['s_captcha_login']=0;
	$browser=$_SERVER['HTTP_USER_AGENT'];
	$http_accept_el=$_SERVER["HTTP_ACCEPT"].";".$_SERVER["HTTP_ACCEPT_ENCODING"].";".$_SERVER["HTTP_ACCEPT_LANGUAGE"];
	$date = date("Y-m-d");
	$heure = date("H:i");
	mysql_query("INSERT	 INTO connexion (bdd_session, bdd_id, bdd_etat, bdd_ip_visite, bdd_heure_visite, bdd_date_visite, bdd_browser, bdd_http_accept_el) VALUES ('$session', '$id', '$etat', '$ip', '$heure', '$date', '$browser', '$http_accept_el')") or die ('Erreur : '.mysql_error());	//insertion dans la bdd
	return $session;
}

function include_head(){
	include("head.php");
}

function include_menu(){
	include("menu.php");
}

function include_footer(){
	include("footer.php");
}

function nombre_message($id){
	$reponse_message=mysql_query("SELECT COUNT(DISTINCT entete_messages.bdd_id) AS count_msg_non_lu FROM entete_messages INNER JOIN contenu_messages on entete_messages.bdd_id=contenu_messages.bdd_entete_message WHERE (bdd_signature LIKE '%-$id' OR bdd_signature LIKE '$id-%') AND ((contenu_messages.bdd_id_expediteur='$id' AND contenu_messages.bdd_etat_expediteur='0') OR (contenu_messages.bdd_id_destinataire='$id' AND contenu_messages.bdd_etat_destinataire='0'))") or die ('Erreur : '.mysql_error());
	$count_message=mysql_fetch_assoc($reponse_message);
	if($count_message['count_msg_non_lu']==0){
		$reponse_message2=mysql_query("SELECT COUNT(*) AS count_msg FROM entete_messages WHERE bdd_signature LIKE '%-$id' OR bdd_signature LIKE '$id-%'") or die ('Erreur : '.mysql_error());
		$count_message2=mysql_fetch_assoc($reponse_message2);
		if($count_message2['count_msg']==0) return -1;
		else return 0;
	}else return $count_message['count_msg_non_lu'];
}

function nombre_message_corbeille($id){
	$reponse_message=mysql_query("SELECT COUNT(DISTINCT entete_messages.bdd_id) AS count_msg_corbeille FROM entete_messages INNER JOIN contenu_messages on entete_messages.bdd_id=contenu_messages.bdd_entete_message WHERE (bdd_signature LIKE '%-$id' OR bdd_signature LIKE '$id-%') AND ((contenu_messages.bdd_id_expediteur='$id' AND contenu_messages.bdd_etat_expediteur='-1') OR (contenu_messages.bdd_id_destinataire='$id' AND contenu_messages.bdd_etat_destinataire='-1'))") or die ('Erreur : '.mysql_error());
	$count_message=mysql_fetch_assoc($reponse_message);
	return $count_message['count_msg_corbeille'];
}

function nombre_message_negatif($n){
	if($n==-1) return 0;
	elseif($n>=0) return $n;
}

function id_to_nom_prenom($id){
	$reponse_np=mysql_query("SELECT bdd_nom,bdd_prenom FROM membres WHERE bdd_id='$id'") or die ('Erreur : '.mysql_error());
	$count_np=mysql_fetch_assoc($reponse_np);
	$np=$count_np['bdd_nom']." ".$count_np['bdd_prenom'];
	if(trim($np)!="") return $np;
}

function marquer_message_comme($id_message,$id_proprietaire,$etat){
	$reponse_np=mysql_query("UPDATE contenu_messages SET bdd_etat_expediteur='$etat' WHERE bdd_id_expediteur='$id_proprietaire' AND bdd_entete_message='$id_message'") or die ('Erreur : '.mysql_error());
	$reponse_np=mysql_query("UPDATE contenu_messages SET bdd_etat_destinataire='$etat' WHERE bdd_id_destinataire='$id_proprietaire' AND bdd_entete_message='$id_message'") or die ('Erreur : '.mysql_error());
	$_SESSION['s_nombre_messages_corbeille']=nombre_message_corbeille($id_proprietaire);
}

function if_page_message_php(){
	list($phttp1,$pvide2,$pwww3,$niveau1)=explode('/',"http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(preg_match("#^.*(message\.php).*$#",$niveau1)) return 1;
	else return 0;
}

function id_message_suivant($id,$id_msg){
	$reponse_liste_message=mysql_query("SELECT DISTINCT * FROM entete_messages INNER JOIN contenu_messages ON entete_messages.bdd_id=contenu_messages.bdd_entete_message WHERE (bdd_signature LIKE '%-$id' OR bdd_signature LIKE '$id-%') AND ((bdd_id_expediteur='$id' AND (bdd_etat_expediteur='0' OR bdd_etat_expediteur='1')) OR (bdd_id_destinataire='$id' AND (bdd_etat_destinataire='0' OR bdd_etat_destinataire='1'))) ORDER BY contenu_messages.bdd_id DESC") or die ('Erreur : '.mysql_error());
	$msg_preced=0;
	while($count_liste_message=mysql_fetch_assoc($reponse_liste_message)){
		if($msg_preced==0 && $count_liste_message['bdd_entete_message']==$id_msg) return 0;
		elseif($msg_preced!=0 && $msg_preced!=$id_msg && $count_liste_message['bdd_entete_message']==$id_msg) return $msg_preced;
		else $msg_preced=$count_liste_message['bdd_entete_message'];
	}
	return 0;
}

function id_message_precedent($id,$id_msg){
	$reponse_liste_message=mysql_query("SELECT DISTINCT * FROM entete_messages INNER JOIN contenu_messages ON entete_messages.bdd_id=contenu_messages.bdd_entete_message WHERE (bdd_signature LIKE '%-$id' OR bdd_signature LIKE '$id-%') AND ((bdd_id_expediteur='$id' AND (bdd_etat_expediteur='0' OR bdd_etat_expediteur='1')) OR (bdd_id_destinataire='$id' AND (bdd_etat_destinataire='0' OR bdd_etat_destinataire='1'))) ORDER BY contenu_messages.bdd_id DESC") or die ('Erreur : '.mysql_error());
	$message_suiv=0;
	while($count_liste_message=mysql_fetch_assoc($reponse_liste_message)){
		if($count_liste_message['bdd_entete_message']==$id_msg) $message_suiv=1;
		if($count_liste_message['bdd_entete_message']!=$id_msg && $message_suiv==1) return $count_liste_message['bdd_entete_message'];
	}
	return 0;
}
?>