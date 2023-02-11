	  <tr><td height="60" valign="bottom"><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left" bgcolor="white" valign="top" width="220">
		<a href="/"><img src="/images/banner_logo_270x60_tunisie.gif" alt="tunisie" title="Tunisie" height="60" border="0" width="270"></a>
	  </td><td style="text-align: right;"></td></tr></tbody></table></td></tr>
	  <tr><td width="100%">
		<table class="MenuHoriz" cellpadding="0" cellspacing="0" width="767"><tbody><tr style="height: 23px" valign="middle">
		  <td width="305"><span class="mh_date_accueil"></span> </td>
		  <td align="right" width="420"><div style="text-align: right" id="div_menu"><strong>
			<a href="/">Accueil</a>
			  <img src="/images/space.gif" alt="" height="11" hspace="12" vspace="0" width="10"/>
			  <img src="/images/thissrv.gif" alt="" style="margin-bottom: -4px;" height="16" hspace="12" vspace="0" width="16">
		  </strong></div></td>
		</tr><tr><td colspan="4" height="1" bgcolor="#c7c7c7"></td></tr></tbody></table>
		<table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td><div id="div" style="width:100%; padding: 0; margin-top:2px; overflow: inherit; position: relative;text-align:center"><div id="div1" style="align:center;"></div></div></td></tr></tbody></table>
		<table bgcolor="#f8f8f8" border="0" cellpadding="0" cellspacing="0" width="767"><tbody><tr valign="middle">
		  <td width="4"></td>
		  <td bgcolor="#f8f8f8" width="370">
			<span class="MsgAccueil">Bienvenue <?php if($_SESSION['s_session']){?>
			  <font style="font-size:11px;font-weight:bold;"><?php echo $_SESSION['s_nom_prenom'];?>&nbsp;</font><?php }?>
			sur Tune Easy Anne Once.<br><?php if($_SESSION["s_nombre_messages"]>0){?><a href="/BoiteReception.php" style="font-size:11px; font-family:Arial; font-weight:bold; color: MediumVioletRed; text-decoration: none;">Vous avez <?php echo $_SESSION["s_nombre_messages"];?> message(s) non lu(s)</a>  <img src="/images/you_have_msg.gif" alt="" height="16" width="14"><?php }?></span>
			<span class="copy"><?php if(!$_SESSION['s_session']){echo "&nbsp;&gt;&nbsp;Vous n'êtes pas connecté.";}?></span>
		  </td>
		  <td bgcolor="#f8f8f8" width="302"></td>
		  <td width="10"><img src="/images/space.gif" alt="" height="20" width="9"></td>
		</tr><tr><td colspan="4" height="1" bgcolor="#999999"></td></tr></tbody></table>
	  </td></tr>
