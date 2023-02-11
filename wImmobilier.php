<tr><td><table class="if_cadre" cellpadding="0" cellspacing="3" align="center" border="0" width="100%"><tbody><tr><td>
			  <table cellpadding="0" cellspacing="0" align="center" border="0" width="100%"><tbody>
				<tr class="if_entete"><td colspan="6">Rubrique et Adresse</td></tr>
				<tr><td height="10"></td></tr>
				<tr>
					<td width="10"></td>
					<td class="if_label_field_en_haut" id="rech_lab_rub_ann">Rubrique</td>
					<td class="if_label_field_en_haut" id="rech_lab_sou_typ">Type immobilier</td>
				</tr>
				<tr>
					<td width="10"></td>
					<td>
						<select name="Rubrique" class="Rubrique"><option value="Location" n="1">Location</option><option value="Vente" n="2">Vente</option><option value="Terrain" n="3">Terrain</option><option value="Location vacance" n="4">Location vacance</option><option value="Bureaux &amp; Commerces" n="5">Bureaux &amp; Commerces</option><option value="Partage" n="6">Partage</option></select>
						<script>
						$('.Rubrique option').on('click',function(){ 
							var numb=$(this).attr("n");
							$(".Type").hide();
							$(".Type:nth-child("+numb+")").show();
						});
						</script>
					</td>
					<td><select name="Type">
						<optgroup class="Type" label="Location"><option value="Appart. 1 pièce">Appart. 1 pièce</option><option value="Appart. 2 pièces">Appart. 2 pièces</option><option value="Appart. 3 pièces">Appart. 3 pièces</option><option value="Appart. 4 pièces">Appart. 4 pièces</option><option value="Appart. 5 pièces+">Appart. 5 pièces+</option><option value="Maisons">Maisons</option><option value="Duplex">Duplex</option><option value="Surfaces">Surfaces</option><option value="Autre">Autre</option></optgroup>
						<optgroup class="Type" label="Vente" style="display:none;"><option value="Appart. 1 pièce">Appart. 1 pièce</option><option value="Appart. 2 pièces">Appart. 2 pièces</option><option value="Appart. 3 pièces">Appart. 3 pièces</option><option value="Appart. 4 pièces">Appart. 4 pièces</option><option value="Appart. 5 pièces+">Appart. 5 pièces+</option><option value="Maisons">Maisons</option><option value="Duplex">Duplex</option><option value="Surfaces">Surfaces</option><option value="Autre">Autre</option></optgroup>
						<optgroup class="Type" label="Terrain" style="display:none;"><option value="Terrain nu">Terrain nu</option><option value="Terrain agricole">Terrain agricole</option></optgroup>
						<optgroup class="Type" label="Location vacance" style="display:none;"><option value="Appart. 1 pièce">Appart. 1 pièce</option><option value="Appart. 2 pièces">Appart. 2 pièces</option><option value="Appart. 3 pièces">Appart. 3 pièces</option><option value="Appart. 4 pièces">Appart. 4 pièces</option><option value="Appart. 5 pièces+">Appart. 5 pièces+</option><option value="Maisons">Maisons</option></optgroup>
						<optgroup class="Type" label="Bureaux &amp; Commerces" style="display:none;"><option value="Surfaces">Surfaces</option><option value="Fond de Commerce">Fond de Commerce</option><option value="Gérance libre">Gérance libre</option><option value="Bureau">Bureau</option><option value="Atelier,Garage">Atelier,Garage</option><option value="Autre">Autre</option></optgroup>
						<optgroup class="Type" label="Partage" style="display:none;"><option value="Appart. 2 pièces">Appart. 2 pièces</option><option value="Appart. 3 pièces">Appart. 3 pièces</option><option value="Appart. 4 pièces">Appart. 4 pièces</option><option value="Appart. 5 pièces+">Appart. 5 pièces+</option><option value="Maisons">Maisons</option><option value="Duplex">Duplex</option><option value="Autre">Autre</option></optgroup>
					</select></td>
				</tr>
			</tbody></table>
			<table cellpadding="0" cellspacing="0" align="center" border="0" width="100%"><tbody>
				<tr><td height="10"></td></tr>
				<tr>
					<td width="10"></td>
					<td class="if_label_field_en_haut" id="rech_lab_lib_pay">Pays</td>
					<td class="if_label_field_en_haut" id="rech_lab_lib_reg">Gouvernorat</td>
				</tr>
				<tr>
					<td width="10"></td>
					<td><select name="pays" id="pays" class="pays"><?php $pays=array("Algerie","Belgique","Canada","France","Maroc","Senegal","Tunisie");for($i=0;$i<count($pays);$i++){?>
						<option value="<?php echo $pays[$i];?>" n="<?php echo $i+1;?>"><?php echo $pays[$i];?></option>
					<?php }?></select>
						<script>
							$('.pays option').on('click',function(){ 
								var numb=$(this).attr("n");
								$(".gouvernorat").hide();
								$(".gouvernorat:nth-child("+numb+")").show();
							});
						</script>
					</td>
					<td><select name="gouvernorat" id="gouvernorat">
						<optgroup class="gouvernorat">
							<?php $gouvernorat=array("Adrar","Ain Defla","Ain Temouchent","Alger","Annaba","Batna","Béchar","Béjaia","Biskra","Blida","Borj Bou Arréridj","Boumerdès","Buira","Chlef","Constantine","Djelfa","El Bayadh","El Oued","El Tarf","Ghardaia","Guelma","illizi","Jijel","Khenchela","Laghouat","Mascara","Médéa","Mila","Mostaganem","Msila","Naâma","Oran","Ouargla","Oum El Bouaghi","Relizane","Saida","Sétif","Sidi Bel Abbès","Skikda","Souk Ahras","Tamanrasset","Tébessa","Tiaret","Tindouf","Tipaza","Tissemsilt","Tizi Ouzou","Tlemcen");for($i=0;$i<count($pays);$i++){?>
								<option value="<?php echo $gouvernorat[$i];?>"><?php echo $gouvernorat[$i];?></option>
							<?php }?>
						</optgroup>
						<optgroup class="gouvernorat">
							<?php $gouvernorat=array("Anvers","Brabant flamand","Brabant wallon","Bruxelles","Flandre occidentale","Flandre orientale","Hainaut","Liège","Limbourg","Luxembourg","Namur");for($i=0;$i<count($gouvernorat);$i++){?>
								<option value="<?php echo $gouvernorat[$i];?>"><?php echo $gouvernorat[$i];?></option>
							<?php }?>
						</optgroup>
						<optgroup class="gouvernorat">
							<?php $gouvernorat=array("Alberta","Colombie-Britannique","Île-du-Prince-Édouard","Manitoba","Nouveau-Brunswick","Nouvelle-Écosse","Nunavut","Ontario","Québec","Saskatchewan","Terre-Neuve-et-Labrador","Territoires du Nord-Ouest","Yukon");for($i=0;$i<count($gouvernorat);$i++){?>
								<option value="<?php echo $gouvernorat[$i];?>"><?php echo $gouvernorat[$i];?></option>
							<?php }?>
						</optgroup>
						<optgroup class="gouvernorat">
							<?php $gouvernorat=array("Alsace","Aquitaine","Auvergne","Basse normandie","Bourgogne","Bretagne","Centre","Champ. ardn","Corse","Dom","Franche-comte","Haute normandie","Ile-de-france","Languedoc","Limousin","Lorraine","Midi-pyrenees","Nord p. calais","Pays-de-loire","Picardie","Poitou-charente","Prov alp. azur","Rhone-alpes");for($i=0;$i<count($gouvernorat);$i++){?>
								<option value="<?php echo $gouvernorat[$i];?>"><?php echo $gouvernorat[$i];?></option>
							<?php }?>
						</optgroup>
						<optgroup class="gouvernorat">
							<?php $gouvernorat=array("Agadir - Tiznit","Al Hoceima - Taounate","Beni Mellal - Azilal","Casablanca","Fès - Boulemane","Kénitra  - Gharb Chrarda","Laâyoune - Boujdour","Marrakech - Essaouira","Meknès - Tafilalet","Oued Ed Dahab","Oujda - L'Oriental","Rabat - Salé","Safi - Doukhala","Settat - Chaouia","Tan Tan - Guelmim","Tanger - Tétouan");for($i=0;$i<count($gouvernorat);$i++){?>
								<option value="<?php echo $gouvernorat[$i];?>"><?php echo $gouvernorat[$i];?></option>
							<?php }?>
						</optgroup>
						<optgroup class="gouvernorat">
							<?php $gouvernorat=array("Dakar","Diourbel","Fatick","Kaffrine","Kaolack","Kédougou","Kolda","Louga","Matam","Saint-Louis","Sédhiou","Tambacounda","Thiès","Ziguinchor");for($i=0;$i<count($gouvernorat);$i++){?>
								<option value="<?php echo $gouvernorat[$i];?>"><?php echo $gouvernorat[$i];?></option>
							<?php }?>
						</optgroup>
						<optgroup class="gouvernorat">
							<?php $gouvernorat=array("Ariana","Beja","Ben arous","Bizerte","Gabes","Gafsa","Jendouba","Kairouan","Kasserine","Kebili","Le Kef","Mahdia","Manouba","Medenine","Monastir","Nabeul","Sfax","Sidi bouzid","Siliana","Sousse","Tataouine","Tozeur","Tunis","Zaghouan");for($i=0;$i<count($gouvernorat);$i++){?>
								<option value="<?php echo $gouvernorat[$i];?>"><?php echo $gouvernorat[$i];?></option>
							<?php }?>
						</optgroup>
						<optgroup class="gouvernorat">
							<?php $gouvernorat=array("Ariana","Beja","Ben arous","Bizerte","Gabes","Gafsa","Jendouba","Kairouan","Kasserine","Kebili","Le Kef","Mahdia","Manouba","Medenine","Monastir","Nabeul","Sfax","Sidi bouzid","Siliana","Sousse","Tataouine","Tozeur","Tunis","Zaghouan");for($i=0;$i<count($gouvernorat);$i++){?>
								<option value="<?php echo $gouvernorat[$i];?>"><?php echo $gouvernorat[$i];?></option>
							<?php }?>
						</optgroup>
					</select></td>
				</tr>
				<tr><td height="10"></td></tr>
				<tr>
					<td width="10"></td>
					<td class="if_label_field_en_haut" id="id_label_adr" colspan="4">Adresse</td>
				</tr>
				<tr align="left">
					<td width="10"></td>
					<td colspan="4"><input id="Adresse" name="Adresse" size="80" type="text"></td>	
				</tr>
				<tr><td height="20"></td></tr>
			</tbody></table>
			<table cellpadding="0" cellspacing="0" align="center" border="0" width="100%"><tbody>
				<tr class="if_entete"><td colspan="6">Surface et Prix</td></tr>
				<tr><td height="10"></td></tr>
				<tr>
					<td class="if_label_field" id="id_label_surf">Surface (m²)</td>
					<td><input id="surface" name="Surface" size="14" type="text"></td>
				</tr>
				<tr><td height="10"></td></tr>
				<tr>
					<td class="if_label_field" id="id_label_prix">Prix</td>
					<td>
						<input id="Prix" name="Prix" size="14" type="text">
						<select id="id_cod_dev" name="id_cod_dev"> <option selected="selected" value="TND">Dinar Tunisien (TND)&nbsp;&nbsp;</option></select>
					</td>
				</tr>
			</tbody></table>
		</td></tr></tbody></table></td></tr>