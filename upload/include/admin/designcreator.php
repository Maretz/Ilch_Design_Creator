<?php 
#   Ilch Design Creator


defined ('main') or die ( 'no direct access' );
defined ('admin') or die ( 'only admin access' );

$design = new design ( 'Admins Area', 'Admins Area', 2 );
$design->header();

		$tpl = new tpl ( 'designcreator', 1);
		if(!isset($_POST['Submit_Designcreator'])) {
			$sql = db_query("SELECT * FROM prefix_designcreator") or die ('<span style="color:#ff0000">Das Modul Design Creator wurde nicht gefunden.<br>Bitte die Installation laut Anleitung umsetzen!</span>');

			$IN_DC = db_fetch_assoc($sql);
      $tpl->set('Message',"");

			$tpl->set('BreiteDesign' ,$IN_DC['breitedesign']);
			$tpl->set('BreiteDesignHeader' ,$IN_DC['breitedesign'] - 4);
			$tpl->set('FarbeHTML' ,$IN_DC['farbehtml']);
			$tpl->set('SizeHTML' ,$IN_DC['sizehtml']);
			if(ucwords($IN_DC['fonthtml']) == "Verdana, Arial, Helvetica, Times, Georgia, Comic Sans MS") {
				$tpl->set('Selectedverdana' ,"selected");
				$tpl->set('Selectedcomic' ,"");
				$tpl->set('Selectedtimes' ,"");
				$tpl->set('Selectedhelvetica' ,"");
				$tpl->set('Selectedgeorgia' ,"");
			} else if(ucwords($IN_DC['fonthtml']) == "Arial, Verdana, Helvetica, Times, Georgia, Comic Sans MS") {
				$tpl->set('Selectedverdana' ,"");
				$tpl->set('Selectedarial' ,"selected");
				$tpl->set('Selectedcomic' ,"");
				$tpl->set('Selectedtimes' ,"");
				$tpl->set('Selectedhelvetica' ,"");
				$tpl->set('Selectedgeorgia' ,"");
			} else if(ucwords($IN_DC['fonthtml']) == "Comic Sans MS, Verdana, Arial, Helvetica, Times, Georgia") {
				$tpl->set('Selectedverdana' ,"");
				$tpl->set('Selectedarial' ,"");
				$tpl->set('Selectedcomic' ,"selected");
				$tpl->set('Selectedtimes' ,"");
				$tpl->set('Selectedhelvetica' ,"");
				$tpl->set('Selectedgeorgia' ,"");
			}  else if(ucwords($IN_DC['fonthtml']) == "Times, Helvetica, Georgia, Comic Sans MS, Verdana, Arial") {
				$tpl->set('Selectedverdana' ,"");
				$tpl->set('Selectedarial' ,"");
				$tpl->set('Selectedcomic' ,"");
				$tpl->set('Selectedtimes' ,"selected");
				$tpl->set('Selectedhelvetica' ,"");
				$tpl->set('Selectedgeorgia' ,"");
			}  else if(ucwords($IN_DC['fonthtml']) == "Helvetica, Times, Georgia, Comic Sans MS, Verdana, Arial") {
				$tpl->set('Selectedverdana' ,"");
				$tpl->set('Selectedarial' ,"");
				$tpl->set('Selectedcomic' ,"");
				$tpl->set('Selectedtimes' ,"");
				$tpl->set('Selectedhelvetica' ,"selected");
				$tpl->set('Selectedgeorgia' ,"");
			}  else  if(ucwords($IN_DC['fonthtml']) == "Georgia, Times, Helvetica, Comic Sans MS, Verdana, Arial") {
				$tpl->set('Selectedverdana' ,"");
				$tpl->set('Selectedarial' ,"");
				$tpl->set('Selectedcomic' ,"");
				$tpl->set('Selectedtimes' ,"");
				$tpl->set('Selectedhelvetica' ,"");
				$tpl->set('Selectedgeorgia' ,"selected");
			}
			$tpl->set('FontHTML' ,$IN_DC['fonthtml']);
			$tpl->set('aHTML' ,$IN_DC['ahtml']);
			$tpl->set('aHoverHTML' ,$IN_DC['ahoverhtml']);
			$tpl->set('FarbeBODY' ,$IN_DC['farbebody']);
			$tpl->set('IMGBODY' ,$IN_DC['imagebody']);
			$tpl->set('RahmenVon' ,$IN_DC['frv']);
			$tpl->set('RahmenBis' ,$IN_DC['frb']);
			if(strtolower($IN_DC['fropacity']) == "0") {
				$tpl->set('Selectedop0' ,"selected");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($IN_DC['fropacity']) == "10") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"selected");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($IN_DC['fropacity']) == "20") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"selected");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($IN_DC['fropacity']) == "30") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"selected");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($IN_DC['fropacity']) == "40") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"selected");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($IN_DC['fropacity']) == "50") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"selected");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($IN_DC['fropacity']) == "60") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"selected");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($IN_DC['fropacity']) == "70") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"selected");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($IN_DC['fropacity']) == "80") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"selected");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($IN_DC['fropacity']) == "90") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"selected");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($IN_DC['fropacity']) == "99") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"selected");
			}
			$tpl->set('DC_Opacity' ,$IN_DC['fropacity']);
			$tpl->set('R_Color' ,$IN_DC['frbordercolor']);
			$tpl->set('R_Radius' ,$IN_DC['frborderradius']);
			if(strtolower($IN_DC['rschatten']) == "0px -2px 10px 2px") {
				$tpl->set('Selectedrschatten_on' ,"checked");
				$tpl->set('Selectedrschatten_off' ,"");
			} else if(strtolower($IN_DC['rschatten']) == "0px 0px 0px 0px") {
				$tpl->set('Selectedrschatten_on' ,"");
				$tpl->set('Selectedrschatten_off' ,"checked");
			}
      $tpl->set('R_Schatten' ,$IN_DC['rschatten']);
      $tpl->set('R_SchattenC' ,$IN_DC['rschattenc']);
      $tpl->set('MenuBreite' ,$IN_DC['menubreite']);
      $tpl->set('MenuBreite2' ,$IN_DC['menubreite2']);
			if(strtolower($IN_DC['header']) == "header") {
				$tpl->set('Selectedheader_on' ,"checked");
				$tpl->set('Selectedheader_off' ,"");
			} else if(strtolower($IN_DC['header']) == "null") {
				$tpl->set('Selectedheader_on' ,"");
				$tpl->set('Selectedheader_off' ,"checked");
			}
      $tpl->set('Header' ,$IN_DC['header']);
      $tpl->set('IMGHeader' ,$IN_DC['imageheader']);
      $tpl->set('HeaderHigh' ,$IN_DC['headerhight']);
			if(strtolower($IN_DC['seitenname']) == "block") {
				$tpl->set('Selectedname_on' ,"checked");
				$tpl->set('Selectedname_off' ,"");
			} else if(strtolower($IN_DC['seitenname']) == "none") {
				$tpl->set('Selectedname_on' ,"");
				$tpl->set('Selectedname_off' ,"checked");
			}
      $tpl->set('SeitenName' ,$IN_DC['seitenname']);
      $tpl->set('SeitenNameC' ,$IN_DC['seitennamecolor']);
      $tpl->set('SeitenNameS' ,$IN_DC['seitennamesize']);
			if(strtolower($IN_DC['seitennamepos']) == "left") {
				$tpl->set('Selectednameleft' ,"selected");
				$tpl->set('Selectednamecenter' ,"");
				$tpl->set('Selectednameright' ,"");
			} else if(strtolower($IN_DC['seitennamepos']) == "center") {
				$tpl->set('Selectednameleft' ,"");
				$tpl->set('Selectednamecenter' ,"selected");
				$tpl->set('Selectednameright' ,"");
			} else if(strtolower($IN_DC['seitennamepos']) == "right") {
				$tpl->set('Selectednameleft' ,"");
				$tpl->set('Selectednamecenter' ,"");
				$tpl->set('Selectednameright' ,"selected");
			}
      $tpl->set('SeitenNameP' ,$IN_DC['seitennamepos']);
      $tpl->set('BoxColorV' ,$IN_DC['boxencolorvon']);
      $tpl->set('BoxColorZ' ,$IN_DC['boxencolorzu']);
      $tpl->set('MenuTopColor' ,$IN_DC['menuobencolor']);
      $tpl->set('MenuTopSize' ,$IN_DC['menuobensize']);
      $tpl->set('MenuTopColorFont' ,$IN_DC['menuobencolorfont']);
      $tpl->set('BoxBorder' ,$IN_DC['boxenborder']);
      $tpl->set('BoxRadius' ,$IN_DC['boxenradius']);
      $tpl->set('BGContent' ,$IN_DC['contentbackground']);
			if(strtolower($IN_DC['navionoff']) == "inline") {
				$tpl->set('Selectednavi_on' ,"checked");
				$tpl->set('Selectednavi_off' ,"");
			} else if(strtolower($IN_DC['navionoff']) == "none") {
				$tpl->set('Selectednavi_on' ,"");
				$tpl->set('Selectednavi_off' ,"checked");
			}
      $tpl->set('Navi' ,$IN_DC['navionoff']);
			if(strtolower($IN_DC['boxschatten']) == "0px -7px 7px -2px") {
				$tpl->set('Selectedboxshadow_on' ,"checked");
				$tpl->set('Selectedboxshadow_off' ,"");
			} else if(strtolower($IN_DC['boxschatten']) == "0px 0px 0px 0px") {
				$tpl->set('Selectedboxshadow_on' ,"");
				$tpl->set('Selectedboxshadow_off' ,"checked");
			}
      $tpl->set('BoxSchatten' ,$IN_DC['boxschatten']);
      $tpl->set('BoxSchattenC' ,$IN_DC['boxschattencolor']);
      $tpl->set('DDvon' ,$IN_DC['dropdownvon']);
      $tpl->set('DDzu' ,$IN_DC['dropdownzu']);
      $tpl->set('DDBorder' ,$IN_DC['dropdownborder']);
      $tpl->set('DDName' ,$IN_DC['dropdownname']);
      $tpl->set('DDNameA' ,$IN_DC['dropdownnamea']);
      $tpl->set('DDNameSize' ,$IN_DC['dropdownnamesize']);
      $tpl->set('DDLink' ,$IN_DC['dropdownlink']);
      $tpl->set('DDLinkA' ,$IN_DC['dropdownlinka']);
			if(strtolower($IN_DC['infopanel']) == "inline") {
				$tpl->set('Selectedinfo_on' ,"checked");
				$tpl->set('Selectedinfo_off' ,"");
			} else if(strtolower($IN_DC['infopanel']) == "none") {
				$tpl->set('Selectedinfo_on' ,"");
				$tpl->set('Selectedinfo_off' ,"checked");
			}
      $tpl->set('InfoP' ,$IN_DC['infopanel']);
			if(strtolower($IN_DC['hmenuon']) == "inline") {
				$tpl->set('SelectedHmenu_on' ,"checked");
				$tpl->set('SelectedHmenu_off' ,"");
			} else if(strtolower($IN_DC['hmenuon']) == "none") {
				$tpl->set('SelectedHmenu_on' ,"");
				$tpl->set('SelectedHmenu_off' ,"checked");
			}
      $tpl->set('HMENUE' ,$IN_DC['hmenuon']);
      $tpl->set('VButA' ,$IN_DC['vertibutcolora']);
      $tpl->set('VButAH' ,$IN_DC['vertibutcolorah']);
      $tpl->set('VButB' ,$IN_DC['vertibutcolorb']);
      $tpl->set('VButBH' ,$IN_DC['vertibutcolorbh']);
      $tpl->set('VButBorder' ,$IN_DC['vertibutborder']);
      $tpl->set('VButBorderA' ,$IN_DC['vertibutbordera']);
      $tpl->set('VButBorderR' ,$IN_DC['vertibutborderradius']);
      $tpl->set('VButFont' ,$IN_DC['vertibutfont']);
      $tpl->set('VButFontA' ,$IN_DC['vertibutfonta']);
      $tpl->set('TB' ,$IN_DC['tableborder']);
      $tpl->set('TBK' ,$IN_DC['tablekopf']);
      $tpl->set('TBKa' ,$IN_DC['tablekopfa']);
      $tpl->set('TBKFont' ,$IN_DC['tablekopfcolor']);
      $tpl->set('TBKI' ,$IN_DC['tablekopfin']);
      $tpl->set('TBKIa' ,$IN_DC['tablekopfina']);
      $tpl->set('TBKIFont' ,$IN_DC['tablekopfincolor']);
      $tpl->set('TBin' ,$IN_DC['tablein']);
      $tpl->set('TBina' ,$IN_DC['tableina']);
      $tpl->set('TBinColor' ,$IN_DC['tableincolor']);
      $tpl->set('TBinaColor' ,$IN_DC['tableinacolor']);
      $tpl->set('TXC' ,$IN_DC['textareacolor']);
      $tpl->set('TXCF' ,$IN_DC['textareacolorfont']);
      $tpl->set('TXB' ,$IN_DC['textareaborder']);
      $tpl->set('TXBA' ,$IN_DC['textareabordera']);
      $tpl->set('BC' ,$IN_DC['buttoncolor']);
      $tpl->set('BCF' ,$IN_DC['buttoncolorfont']);
      $tpl->set('BB' ,$IN_DC['buttonborder']);
      $tpl->set('BBA' ,$IN_DC['buttonbordera']);
      $tpl->set('ZZ' ,$IN_DC['zeichenzahl']);
      $tpl->set('Hinf' ,$IN_DC['heightinf']);

}
 else {
			db_query("UPDATE
							prefix_designcreator
						SET
							breitedesign = '".$_POST['BreiteDesign']."',
							farbehtml = '".$_POST['FarbeHTML']."',
							sizehtml = '".$_POST['SizeHTML']."',
							fonthtml = '".$_POST['FontHTML']."',
							ahtml = '".$_POST['aHTML']."',
							ahoverhtml = '".$_POST['aHoverHTML']."',
              farbebody = '".$_POST['FarbeBODY']."',
							imagebody = '".$_POST['IMGBODY']."',
							frv = '".$_POST['RahmenVon']."',
              frb = '".$_POST['RahmenBis']."',
              fropacity = '".$_POST['DC_Opacity']."',
              frbordercolor = '".$_POST['R_Color']."',
              frborderradius = '".$_POST['R_Radius']."',
              rschatten = '".$_POST['R_Schatten']."',
              rschattenc = '".$_POST['R_SchattenC']."',
              menubreite = '".$_POST['MenuBreite']."',
              menubreite2 = '".$_POST['MenuBreite2']."',
              header = '".$_POST['Header']."',
              imageheader = '".$_POST['IMGHeader']."',
              headerhight = '".$_POST['HeaderHigh']."',
              seitenname = '".$_POST['SeitenName']."',
              seitennamecolor = '".$_POST['SeitenNameC']."',
              seitennamesize = '".$_POST['SeitenNameS']."',
              seitennamepos = '".$_POST['SeitenNameP']."',
              boxencolorvon = '".$_POST['BoxColorV']."',
              boxencolorzu = '".$_POST['BoxColorZ']."',
              menuobencolor = '".$_POST['MenuTopColor']."',
              menuobensize = '".$_POST['MenuTopSize']."',
              menuobencolorfont = '".$_POST['MenuTopColorFont']."',
              boxenborder = '".$_POST['BoxBorder']."',
              boxenradius = '".$_POST['BoxRadius']."',
              contentbackground = '".$_POST['BGContent']."',
              navionoff = '".$_POST['Navi']."',
              boxschatten = '".$_POST['BoxSchatten']."',
              boxschattencolor = '".$_POST['BoxSchattenC']."',
              dropdownvon = '".$_POST['DDvon']."',
              dropdownzu = '".$_POST['DDzu']."',
              dropdownborder = '".$_POST['DDBorder']."',
              dropdownname = '".$_POST['DDName']."',
              dropdownnamea = '".$_POST['DDNameA']."',
              dropdownnamesize = '".$_POST['DDNameSize']."',
              dropdownlink = '".$_POST['DDLink']."',
              dropdownlinka = '".$_POST['DDLinkA']."',
              infopanel = '".$_POST['InfoP']."',
              hmenuon = '".$_POST['HMENUE']."',
              vertibutcolora = '".$_POST['VButA']."',
              vertibutcolorah = '".$_POST['VButAH']."',
              vertibutcolorb = '".$_POST['VButB']."',
              vertibutcolorbh = '".$_POST['VButBH']."',
              vertibutborder = '".$_POST['VButBorder']."',
              vertibutbordera = '".$_POST['VButBorderA']."',
              vertibutborderradius = '".$_POST['VButBorderR']."',
              vertibutfont = '".$_POST['VButFont']."',
              vertibutfonta = '".$_POST['VButFontA']."',
              tableborder = '".$_POST['TB']."',
              tablekopf = '".$_POST['TBK']."',
              tablekopfa = '".$_POST['TBKa']."',
              tablekopfcolor = '".$_POST['TBKFont']."',
              tablekopfin = '".$_POST['TBKI']."',
              tablekopfina = '".$_POST['TBKIa']."',
              tablekopfincolor = '".$_POST['TBKIFont']."',
              tablein = '".$_POST['TBin']."',
              tableina = '".$_POST['TBina']."',
              tableincolor = '".$_POST['TBinColor']."',
              tableinacolor = '".$_POST['TBinaColor']."',             
              textareacolor = '".$_POST['TXC']."',
              textareacolorfont = '".$_POST['TXCF']."',
              textareaborder = '".$_POST['TXB']."',
              textareabordera = '".$_POST['TXBA']."',
              buttoncolor = '".$_POST['BC']."',
              buttoncolorfont = '".$_POST['BCF']."',
              buttonborder = '".$_POST['BB']."',
              buttonbordera = '".$_POST['BBA']."',
              zeichenzahl = '".$_POST['ZZ']."',
              heightinf = '".$_POST['Hinf']."'");




			$tpl->set('Message','<div style="width:380px;position:absolute;left:50%;top:31px;margin-left:-190px;display:block;padding:10px;background:#34AF00;padding:5px;color:#000;font-size:12px;font-weight: bold;text-align:center;border:1px solid #000">Die Designangaben wurden geändert!</div>');


			$tpl->set('BreiteDesign' ,$_POST['BreiteDesign']);
			$tpl->set('BreiteDesignHeader' ,$_POST['BreiteDesign'] - 4);
			$tpl->set('FarbeHTML' ,$_POST['FarbeHTML']);
			$tpl->set('SizeHTML' ,$_POST['SizeHTML']);
			if(ucwords($_POST['FontHTML']) == "Verdana, Arial, Helvetica, Times, Georgia, Comic Sans MS") {
				$tpl->set('Selectedverdana' ,"selected");
				$tpl->set('Selectedcomic' ,"");
				$tpl->set('Selectedtimes' ,"");
				$tpl->set('Selectedhelvetica' ,"");
				$tpl->set('Selectedgeorgia' ,"");
			} else if(ucwords($_POST['FontHTML']) == "Arial, Verdana, Helvetica, Times, Georgia, Comic Sans MS") {
				$tpl->set('Selectedverdana' ,"");
				$tpl->set('Selectedarial' ,"selected");
				$tpl->set('Selectedcomic' ,"");
				$tpl->set('Selectedtimes' ,"");
				$tpl->set('Selectedhelvetica' ,"");
				$tpl->set('Selectedgeorgia' ,"");
			} else if(ucwords($_POST['FontHTML']) == "Comic Sans MS, Verdana, Arial, Helvetica, Times, Georgia") {
				$tpl->set('Selectedverdana' ,"");
				$tpl->set('Selectedarial' ,"");
				$tpl->set('Selectedcomic' ,"selected");
				$tpl->set('Selectedtimes' ,"");
				$tpl->set('Selectedhelvetica' ,"");
				$tpl->set('Selectedgeorgia' ,"");
			}  else if(ucwords($_POST['FontHTML']) == "Times, Helvetica, Georgia, Comic Sans MS, Verdana, Arial") {
				$tpl->set('Selectedverdana' ,"");
				$tpl->set('Selectedarial' ,"");
				$tpl->set('Selectedcomic' ,"");
				$tpl->set('Selectedtimes' ,"selected");
				$tpl->set('Selectedhelvetica' ,"");
				$tpl->set('Selectedgeorgia' ,"");
			}  else if(ucwords($_POST['FontHTML']) == "Helvetica, Times, Georgia, Comic Sans MS, Verdana, Arial") {
				$tpl->set('Selectedverdana' ,"");
				$tpl->set('Selectedarial' ,"");
				$tpl->set('Selectedcomic' ,"");
				$tpl->set('Selectedtimes' ,"");
				$tpl->set('Selectedhelvetica' ,"selected");
				$tpl->set('Selectedgeorgia' ,"");
			}  else if(ucwords($IN_DC['FontHTML']) == "Georgia, Times, Helvetica, Comic Sans MS, Verdana, Arial") {
				$tpl->set('Selectedverdana' ,"");
				$tpl->set('Selectedarial' ,"");
				$tpl->set('Selectedcomic' ,"");
				$tpl->set('Selectedtimes' ,"");
				$tpl->set('Selectedhelvetica' ,"");
				$tpl->set('Selectedgeorgia' ,"selected");
			}
			$tpl->set('FontHTML' ,$_POST['FontHTML']);
			$tpl->set('aHTML' ,$_POST['aHTML']);
			$tpl->set('aHoverHTML' ,$_POST['aHoverHTML']);
			$tpl->set('FarbeBODY' ,$_POST['FarbeBODY']);
			$tpl->set('IMGBODY' ,$_POST['IMGBODY']);
			$tpl->set('RahmenVon' ,$_POST['RahmenVon']);
			$tpl->set('RahmenBis' ,$_POST['RahmenBis']);

			if(strtolower($_POST['DC_Opacity']) == "0") {
				$tpl->set('Selectedop0' ,"selected");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($_POST['DC_Opacity']) == "10") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"selected");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($_POST['DC_Opacity']) == "20") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"selected");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($_POST['DC_Opacity']) == "30") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"selected");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($_POST['DC_Opacity']) == "40") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"selected");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($_POST['DC_Opacity']) == "50") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"selected");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($_POST['DC_Opacity']) == "60") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"selected");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($_POST['DC_Opacity']) == "70") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"selected");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($_POST['DC_Opacity']) == "80") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"selected");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($_POST['DC_Opacity']) == "90") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"selected");
				$tpl->set('Selectedop100' ,"");
			} else if(strtolower($_POST['DC_Opacity']) == "99") {
				$tpl->set('Selectedop0' ,"");
				$tpl->set('Selectedop10' ,"");
				$tpl->set('Selectedop20' ,"");
				$tpl->set('Selectedop30' ,"");
				$tpl->set('Selectedop40' ,"");
				$tpl->set('Selectedop50' ,"");
				$tpl->set('Selectedop60' ,"");
				$tpl->set('Selectedop70' ,"");
				$tpl->set('Selectedop80' ,"");
				$tpl->set('Selectedop90' ,"");
				$tpl->set('Selectedop100' ,"selected");
			}
			$tpl->set('DC_Opacity' ,$_POST['DC_Opacity']);
			$tpl->set('R_Color' ,$_POST['R_Color']);
			$tpl->set('R_Radius' ,$_POST['R_Radius']);
			if(strtolower($_POST['R_Schatten']) == "0px -2px 10px 2px") {
				$tpl->set('Selectedrschatten_on' ,"checked");
				$tpl->set('Selectedrschatten_off' ,"");
			} else if(strtolower($_POST['R_Schatten']) == "0px 0px 0px 0px") {
				$tpl->set('Selectedrschatten_on' ,"");
				$tpl->set('Selectedrschatten_off' ,"checked");
			}
			$tpl->set('R_Schatten' ,$_POST['R_Schatten']);
			$tpl->set('R_SchattenC' ,$_POST['R_SchattenC']);
			$tpl->set('MenuBreite' ,$_POST['MenuBreite']);
			$tpl->set('MenuBreite2' ,$_POST['MenuBreite2']);
			if(strtolower($_POST['Header']) == "header") {
				$tpl->set('Selectedheader_on' ,"checked");
				$tpl->set('Selectedheader_off' ,"");
			} else if(strtolower($_POST['Header']) == "null") {
				$tpl->set('Selectedheader_on' ,"");
				$tpl->set('Selectedheader_off' ,"checked");
			}
			$tpl->set('Header' ,$_POST['Header']);
			$tpl->set('IMGHeader' ,$_POST['IMGHeader']);
			$tpl->set('HeaderHigh' ,$_POST['HeaderHigh']);
			if(strtolower($_POST['SeitenName']) == "block") {
				$tpl->set('Selectedname_on' ,"checked");
				$tpl->set('Selectedname_off' ,"");
			} else if(strtolower($_POST['SeitenName']) == "none") {
				$tpl->set('Selectedname_on' ,"");
				$tpl->set('Selectedname_off' ,"checked");
			}
			$tpl->set('SeitenName' ,$_POST['SeitenName']);
			$tpl->set('SeitenNameC' ,$_POST['SeitenNameC']);
			$tpl->set('SeitenNameS' ,$_POST['SeitenNameS']);
			if(strtolower($_POST['SeitenNameP']) == "left") {
				$tpl->set('Selectednameleft' ,"selected");
				$tpl->set('Selectednamecenter' ,"");
				$tpl->set('Selectednameright' ,"");
			} else if(strtolower($_POST['SeitenNameP']) == "center") {
				$tpl->set('Selectednameleft' ,"");
				$tpl->set('Selectednamecenter' ,"selected");
				$tpl->set('Selectednameright' ,"");
			} else if(strtolower($_POST['SeitenNameP']) == "right") {
				$tpl->set('Selectednameleft' ,"");
				$tpl->set('Selectednamecenter' ,"");
				$tpl->set('Selectednameright' ,"selected");
			}
			$tpl->set('SeitenNameP' ,$_POST['SeitenNameP']);
			$tpl->set('BoxColorV' ,$_POST['BoxColorV']);
			$tpl->set('BoxColorZ' ,$_POST['BoxColorZ']);
			$tpl->set('MenuTopColor' ,$_POST['MenuTopColor']);
			$tpl->set('MenuTopSize' ,$_POST['MenuTopSize']);
			$tpl->set('MenuTopColorFont' ,$_POST['MenuTopColorFont']);
			$tpl->set('BoxBorder' ,$_POST['BoxBorder']);
			$tpl->set('BoxRadius' ,$_POST['BoxRadius']);
			$tpl->set('BGContent' ,$_POST['BGContent']);
			if(strtolower($_POST['Navi']) == "inline") {
				$tpl->set('Selectednavi_on' ,"checked");
				$tpl->set('Selectednavi_off' ,"");
			} else if(strtolower($_POST['Navi']) == "none") {
				$tpl->set('Selectednavi_on' ,"");
				$tpl->set('Selectednavi_off' ,"checked");
			}
			$tpl->set('Navi' ,$_POST['Navi']);
			if(strtolower($_POST['BoxSchatten']) == "0px -7px 7px -2px") {
				$tpl->set('Selectedboxshadow_on' ,"checked");
				$tpl->set('Selectedboxshadow_off' ,"");
			} else if(strtolower($_POST['BoxSchatten']) == "0px 0px 0px 0px") {
				$tpl->set('Selectedboxshadow_on' ,"");
				$tpl->set('Selectedboxshadow_off' ,"checked");
			}
			$tpl->set('BoxSchatten' ,$_POST['BoxSchatten']);
			$tpl->set('BoxSchattenC' ,$_POST['BoxSchattenC']);
			$tpl->set('DDvon' ,$_POST['DDvon']);
			$tpl->set('DDzu' ,$_POST['DDzu']);
			$tpl->set('DDBorder' ,$_POST['DDBorder']);
			$tpl->set('DDName' ,$_POST['DDName']);
			$tpl->set('DDNameA' ,$_POST['DDNameA']);
			$tpl->set('DDNameSize' ,$_POST['DDNameSize']);
			$tpl->set('DDLink' ,$_POST['DDLink']);
			$tpl->set('DDLinkA' ,$_POST['DDLinkA']);
			if(strtolower($_POST['InfoP']) == "inline") {
				$tpl->set('Selectedinfo_on' ,"checked");
				$tpl->set('Selectedinfo_off' ,"");
			} else if(strtolower($_POST['InfoP']) == "none") {
				$tpl->set('Selectedinfo_on' ,"");
				$tpl->set('Selectedinfo_off' ,"checked");
			}
			$tpl->set('InfoP' ,$_POST['InfoP']);
			if(strtolower($_POST['HMENUE']) == "inline") {
				$tpl->set('SelectedHmenu_on' ,"checked");
				$tpl->set('SelectedHmenu_off' ,"");
			} else if(strtolower($_POST['HMENUE']) == "none") {
				$tpl->set('SelectedHmenu_on' ,"");
				$tpl->set('SelectedHmenu_off' ,"checked");
			}
			$tpl->set('HMENUE' ,$_POST['HMENUE']);
			$tpl->set('VButA' ,$_POST['VButA']);
			$tpl->set('VButAH' ,$_POST['VButAH']);
			$tpl->set('VButB' ,$_POST['VButB']);
			$tpl->set('VButBH' ,$_POST['VButBH']);
			$tpl->set('VButBorder' ,$_POST['VButBorder']);
			$tpl->set('VButBorderA' ,$_POST['VButBorderA']);
			$tpl->set('VButBorderR' ,$_POST['VButBorderR']);
			$tpl->set('VButFont' ,$_POST['VButFont']);
			$tpl->set('VButFontA' ,$_POST['VButFontA']);
			$tpl->set('TB' ,$_POST['TB']);
			$tpl->set('TBK' ,$_POST['TBK']);
			$tpl->set('TBKa' ,$_POST['TBKa']);
			$tpl->set('TBKFont' ,$_POST['TBKFont']);
			$tpl->set('TBKI' ,$_POST['TBKI']);
			$tpl->set('TBKIa' ,$_POST['TBKIa']);
			$tpl->set('TBKIFont' ,$_POST['TBKIFont']);
			$tpl->set('TBin' ,$_POST['TBin']);
			$tpl->set('TBina' ,$_POST['TBina']);
			$tpl->set('TBinColor' ,$_POST['TBinColor']);
			$tpl->set('TBinaColor' ,$_POST['TBinaColor']);
      $tpl->set('TXC' ,$_POST['TXC']);
      $tpl->set('TXCF' ,$_POST['TXCF']);
      $tpl->set('TXB' ,$_POST['TXB']);
      $tpl->set('TXBA' ,$_POST['TXBA']);
      $tpl->set('BC' ,$_POST['BC']);
      $tpl->set('BCF' ,$_POST['BCF']);
      $tpl->set('BB' ,$_POST['BB']);
      $tpl->set('BBA' ,$_POST['BBA']);
      $tpl->set('ZZ' ,$_POST['ZZ']);
      $tpl->set('Hinf' ,$_POST['Hinf']);

		}

		if(!isset($_POST['Submit_VorschauBG'])) {
			$sql = db_query("SELECT * FROM prefix_designcreator");

			$IN_DF = db_fetch_assoc($sql);
      $tpl->set('Messages',"");
      $tpl->set('VorschauBG' ,$IN_DF['bgvorschau']);
}
 else {
			db_query("UPDATE
							prefix_designcreator
						SET
bgvorschau = '".$_POST['VorschauBG']."'");
			$tpl->set('Messages','<div style="width:380px;position:absolute;left:50%;top:31px;margin-left:-190px;display:block;padding:10px;background:#34AF00;padding:5px;color:#000;font-size:12px;font-weight: bold;text-align:center;border:1px solid #000">Der Vorschau Background wurde geändert!</div>');

      $tpl->set('VorschauBG' ,$_POST['VorschauBG']);

		}

		$tpl->out(0);

$design->footer();
?>