<table cellpadding="0" cellspacing="0" align="center" width="100%"><tbody>
					<tr class="da_entete"><td colspan="6">[Réf:<?php echo $id_annonce;?>] <?php echo $count_contenu_annonce["bdd_titre"];?></td></tr>
					<tr><td height="10"></td></tr>
					<tr>
		    <td class="da_label_field">Catégorie</td>
		    <td class="da_field_text" colspan="3"><a href="/ListeAnnonces.php?TypeAnnonce=Immobilier.php&Rubrique=<?php echo $count_contenu_annonce["bdd_rubrique"];?>"><?php echo $count_contenu_annonce["bdd_rubrique"];?></a> &nbsp;&gt;&nbsp;<a href="/ListeAnnonces.php?TypeAnnonce=Immobilier.php&Type=<?php echo $count_contenu_annonce["bdd_type"];?>"><?php echo $count_contenu_annonce["bdd_type"];?></a></td>
	    </tr>
	    <tr><td height="10"></td></tr>
	    <tr>
		    <td class="da_label_field">Localisation</td>
		    <td class="da_field_text" colspan="3"><a href="/ListeAnnonces.php?TypeAnnonce=Immobilier.php&pays=<?php echo $count_contenu_annonce["bdd_pays"];?>"><?php echo $count_contenu_annonce["bdd_pays"];?></a> &nbsp;&gt;&nbsp;<a href="/ListeAnnonces.php?TypeAnnonce=Immobilier.php&gouvernorat=<?php echo $count_contenu_annonce["bdd_gouvernorat"];?>"><?php echo $count_contenu_annonce["bdd_gouvernorat"];?></a> </td>
	    </tr>
	    
	    <tr><td height="10"></td></tr>
	    <tr>
		    <td class="da_label_field">Adresse</td>
		    <td class="da_field_text" colspan="3"><?php echo $count_contenu_annonce["bdd_adresse"];?></td>
	    </tr>
	    
	    <tr><td height="10"></td></tr>
	    <tr>
		    <td class="da_label_field">Surface</td>
		    <td class="da_field_text" colspan="3"><?php echo $count_contenu_annonce["bdd_surface"];?>&nbsp;m²&nbsp;</td>
	    </tr>
	    
	    
	    <tr><td height="10"></td></tr>
	    <tr>
		    <td class="da_label_field">Prix</td>
		    <td class="da_field_text" colspan="3"> <?php echo $count_contenu_annonce["bdd_prix"];?>&nbsp;Dinar Tunisien (TND)&nbsp;</td>
	    </tr>
	    <tr><td height="10"></td></tr>
	    <tr>
		    <td class="da_label_field">Texte</td>
		    <td class="da_field_text" colspan="3"><?php echo $count_contenu_annonce["bdd_texte"];?></td>
	    </tr>
	    </tbody></table>