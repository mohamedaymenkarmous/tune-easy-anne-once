<tr valign="top"><td height="20" valign="top" width="585"><table class="PagePath" cellpadding="0" cellspacing="0" align="center" border="0" width="100%"><tbody><tr><td height="10"></td></tr>
				<tr><td>
					<img src="/images/Home2_24x24.png" alt="" class="PhotoDetails" border="0" height="21" width="21">
					<a href="/ListeAnnonces.php?TypeAnnonce=Immobilier.php">Immobilier&nbsp;</a>
				</td></tr>
				<tr><td height="5"></td></tr>
			</tbody></table></td></tr>
			<tr valign="top"><td><table cellpadding="0" cellspacing="0" align="center" border="0" width="100%"><tbody><tr><td height="10"></td></tr>
				<tr><td colspan="13"><table class="RecordsNumber" cellpadding="0" cellspacing="0" width="100%"><tbody><tr>
					<td><?php if($page>1){$debut=($page-1)*10;}else{$debut=0;}$reponse_n_annonce=mysql_query("SELECT COUNT(*) AS n_ann FROM annonce INNER JOIN annonce_immobilier ON annonce.bdd_id=annonce_immobilier.bdd_id_annonce WHERE bdd_type_annonce='immobilier' ORDER BY annonce.bdd_id DESC") or die ('Erreur : '.mysql_error());$count_n_annonce=mysql_fetch_assoc($reponse_n_annonce);$n_annonces=$count_n_annonce['n_ann'];?>Résultat de votre recherche :&nbsp;<b><?php echo $n_annonces;?> annonces</b></td>
				</tr></tbody></table></td></tr>
				<tr><td height="5"></td></tr>
				<tr class="Entete1" bgcolor="#294a73" valign="middle">
					<td bgcolor="#294a73" width="1"></td>
					<td width="18%">&nbsp;Région</td><td bgcolor="white" width="1"></td>
					<td width="18%">&nbsp;Nature</td><td bgcolor="white" width="1"></td>
					<td width="13%">&nbsp;Type</td><td bgcolor="white" width="1"></td>
					<td width="28%">&nbsp;Texte annonce</td><td bgcolor="white" width="1"></td>
					<td width="11%"><table border="0" width="100%"><tbody><tr><td>&nbsp;<b>Prix</b></td></tr></tbody></table></td><td bgcolor="white" width="1"></td>
					<td width="12%"><table border="0" width="100%"><tbody><tr><td>&nbsp;<b>Modifiée</b></td><td height="8"><img src="/images/n_Fleche_bas_active.gif" alt="" height="8" width="7"></td></tr></tbody></table></td>
					<td bgcolor="#294a73" width="1"></td>
				</tr><?php $reponse_liste_annonce=mysql_query("SELECT * FROM annonce INNER JOIN annonce_immobilier ON annonce.bdd_id=annonce_immobilier.bdd_id_annonce WHERE bdd_type_annonce='immobilier' ORDER BY annonce.bdd_id DESC LIMIT $debut,10") or die ('Erreur : '.mysql_error());
					while($count_liste_annonce=mysql_fetch_assoc($reponse_liste_annonce)){?>
				<tr class="Tableau1" valign="middle">
					<td bgcolor="#294a73" height="20"><img src="/images/space.gif" alt="" height="1" width="1"></td>
					<td>&nbsp;&nbsp;<?php echo $count_liste_annonce['bdd_gouvernorat'];?></td>
					<td bgcolor="#294a73"><img src="/images/space.gif" alt="" height="1" width="1"></td>
					<td style="CURSOR:pointer;">&nbsp;&nbsp;<?php echo $count_liste_annonce['bdd_rubrique'];?></td>
					<td bgcolor="#294a73"><img src="/images/space.gif" alt="" height="1" width="1"></td>
					<td style="CURSOR:pointer;">&nbsp;&nbsp;<?php echo $count_liste_annonce['bdd_type'];?></td>
					<td bgcolor="#294a73"><img src="/images/space.gif" alt="" height="1" width="1"></td>
					<td>&nbsp;<?php if(strlen($count_liste_annonce['bdd_url_image'])>0){?><img src="/images/icon_camera.gif" alt="avec photo" border="0" height="13" width="13">&nbsp; <?php }?><a href="/DetailsAnnonce.php?TypeAnnonce=rImmobilier.php&id=<?php echo $count_liste_annonce['bdd_id'];?>"><?php
						if(strlen($count_liste_annonce['bdd_titre'])>15)echo substr($count_liste_annonce['bdd_titre'],0,15)."...";
						elseif(strlen($count_liste_annonce['bdd_titre'])<=15 && strlen($count_liste_annonce['bdd_titre'])>0)echo $count_liste_annonce['bdd_titre'];?>
					</a></td>
					<td bgcolor="#294a73"><img src="/images/space.gif" alt="" height="1" width="1"></td>
					<td style="CURSOR:pointer;text-align: right;"><?php echo $count_liste_annonce['bdd_prix'];?>&nbsp;</td>
					<td bgcolor="#294a73"><img src="/images/space.gif" alt="" height="1" width="1"></td><td style="CURSOR:pointer;">&nbsp;&nbsp;<?php echo $count_liste_annonce['bdd_date_modification'];?></td>
					<td bgcolor="#294a73"><img src="/images/space.gif" alt="" height="1" width="1"></td>
				</tr>
				<tr bgcolor="#294a73"><td colspan="17" height="1"></td></tr><?php }?>
				<tr><td colspan="10" height="5"></td></tr>
			</tbody></table>
			<table cellpadding="0" cellspacing="0" align="center" width="100%"><tbody>
				<tr><td height="15"></td></tr>
				<tr><td width="40"><img src="/images/n_first_ns.gif" alt="" border="0"></td><td width="40"><img src="/images/n_prev_ns.gif" alt="" border="0"></td>
				<td style="text-align:center; vertical-align: middle;" width="270"><?php $next=0;$max_n_page=ceil($n_annonces/10);for($i=1;$i<=$max_n_page;$i++){?>
					<img src="/images/space.gif" alt="" border="0">	<?php if($page!=$i){?><a href="/ListeAnnonces.php?TypeAnnonce=<?php echo $_GET['TypeAnnonce'];?>&page=<?php echo $i;?>"><?php }?><font style="TEXT-DECORATION: none" color="Black" face="Arial, Helvetica" size="2"><b><?php echo $i;if($i==($page+1)){$next=$i;}?></b></font><?php if($page!=$i){?></a><?php }?> &nbsp;
				<?php }?></td>
				<td width="40"><?php if($page<$i){?><a href="/ListeAnnonces.php?TypeAnnonce=<?php echo $_GET['TypeAnnonce'];?>&page=<?php if($next>0)echo "&page=".$next;?>"><?php }?> <img src="/images/n_next_ns.gif" alt="" border="0"> <?php if($page<$i){?></a><?php }?> </td>
				<td width="40"><?php if($page<$i){?><a href="/ListeAnnonces.php?TypeAnnonce=<?php echo $_GET['TypeAnnonce'];?>&page=<?php if($next>0)echo "&page=".$max_n_page;?>"><?php }?> <img src="/images/n_last_ns.gif" alt="" border="0"> <?php if($page<$i){?></a><?php }?> </td>
				<td>&nbsp;</td>
			</tr>
		</tbody></table></td></tr>