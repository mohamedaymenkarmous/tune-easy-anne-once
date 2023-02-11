<?php
session_start();
require_once('php/config.php');
$id=$_SESSION["s_id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Annonce Immobilière</title>
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
<script src="/jquery-1.10.2.js"></script>
<script type='text/javascript'>//<![CDATA[ 
function get_html_translation_table (table, quote_style) {
    // http://kevin.vanzonneveld.net
    // +   original by: Philip Peterson
    // +    revised by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   bugfixed by: noname
    // +   bugfixed by: Alex
    // +   bugfixed by: Marco
    // +   bugfixed by: madipta
    // +   improved by: KELAN
    // +   improved by: Brett Zamir (http://brett-zamir.me)
    // +   bugfixed by: Brett Zamir (http://brett-zamir.me)
    // +      input by: Frank Forte
    // +   bugfixed by: T.Wild
    // +      input by: Ratheous
    // %          note: It has been decided that we're not going to add global
    // %          note: dependencies to php.js, meaning the constants are not
    // %          note: real constants, but strings instead. Integers are also supported if someone
    // %          note: chooses to create the constants themselves.
    // *     example 1: get_html_translation_table('HTML_SPECIALCHARS');
    // *     returns 1: {'"': '&quot;', '&': '&amp;', '<': '&lt;', '>': '&gt;'}
    var entities = {},
        hash_map = {},
        decimal;
    var constMappingTable = {},
        constMappingQuoteStyle = {};
    var useTable = {},
        useQuoteStyle = {};

    // Translate arguments
    constMappingTable[0] = 'HTML_SPECIALCHARS';
    constMappingTable[1] = 'HTML_ENTITIES';
    constMappingQuoteStyle[0] = 'ENT_NOQUOTES';
    constMappingQuoteStyle[2] = 'ENT_COMPAT';
    constMappingQuoteStyle[3] = 'ENT_QUOTES';

    useTable = !isNaN(table) ? constMappingTable[table] : table ? table.toUpperCase() : 'HTML_SPECIALCHARS';
    useQuoteStyle = !isNaN(quote_style) ? constMappingQuoteStyle[quote_style] : quote_style ? quote_style.toUpperCase() : 'ENT_COMPAT';

    if (useTable !== 'HTML_SPECIALCHARS' && useTable !== 'HTML_ENTITIES') {
        throw new Error("Table: " + useTable + ' not supported');
        // return false;
    }

    entities['38'] = '&amp;';
    if (useTable === 'HTML_ENTITIES') {
        entities['160'] = '&nbsp;';
        entities['161'] = '&iexcl;';
        entities['162'] = '&cent;';
        entities['163'] = '&pound;';
        entities['164'] = '&curren;';
        entities['165'] = '&yen;';
        entities['166'] = '&brvbar;';
        entities['167'] = '&sect;';
        entities['168'] = '&uml;';
        entities['169'] = '&copy;';
        entities['170'] = '&ordf;';
        entities['171'] = '&laquo;';
        entities['172'] = '&not;';
        entities['173'] = '&shy;';
        entities['174'] = '&reg;';
        entities['175'] = '&macr;';
        entities['176'] = '&deg;';
        entities['177'] = '&plusmn;';
        entities['178'] = '&sup2;';
        entities['179'] = '&sup3;';
        entities['180'] = '&acute;';
        entities['181'] = '&micro;';
        entities['182'] = '&para;';
        entities['183'] = '&middot;';
        entities['184'] = '&cedil;';
        entities['185'] = '&sup1;';
        entities['186'] = '&ordm;';
        entities['187'] = '&raquo;';
        entities['188'] = '&frac14;';
        entities['189'] = '&frac12;';
        entities['190'] = '&frac34;';
        entities['191'] = '&iquest;';
        entities['192'] = '&Agrave;';
        entities['193'] = '&Aacute;';
        entities['194'] = '&Acirc;';
        entities['195'] = '&Atilde;';
        entities['196'] = '&Auml;';
        entities['197'] = '&Aring;';
        entities['198'] = '&AElig;';
        entities['199'] = '&Ccedil;';
        entities['200'] = '&Egrave;';
        entities['201'] = '&Eacute;';
        entities['202'] = '&Ecirc;';
        entities['203'] = '&Euml;';
        entities['204'] = '&Igrave;';
        entities['205'] = '&Iacute;';
        entities['206'] = '&Icirc;';
        entities['207'] = '&Iuml;';
        entities['208'] = '&ETH;';
        entities['209'] = '&Ntilde;';
        entities['210'] = '&Ograve;';
        entities['211'] = '&Oacute;';
        entities['212'] = '&Ocirc;';
        entities['213'] = '&Otilde;';
        entities['214'] = '&Ouml;';
        entities['215'] = '&times;';
        entities['216'] = '&Oslash;';
        entities['217'] = '&Ugrave;';
        entities['218'] = '&Uacute;';
        entities['219'] = '&Ucirc;';
        entities['220'] = '&Uuml;';
        entities['221'] = '&Yacute;';
        entities['222'] = '&THORN;';
        entities['223'] = '&szlig;';
        entities['224'] = '&agrave;';
        entities['225'] = '&aacute;';
        entities['226'] = '&acirc;';
        entities['227'] = '&atilde;';
        entities['228'] = '&auml;';
        entities['229'] = '&aring;';
        entities['230'] = '&aelig;';
        entities['231'] = '&ccedil;';
        entities['232'] = '&egrave;';
        entities['233'] = '&eacute;';
        entities['234'] = '&ecirc;';
        entities['235'] = '&euml;';
        entities['236'] = '&igrave;';
        entities['237'] = '&iacute;';
        entities['238'] = '&icirc;';
        entities['239'] = '&iuml;';
        entities['240'] = '&eth;';
        entities['241'] = '&ntilde;';
        entities['242'] = '&ograve;';
        entities['243'] = '&oacute;';
        entities['244'] = '&ocirc;';
        entities['245'] = '&otilde;';
        entities['246'] = '&ouml;';
        entities['247'] = '&divide;';
        entities['248'] = '&oslash;';
        entities['249'] = '&ugrave;';
        entities['250'] = '&uacute;';
        entities['251'] = '&ucirc;';
        entities['252'] = '&uuml;';
        entities['253'] = '&yacute;';
        entities['254'] = '&thorn;';
        entities['255'] = '&yuml;';
    }

    if (useQuoteStyle !== 'ENT_NOQUOTES') {
        entities['34'] = '&quot;';
    }
    if (useQuoteStyle === 'ENT_QUOTES') {
        entities['39'] = '&#39;';
    }
    entities['60'] = '&lt;';
    entities['62'] = '&gt;';


    // ascii decimals to real symbols
    for (decimal in entities) {
        if (entities.hasOwnProperty(decimal)) {
            hash_map[String.fromCharCode(decimal)] = entities[decimal];
        }
    }

    return hash_map;
}

function htmlentities (string, quote_style, charset, double_encode) {
    // http://kevin.vanzonneveld.net
    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +    revised by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   improved by: nobbler
    // +    tweaked by: Jack
    // +   bugfixed by: Onno Marsman
    // +    revised by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +    bugfixed by: Brett Zamir (http://brett-zamir.me)
    // +      input by: Ratheous
    // +   improved by: Rafal Kukawski (http://blog.kukawski.pl)
    // +   improved by: Dj (http://phpjs.org/functions/htmlentities:425#comment_134018)
    // -    depends on: get_html_translation_table
    // *     example 1: htmlentities('Kevin & van Zonneveld');
    // *     returns 1: 'Kevin &amp; van Zonneveld'
    // *     example 2: htmlentities("foo'bar","ENT_QUOTES");
    // *     returns 2: 'foo&#039;bar'
    var hash_map = get_html_translation_table('HTML_ENTITIES', quote_style),
        symbol = '';
    string = string == null ? '' : string + '';

    if (!hash_map) {
        return false;
    }
    
    if (quote_style && quote_style === 'ENT_QUOTES') {
        hash_map["'"] = '&#039;';
    }
    
    if (!!double_encode || double_encode == null) {
        for (symbol in hash_map) {
            if (hash_map.hasOwnProperty(symbol)) {
                string = string.split(symbol).join(hash_map[symbol]);
            }
        }
    } else {
        string = string.replace(/([\s\S]*?)(&(?:#\d+|#x[\da-f]+|[a-zA-Z][\da-z]*);|$)/g, function (ignore, text, entity) {
            for (symbol in hash_map) {
                if (hash_map.hasOwnProperty(symbol)) {
                    text = text.split(symbol).join(hash_map[symbol]);
                }
            }
            
            return text + entity;
        });
    }

    return string;
}

function importGSSSecret(json) {
	var csvRows = [];
	var j=0;
	var npcsv=0;
    for (i = 0; i < json.feed.entry.length; i++) {
        entry = json.feed.entry[i];
		$('#tb1').append('<tr>');
        $('#tb1 tr:last').append('<td>' + entry.gsx$nomprenom.$t + '</td>');
		$('#tb1:last').append('</tr>');
		csvRows.push(encodeURIComponent(htmlentities(json.feed.entry[i].gsx$nomprenom.$t)));
		j++;
}

function importGSSReel(json) {
	var csvRows = [];
	var j=0;
	var npcsv=0;
    for (i = 0; i < json.feed.entry.length; i++) {
        entry = json.feed.entry[i];
		$('#tb2').append('<tr>');
        $('#tb2 tr:last').append('<td>' + entry.gsx$nomprenomcopietrie.$t + '</td>');
        $('#tb2 tr:last').append('<td>' + entry.gsx$identité_2.$t + '</td>');
        $('#tb2 tr:last').append('<td>' + entry.gsx$sexe_2.$t + '</td>');
		$('#tb2 tr:last').append('<td>' + entry.gsx$section_2.$t + '</td>');
		$('#tb2:last').append('</tr>');
		csvRows.push(json.feed.entry[i].gsx$nomprenomcopietrie.$t+","+json.feed.entry[i].gsx$identité_2.$t+","+json.feed.entry[i].gsx$sexe_2.$t+","+json.feed.entry[i].gsx$section_2.$t);
	}
}
//]]>  

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
		<td><table cellpadding="0" cellspacing="0" width="98%"><tbody>
		  <tr valign="top"><td><div id="InputTitPage"><img src="/images/icon_ins_immo_36x36.gif" alt="" border="0" height="36" width="36">Ajout d'annonce immobilière</div></td></tr>
		  <tr valign="top"><td><table cellpadding="0" cellspacing="0" align="center" border="0" width="100%"><tbody><tr><td align="center" height="165"><form method="post" name="FormInsertionAnnonce" action="wInsererAnnonce.php?TypeAnnonce=<?php echo substr($_GET["TypeAnnonce"],1);?>&user=<?php echo $id;?>" enctype="multipart/form-data"><table style="color=#0b2d62;font-size:11pt;font-family:tahoma" id="Table2" cellpadding="0" cellspacing="3" height="500" width="100%"><tbody>
			<?php include($_GET["TypeAnnonce"]);?>
		<tr><td height="20"></td></tr>
		<tr><td>	
    <table class="if_cadre" cellpadding="0" cellspacing="3" align="center" border="0" width="100%">
    <tbody><tr>
    <td>	
	    
	    <table cellpadding="0" cellspacing="0" align="center" border="0" width="100%">
	    <tbody><tr class="if_entete"><td colspan="6">Détails de l'annonce</td></tr>
	    <tr><td height="10"></td></tr>
	    <tr>
		    <td class="if_label_field" id="id_lab_titre">Titre </td>
		    <td><input id="Titre" name="Titre" size="60" type="text"></td>
	    </tr>
		<tr>
		    <td></td>
		    <td><span class="if_label_field_note">Ne pas mentionner « Vente », « Vendre », « Location », ... dans le titre.</span></td>
		</tr>
	    <tr><td height="10"></td></tr>
	    <tr>
		    <td class="if_label_field" id="id_lab_text_ann" valign="top">
		        Texte<br>
		        <span class="if_label_field_info">(1200 car. max)</span><br>
            </td>
		    <td><textarea rows="4" id="Texte" name="Texte" cols="70"></textarea></td>
	    </tr>
	    <tr><td height="10"></td></tr>
	    <tr>
		    <td class="if_label_field" id="id_lib_validite">Validité</td>
		    <td><select name="validite" id="validite"></select></td>
	    </tr>
	    <tr><td height="10"></td></tr>
	    </tbody></table>
	</td>
	</tr>
	</tbody></table>
</td>	
</tr>
<tr><td height="20"></td></tr>
<tr>
<td>	
    <table class="if_cadre" cellpadding="0" cellspacing="3" align="center" border="0" width="100%">
    <tbody><tr>
    <td>	
	    <table cellpadding="0" cellspacing="0" align="center" border="0" width="100%">
	    <tbody><tr class="if_entete"><td colspan="6">La Photo</td></tr>
	    <tr><td height="5"></td></tr>
	    <tr>
		    <td colspan="2">
			    <table cellpadding="0" cellspacing="0" align="left" width="100%">
				<tbody><tr>
				    <td colspan="10">
					<input type="file" name="image" size="30"/>
				    </td>
				</tr>
	            <tr><td height="5"></td></tr>
			    <tr valign="middle">
				    
					<td></td>
				</tr>
			    </tbody></table>		    
		    </td>
	    </tr>
	    <tr><td height="10"></td></tr>
	    </tbody></table>
	</td>
	</tr>
	</tbody></table>
</td>	
</tr>
<tr>
    <td class="if_note_blue">
    <u>Important</u> : Une annonce avec photos <u>réelles</u> est <b>7 fois</b> plus consultée.
    </td>
</tr>
<tr><td height="20"></td></tr>

<tr>
    <td class="if_note">
    <u>Attention</u> : n'inserer pas votre annonce en double cela entrainera le refus de toutes vos annonces.
    </td>
</tr>
<tr>
    <td align="right">
        <div id="idBtnValider">
        <ul>
            <li class="valider"><input type="submit" name="valider" value="Valider"></li>
        </ul>
        </div>
    </td>
</tr>
</tbody></table>

</form>

			</td>
		</tr>
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
<script src="/jason.php?callback=importGSSSecret"></script>
</body>
</html>