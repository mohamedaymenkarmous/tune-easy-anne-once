<?php
session_start();
require_once('php/config.php');
$id_annonce=$_GET["id"];
$reponse_contenu_annonce=mysql_query("SELECT * FROM annonce INNER JOIN annonce_immobilier ON annonce.bdd_id=annonce_immobilier.bdd_id_annonce WHERE bdd_id='$id_annonce'") or die ('Erreur : '.mysql_error());
$count_contenu_annonce=mysql_fetch_assoc($reponse_contenu_annonce);
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
		<td><table><tbody>
			<tr valign="top"><td height="20" width="585"><table cellpadding="0" cellspacing="0" align="center" border="0" width="100%"><tbody><tr><td height="15"></td></tr><tr><td>
				<a href="/"><font style="font-family: Arial,Helvetica; font-size: 10pt; text-decoration: none" color="#829295" face="Arial, Helvetica" size="2"><b>Accueil</b> </font></a> &gt;
				<a href="/ListeAnnonces.php?TypeAnnonce=Immobilier.php"><font style="font-family: Arial,Helvetica; font-SIZE: 10pt; text-decoration: none" color="#829295" face="Arial, Helvetica" size="2"><b>Annonces <?php echo $count_contenu_annonce["bdd_type_annonce"];?></b></font></a> &gt;
				<a href="/DetailsAnnonce.php?TypeAnnonce=rImmobilier.php&id=<?php echo $id_annonce;?>"><font style="font-family: Arial,Helvetica; font-size: 10pt; text-decoration: none" color="#829295" face="Arial, Helvetica" size="2"><b><?php echo $count_contenu_annonce["bdd_titre"];?></b> </font></a>
			</td></tr><tr><td height="5"></td></tr></tbody></table></td></tr>
			<tr valign="top"><td><table cellpadding="0" cellspacing="0" align="center" border="0" width="100%"><tbody><tr><td>
				<table><tbody><tr><td height="5"></td></tr></tbody></table>
				<table class="da_rub_cadre" cellpadding="0" cellspacing="3" align="center" width="100%"><tbody><tr><td>
					<?php include($_GET["TypeAnnonce"]);?>

	    <table cellpadding="0" cellspacing="0" align="center" border="0" width="100%">
			    <tbody><tr><td height="10"></td></tr>
	    <tr>
		    <td class="da_label_field">Insérée le</td>
		    <td class="da_field_text"><?php echo $count_contenu_annonce["bdd_date_insertion"];?></td>
		    <td class="da_label_field">Modifiée le</td>
		    <td class="da_field_text"><?php echo $count_contenu_annonce["bdd_date_modification"];?></td>
	    </tr>
	    <tr><td height="5"></td></tr>
	    </tbody></table>
    		    
    </td>
    </tr>
    </tbody></table>
	<table><tbody><tr><td height="5"></td></tr></tbody></table>


    
    <table class="da_rub_cadre" cellpadding="0" cellspacing="3" align="center" border="0" width="100%">
    <tbody><tr>
    <td>	
	    <table cellpadding="0" cellspacing="0" align="center" width="100%">
	    <tbody><tr class="da_entete"><td colspan="6">Les Photos</td></tr>
	    <tr>
		    <td align="center" valign="top" width="550">
			    <table cellpadding="0" cellspacing="0" align="center">
				    <tbody><tr><td colspan="2" height="15"></td></tr>
				    
				    <tr valign="middle">
					    <td style="CURSOR:pointer" align="center">
						    <table class="PhotoView1" id="Table12" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
							    <tbody><tr valign="middle">
								    <td align="center" valign="middle">
									    <img id="PhotoMin_0" style="max-width:550px" src="<?php echo $count_contenu_annonce["bdd_url_image"];?>" class="PhotoMin1" align="middle">
								    </td>
							    </tr>
						    </tbody></table>
					    </td>
				    </tr>
				    <tr>
					    <td height="10"></td>
				    </tr>				    
			    </tbody></table>
		    </td>
	    </tr>	    
	    </tbody></table>
    </td>
    </tr>
    </tbody></table>
	<table><tbody><tr><td height="5"></td></tr></tbody></table>
    
	
	
    <table cellpadding="0" cellspacing="0" align="center" width="100%">
	<tbody><tr valign="top">
	<td>
        <table class="da_rub_cadre_contact" cellpadding="0" cellspacing="3">
        <tbody><tr><td>	
	        <table cellpadding="0" cellspacing="0" align="center" width="100%">
	        <tbody><tr class="da_entete"><td colspan="6">Contact : Particulier</td></tr>
            <tr><td>
                    
                    <table class="da_contact" border="0" width="100%">
                    <tbody><tr>
                    <td>
                        <ul>
						
							<!-- Particulier -->
							
							<li class="cellphone">Mob : <span class="da_contact_value">+32 478 29 10 55</span></li>
							
                        <li class="repondre">Mail : <a href="/wMessage.php?id_annonce=<?php echo $id_annonce;?>">Envoyer un Message</a></li>
                        </ul>
                     </td>
                    </tr>
                    </tbody></table>
					
                
           </td></tr>
	        </tbody></table>
        </td></tr>
        </tbody></table>
    </td>
    <td>
        <table class="da_rub_cadre_actions" cellpadding="0" cellspacing="3" border="0">
        <tbody><tr><td>	
	        <table cellpadding="0" cellspacing="0" align="center" border="0" width="100%">
	        <tbody><tr class="da_entete"><td colspan="6">Actions</td></tr>
            <tr><td>
                    <table class="da_actions" width="100%">
                    <tbody><tr>
                        <td>
                        
                            <ul>
                            <li class="favoris"><a href="/AjoutFavoris.php?id=<?php echo $id_annonce;?>">Ajouter aux favoris</a></li>
                            </ul>
                                            
                        </td>
                    </tr>
                    </tbody></table>
            </td></tr>
	        </tbody></table>
        </td></tr>
        </tbody></table>
    </td>
    </tr>
    </tbody></table> 
	<table><tbody><tr><td height="5"></td></tr></tbody></table>

 </td>	
</tr>


<tr><td height="20"></td></tr>

<tr>
      <td class="links_tit_rub" align="left">
      Autres annonces dans la même catégorie
      </td>
</tr>
<tr><td height="40"></td></tr>
</tbody></table>

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