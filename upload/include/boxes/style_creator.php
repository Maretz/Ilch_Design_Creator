<?php 
#   Design Creator by Maretz.eu

defined ('main') or die ( 'no direct access' );

$creator ="SELECT * FROM prefix_designcreator";
$creatorabf = db_query($creator) or die ('<span style="color:#ff0000">Das Modul Design Creator wurde nicht gefunden.<br>Bitte die Installation laut Anleitung umsetzen!</span>');
 while ($dc = db_fetch_object($creatorabf )) {  

$dc->breitebodysite = $dc->breitedesign - 4 ;
$dc->menubreitein = $dc->menubreite - 6 ;
$dc->menubreitein2 = $dc->menubreite2 - 6 ;
$dc->breitecontent = $dc->breitebodysite - $dc->menubreite - $dc->menubreite2 - 13 ;
$dc->breitecontentin = $dc->breitecontent - 10 ;
$dc->ddmenubreitefull = $dc->breitebodysite - 26 ;
$dc->ddmenuliv = $dc->ddmenubreitefull - 38 ;
$dc->ddmenuli = $dc->ddmenuliv / 6 ;
$dc->ddmenulia = $dc->ddmenuli - 2 ;
$dc->ddmenuliah = $dc->ddmenuli - 18 ;
$dc->headerlineheight = $dc->headerhight / 2 ;
$dc->h3hight = $dc->headerlineheight - 60 ;
$dc->h3linehight = $dc->headerhight - 60 ;
$dc->dropdownlinkhight = $dc->sizehtml + 8;
$dc->smalfontsize = $dc->sizehtml - 2;
$dc->tablekopfsize = $dc->sizehtml + 1;

?>

<style type="text/css">
div#site {width: <?php echo ''.$dc->breitedesign.''?>px}
#abst    {width: <?php echo ''.$dc->breitedesign.''?>px}
html     {font-size: <?php echo ''.$dc->sizehtml.''?>px;color:<?php echo ''.$dc->farbehtml.''?>;font-family: <?php echo ''.$dc->fonthtml.''?>}
html a   {color: <?php echo ''.$dc->ahtml.''?>;}
html a:hover {color: <?php echo ''.$dc->ahoverhtml.''?>;}
body {background-color: <?php echo ''.$dc->farbebody.''?>;background-image: url('<?php echo ''.$dc->imagebody.''?>') ;}
#body_site 
{
width: <?php echo ''.$dc->breitebodysite.''?>px;
-webkit-border-radius: <?php echo ''.$dc->frborderradius.''?>px;-moz-border-radius: <?php echo ''.$dc->frborderradius.''?>px;border-radius: <?php echo ''.$dc->frborderradius.''?>px;
border: solid <?php echo ''.$dc->frbordercolor.''?> 1px;
-webkit-box-shadow: <?php echo ''.$dc->rschatten.''?> <?php echo ''.$dc->rschattenc.''?>;-moz-box-shadow: <?php echo ''.$dc->rschatten.''?> <?php echo ''.$dc->rschattenc.''?>; box-shadow: <?php echo ''.$dc->rschatten.''?> <?php echo ''.$dc->rschattenc.''?>;
}
#body_site_trans
{
background-image: -ms-linear-gradient(top, <?php echo ''.$dc->frv.''?> 0%, <?php echo ''.$dc->frb.''?> 100%);
background-image: -moz-linear-gradient(top, <?php echo ''.$dc->frv.''?> 0%, <?php echo ''.$dc->frb.''?> 100%);
background-image: -o-linear-gradient(top, <?php echo ''.$dc->frv.''?> 0%, <?php echo ''.$dc->frb.''?> 100%);
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo ''.$dc->frv.''?>), color-stop(1, <?php echo ''.$dc->frb.''?>));
background-image: -webkit-linear-gradient(top, <?php echo ''.$dc->frv.''?> 0%, <?php echo ''.$dc->frb.''?> 100%);
background-image: linear-gradient(to bottom, <?php echo ''.$dc->frv.''?> 0%, <?php echo ''.$dc->frb.''?> 100%);
-khtml-opacity:.<?php echo ''.$dc->fropacity.''?>; 
-moz-opacity:.<?php echo ''.$dc->fropacity.''?>; 
-ms-filter:”alpha(opacity=<?php echo ''.$dc->fropacity.''?>)”;
filter:alpha(opacity=<?php echo ''.$dc->fropacity.''?>);
opacity:.<?php echo ''.$dc->fropacity.''?>; 
-webkit-border-radius: <?php echo ''.$dc->frborderradius.''?>px;-moz-border-radius: <?php echo ''.$dc->frborderradius.''?>px;border-radius: <?php echo ''.$dc->frborderradius.''?>px;
}
#bg_head,
#bg_content {width: <?php echo ''.$dc->breitebodysite.''?>px;}
.<?php echo ''.$dc->header.''?>  {background-image: url('<?php echo ''.$dc->imageheader.''?>') !important;background-repeat: repeat;}
#bg_head_left
{
border: solid <?php echo ''.$dc->boxenborder.''?> 1px;
-webkit-border-bottom-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
-webkit-border-bottom-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-bottomright: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-bottomleft: <?php echo ''.$dc->boxenradius.''?>px;
border-bottom-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
border-bottom-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
width: <?php echo ''.$dc->breitebodysite.''?>px;text-align:<?php echo ''.$dc->seitennamepos.''?>;
height: <?php echo ''.$dc->headerhight.''?>px;line-height:<?php echo ''.$dc->headerlineheight.''?>px;
-webkit-border-top-left-radius: <?php echo ''.$dc->frborderradius.''?>px;-moz-border-radius-topleft: <?php echo ''.$dc->frborderradius.''?>px;border-top-left-radius: <?php echo ''.$dc->frborderradius.''?>px;
-webkit-border-top-right-radius: <?php echo ''.$dc->frborderradius.''?>px;-moz-border-radius-topright: <?php echo ''.$dc->frborderradius.''?>px;border-top-right-radius: <?php echo ''.$dc->frborderradius.''?>px;
background-image: -ms-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -moz-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -o-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo ''.$dc->boxencolorvon.''?>), color-stop(1, <?php echo ''.$dc->boxencolorzu.''?>));
background-image: -webkit-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: linear-gradient(to bottom, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
-webkit-box-shadow:  <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
-moz-box-shadow:     <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
box-shadow:          <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
}
h3 {display:<?php echo ''.$dc->seitenname.''?>;height: <?php echo ''.$dc->h3hight.''?>px;line-height:<?php echo ''.$dc->h3linehight.''?>px;color: <?php echo ''.$dc->seitennamecolor.''?>;font-size: <?php echo ''.$dc->seitennamesize.''?>px;}
#navigation 
{
width: <?php echo ''.$dc->breitebodysite.''?>px;
border: solid <?php echo ''.$dc->boxenborder.''?> 1px;
-webkit-border-radius: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius: <?php echo ''.$dc->boxenradius.''?>px;
border-radius: <?php echo ''.$dc->boxenradius.''?>px;color:<?php echo ''.$dc->dropdownlink.''?>;
background-image: -ms-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -moz-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -o-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo ''.$dc->boxencolorvon.''?>), color-stop(1, <?php echo ''.$dc->boxencolorzu.''?>));
background-image: -webkit-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: linear-gradient(to bottom, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
-webkit-box-shadow:  <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
-moz-box-shadow:     <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
box-shadow:          <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
}
.navigation_null {display:<?php echo ''.$dc->navionoff.''?>;}
#infopan 
{
width: <?php echo ''.$dc->breitebodysite.''?>px;
border: solid <?php echo ''.$dc->boxenborder.''?> 1px;
-webkit-border-radius: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius: <?php echo ''.$dc->boxenradius.''?>px;
border-radius: <?php echo ''.$dc->boxenradius.''?>px;
background-image: -ms-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -moz-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -o-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo ''.$dc->boxencolorvon.''?>), color-stop(1, <?php echo ''.$dc->boxencolorzu.''?>));
background-image: -webkit-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: linear-gradient(to bottom, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
-webkit-box-shadow:  <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
-moz-box-shadow:     <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
box-shadow:          <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
}
#footer 
{
width: <?php echo ''.$dc->breitebodysite.''?>px;
border: solid <?php echo ''.$dc->boxenborder.''?> 1px;
-webkit-border-top-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
-webkit-border-top-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-topleft: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-topright: <?php echo ''.$dc->boxenradius.''?>px;
border-top-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
border-top-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
-webkit-border-bottom-right-radius: <?php echo ''.$dc->frborderradius.''?>px;-webkit-border-bottom-left-radius: <?php echo ''.$dc->frborderradius.''?>px;
-moz-border-radius-bottomright: <?php echo ''.$dc->frborderradius.''?>px;-moz-border-radius-bottomleft: <?php echo ''.$dc->frborderradius.''?>px;border-bottom-right-radius: <?php echo ''.$dc->frborderradius.''?>px;border-bottom-left-radius: <?php echo ''.$dc->frborderradius.''?>px;
background-image: -ms-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -moz-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -o-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo ''.$dc->boxencolorvon.''?>), color-stop(1, <?php echo ''.$dc->boxencolorzu.''?>));
background-image: -webkit-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: linear-gradient(to bottom, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
-webkit-box-shadow:  <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
-moz-box-shadow:     <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
box-shadow:          <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
}
#inf_panel
{
height: <?php echo ''.$dc->heightinf.''?>px;
border: solid <?php echo ''.$dc->boxenborder.''?> 1px;
-webkit-border-radius: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius: <?php echo ''.$dc->boxenradius.''?>px;
border-radius: <?php echo ''.$dc->boxenradius.''?>px;
background-image: -ms-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -moz-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -o-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo ''.$dc->boxencolorvon.''?>), color-stop(1, <?php echo ''.$dc->boxencolorzu.''?>));
background-image: -webkit-linear-gradient(top, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: linear-gradient(to bottom, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
-webkit-box-shadow:  <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
-moz-box-shadow:     <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
box-shadow:          <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
}
#linke_box  {width: <?php echo ''.$dc->menubreite.''?>px;}  
#menu_links_mitte 
{
width: <?php echo ''.$dc->menubreite.''?>px;
border: solid <?php echo ''.$dc->boxenborder.''?> 1px;
border-top:0px solid <?php echo ''.$dc->boxenborder.''?>;
-webkit-border-bottom-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
-webkit-border-bottom-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-bottomright: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-bottomleft: <?php echo ''.$dc->boxenradius.''?>px;
border-bottom-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
border-bottom-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
background-image: -ms-linear-gradient(top left, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -moz-linear-gradient(top left, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -o-linear-gradient(top left, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo ''.$dc->boxencolorvon.''?>), color-stop(1, <?php echo ''.$dc->boxencolorzu.''?>));
background-image: -webkit-linear-gradient(top left, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
background-image: linear-gradient(to left, <?php echo ''.$dc->boxencolorvon.''?> 0%, <?php echo ''.$dc->boxencolorzu.''?> 100%);
} 
#menu_links_oben
{
width: <?php echo ''.$dc->menubreite.''?>px;
color: <?php echo ''.$dc->menuobencolorfont.''?>;
font-size:<?php echo ''.$dc->menuobensize.''?>px;
background-color:<?php echo ''.$dc->menuobencolor.''?>;
border: solid <?php echo ''.$dc->boxenborder.''?> 1px;
border-bottom:0px groove <?php echo ''.$dc->boxenborder.''?>;
-webkit-border-top-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
-webkit-border-top-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-topleft: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-topright: <?php echo ''.$dc->boxenradius.''?>px;
border-top-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
border-top-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
-webkit-box-shadow:  <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
-moz-box-shadow:     <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
box-shadow:          <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
} 
#rechte_box  {width: <?php echo ''.$dc->menubreite2.''?>px;}
#menu_rechts_oben
{
width: <?php echo ''.$dc->menubreite2.''?>px;
color: <?php echo ''.$dc->menuobencolorfont.''?>;
font-size:<?php echo ''.$dc->menuobensize.''?>px;
background-color:<?php echo ''.$dc->menuobencolor.''?>;
border: solid <?php echo ''.$dc->boxenborder.''?> 1px;
border-bottom:0px groove <?php echo ''.$dc->boxenborder.''?>;
-webkit-border-top-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
-webkit-border-top-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-topleft: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-topright: <?php echo ''.$dc->boxenradius.''?>px;
border-top-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
border-top-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
-webkit-box-shadow:  <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
-moz-box-shadow:     <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
box-shadow:          <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
}

#menu_rechts_mitte  
{
width: <?php echo ''.$dc->menubreite2.''?>px;
border: solid <?php echo ''.$dc->boxenborder.''?> 1px;
border-top:0px solid <?php echo ''.$dc->boxenborder.''?>;
-webkit-border-bottom-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
-webkit-border-bottom-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-bottomright: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-bottomleft: <?php echo ''.$dc->boxenradius.''?>px;
border-bottom-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
border-bottom-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
background-image: -ms-linear-gradient(top left, <?php echo ''.$dc->boxencolorzuz.''?> 0%, <?php echo ''.$dc->boxencolorvon.''?> 100%);
background-image: -moz-linear-gradient(top left, <?php echo ''.$dc->boxencolorzu.''?> 0%, <?php echo ''.$dc->boxencolorvon.''?> 100%);
background-image: -o-linear-gradient(top left, <?php echo ''.$dc->boxencolorzu.''?> 0%, <?php echo ''.$dc->boxencolorvon.''?> 100%);
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo ''.$dc->boxencolorzu.''?>), color-stop(1, <?php echo ''.$dc->boxencolorvon.''?>));
background-image: -webkit-linear-gradient(top left, <?php echo ''.$dc->boxencolorzu.''?> 0%, <?php echo ''.$dc->boxencolorvon.''?> 100%);
background-image: linear-gradient(to left, <?php echo ''.$dc->boxencolorzu.''?> 0%, <?php echo ''.$dc->boxencolorvon.''?> 100%);
}
.box_in             {width: <?php echo ''.$dc->menubreitein.''?>px;max-width: <?php echo ''.$dc->menubreitein.''?>px;}
.box_in2            {width: <?php echo ''.$dc->menubreitein2.''?>px;max-width: <?php echo ''.$dc->menubreitein2.''?>px;}
#content_bereich    
{
width: <?php echo ''.$dc->breitecontent.''?>px;
border: solid <?php echo ''.$dc->boxenborder.''?> 1px;
-webkit-border-radius: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius: <?php echo ''.$dc->boxenradius.''?>px;
border-radius: <?php echo ''.$dc->boxenradius.''?>px;
background-color: <?php echo ''.$dc->contentbackground.''?>;
-webkit-box-shadow:  <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
-moz-box-shadow:     <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
box-shadow:          <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
}
.content_in         {width: <?php echo ''.$dc->breitecontentin.''?>px;max-width: <?php echo ''.$dc->breitecontentin.''?>px;}
#ddmenu li a {
color:<?php echo ''.$dc->dropdownname.''?>;
font-size:<?php echo ''.$dc->dropdownnamesize.''?>px;
}
#ddmenu li:hover > a {color:<?php echo ''.$dc->dropdownnamea.''?>}
#ddmenu li:hover > a.sub {color:<?php echo ''.$dc->dropdownnamea.''?>}
#ddmenu             {max-width: <?php echo ''.$dc->ddmenubreitefull.''?>px;}
#ddmenu li          {width: <?php echo ''.$dc->ddmenuli.''?>px;}
#ddmenu li:hover    
{
width: <?php echo ''.$dc->ddmenulia.''?>px;
-webkit-box-shadow:  <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
-moz-box-shadow:     <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
box-shadow:          <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
-webkit-border-top-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
-webkit-border-top-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-topleft: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-topright: <?php echo ''.$dc->boxenradius.''?>px;
border-top-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
border-top-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
background:<?php echo ''.$dc->dropdownvon.''?>;
border:1px solid <?php echo ''.$dc->dropdownborder.''?>;
border-bottom:0 solid <?php echo ''.$dc->dropdownborder.''?>;
}
#ddmenu :hover ul,
#ddmenu :hover ul li a  
{
width: <?php echo ''.$dc->ddmenuliah.''?>px;
color:<?php echo ''.$dc->dropdownlink.''?>;
font-size: <?php echo ''.$dc->sizehtml.''?>px;
height:<?php echo ''.$dc->dropdownlinkhight.''?>px;
line-height:<?php echo ''.$dc->dropdownlinkhight.''?>px;
}
#ddmenu :hover ul li
{
width: <?php echo ''.$dc->ddmenuliah.''?>px;
-webkit-border-bottom-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
-webkit-border-bottom-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-bottomright: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius-bottomleft: <?php echo ''.$dc->boxenradius.''?>px;
border-bottom-right-radius: <?php echo ''.$dc->boxenradius.''?>px;
border-bottom-left-radius: <?php echo ''.$dc->boxenradius.''?>px;
background-image:-ms-linear-gradient(top,<?php echo ''.$dc->dropdownvon.''?> 0%,<?php echo ''.$dc->dropdownzu.''?> 100%);
background-image:-moz-linear-gradient(top,<?php echo ''.$dc->dropdownvon.''?> 0%,<?php echo ''.$dc->dropdownzu.''?> 100%);
background-image:-o-linear-gradient(top,<?php echo ''.$dc->dropdownvon.''?> 0%,<?php echo ''.$dc->dropdownzu.''?> 100%);
background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,<?php echo ''.$dc->dropdownvon.''?>),color-stop(1,<?php echo ''.$dc->dropdownzu.''?>));
background-image:-webkit-linear-gradient(top,<?php echo ''.$dc->dropdownvon.''?> 0%,<?php echo ''.$dc->dropdownzu.''?> 100%);
background-image:linear-gradient(to bottom,<?php echo ''.$dc->dropdownvon.''?> 0%,<?php echo ''.$dc->dropdownzu.''?> 100%);
border:1px solid <?php echo ''.$dc->dropdownborder.''?>;
border-top:0 solid <?php echo ''.$dc->dropdownborder.''?>;
}
#ddmenu :hover ul :hover {color:<?php echo ''.$dc->dropdownlinka.''?>}
.hmenu_on {display:<?php echo ''.$dc->hmenuon.''?>}
.info_out {display:<?php echo ''.$dc->infopanel.''?>}
.verti_but   
{
-webkit-box-shadow:  <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
-moz-box-shadow:     <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
box-shadow:          <?php echo ''.$dc->boxschatten.''?> <?php echo ''.$dc->boxschattencolor.''?>;
background-image: -ms-linear-gradient(top, <?php echo ''.$dc->vertibutcolora.''?> 0%, <?php echo ''.$dc->vertibutcolorah.''?> 100%);
background-image: -moz-linear-gradient(top, <?php echo ''.$dc->vertibutcolora.''?> 0%, <?php echo ''.$dc->vertibutcolorah.''?> 100%);
background-image: -o-linear-gradient(top, <?php echo ''.$dc->vertibutcolora.''?> 0%, <?php echo ''.$dc->vertibutcolorah.''?> 100%);
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo ''.$dc->vertibutcolora.''?>), color-stop(1, <?php echo ''.$dc->vertibutcolorah.''?>));
background-image: -webkit-linear-gradient(top, <?php echo ''.$dc->vertibutcolora.''?> 0%, <?php echo ''.$dc->vertibutcolorah.''?> 100%);
background-image: linear-gradient(to bottom, <?php echo ''.$dc->vertibutcolora.''?> 0%, <?php echo ''.$dc->vertibutcolorah.''?> 100%);
border: solid <?php echo ''.$dc->vertibutborder.''?> 1px;
-webkit-border-radius: <?php echo ''.$dc->vertibutborderradius.''?>px;-moz-border-radius: <?php echo ''.$dc->vertibutborderradius.''?>px;border-radius: <?php echo ''.$dc->vertibutborderradius.''?>px;
color: <?php echo ''.$dc->vertibutfont.''?>
}
.verti_but:hover         
{
border: solid <?php echo ''.$dc->vertibutbordera.''?> 1px;
background-image: -ms-linear-gradient(top, <?php echo ''.$dc->vertibutcolorb.''?> 0%, <?php echo ''.$dc->vertibutcolorbh.''?> 100%);
background-image: -moz-linear-gradient(top, <?php echo ''.$dc->vertibutcolorb.''?> 0%, <?php echo ''.$dc->vertibutcolorbh.''?> 100%);
background-image: -o-linear-gradient(top, <?php echo ''.$dc->vertibutcolorb.''?> 0%, <?php echo ''.$dc->vertibutcolorbh.''?> 100%);
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo ''.$dc->vertibutcolorb.''?>), color-stop(1, <?php echo ''.$dc->vertibutcolorbh.''?>));
background-image: -webkit-linear-gradient(top, <?php echo ''.$dc->vertibutcolorb.''?> 0%, <?php echo ''.$dc->vertibutcolorbh.''?> 100%);
background-image: linear-gradient(to bottom, <?php echo ''.$dc->vertibutcolorb.''?> 0%, <?php echo ''.$dc->vertibutcolorbh.''?> 100%);
color:<?php echo ''.$dc->vertibutfonta.''?>
}
.smalfont ,          
.smalfont_copyright  { color: <?php echo ''.$dc->ahoverhtml.''?>;font-size: <?php echo ''.$dc->smalfontsize.''?>px;text-decoration: none; }
td {color:<?php echo ''.$dc->farbehtml.''?>}
.border,.rand {border:1px solid <?php echo ''.$dc->tableborder.''?>;background:<?php echo ''.$dc->tableborder.''?>;}
.border th,.border td { border:1px solid <?php echo ''.$dc->tableborder.''?>;}
.Chead             {color: <?php echo ''.$dc->tablekopfcolor.''?>;font-size: <?php echo ''.$dc->tablekopfsize.''?>px;
                     background-image: -ms-linear-gradient(top, <?php echo ''.$dc->tablekopf.''?> 0%, <?php echo ''.$dc->tablekopfa.''?> 100%);
                     background-image: -moz-linear-gradient(top, <?php echo ''.$dc->tablekopf.''?> 0%, <?php echo ''.$dc->tablekopfa.''?> 100%);
                     background-image: -o-linear-gradient(top, <?php echo ''.$dc->tablekopf.''?> 0%, <?php echo ''.$dc->tablekopfa.''?> 100%);
                     background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo ''.$dc->tablekopf.''?>), color-stop(1, <?php echo ''.$dc->tablekopfa.''?>));
                     background-image: -webkit-linear-gradient(top, <?php echo ''.$dc->tablekopf.''?> 0%, <?php echo ''.$dc->tablekopfa.''?> 100%);
                     background-image: linear-gradient(to bottom, <?php echo ''.$dc->tablekopf.''?> 0%, <?php echo ''.$dc->tablekopfa.''?> 100%);}
.Chead a,
.Chead a:hover      {color: <?php echo ''.$dc->tablekopfcolor.''?>;font-size: <?php echo ''.$dc->tablekopfsize.''?>px;}
.Chead td, 
.Chead td strong, 
.Chead h4, 
.Chead td b         {color: <?php echo ''.$dc->tablekopfcolor.''?>;}
.Cdark              {color: <?php echo ''.$dc->tablekopfincolor.''?>;
                     background-image: -ms-linear-gradient(top, <?php echo ''.$dc->tablekopfin.''?> 0%, <?php echo ''.$dc->tablekopfina.''?> 100%);
                     background-image: -moz-linear-gradient(top, <?php echo ''.$dc->tablekopfin.''?> 0%, <?php echo ''.$dc->tablekopfina.''?> 100%);
                     background-image: -o-linear-gradient(top, <?php echo ''.$dc->tablekopfin.''?> 0%, <?php echo ''.$dc->tablekopfina.''?> 100%);
                     background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo ''.$dc->tablekopfin.''?>), color-stop(1, <?php echo ''.$dc->tablekopfina.''?>));
                     background-image: -webkit-linear-gradient(top, <?php echo ''.$dc->tablekopfin.''?> 0%, <?php echo ''.$dc->tablekopfina.''?> 100%);
                     background-image: linear-gradient(to bottom, <?php echo ''.$dc->tablekopfin.''?> 0%, <?php echo ''.$dc->tablekopfina.''?> 100%);}
.Cdark > a ,
.Cdark > a:hover    {color: <?php echo ''.$dc->tablekopfincolor.''?>;}
hr                  {border: solid <?php echo ''.$dc->tableborder.''?> 1px;background:<?php echo ''.$dc->tableborder.''?>}
.Cnorm              {background-color: <?php echo ''.$dc->tablein.''?>;color: <?php echo ''.$dc->tableincolor.''?>}
.Cmite              { background-color: <?php echo ''.$dc->tableina.''?>;color:<?php echo ''.$dc->tableinacolor.''?>}
legend              {color: <?php echo ''.$dc->farbehtml.''?>;font-size: <?php echo ''.$dc->sizehtml.''?>px}
fieldset            
{
overflow:auto;border:1px solid <?php echo ''.$dc->farbehtml.''?>
;-webkit-border-radius: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius: <?php echo ''.$dc->boxenradius.''?>px;
border-radius: <?php echo ''.$dc->boxenradius.''?>px;
}
select ,textarea, input  {color: <?php echo ''.$dc->textareacolorfont.''?>;background-color: <?php echo ''.$dc->textareacolor.''?>;}
select,textarea,input,input[type=text],input[type=password],textarea {
border:1px solid <?php echo ''.$dc->textareaborder.''?>;
-webkit-border-radius: <?php echo ''.$dc->boxenradius.''?>px;
-moz-border-radius: <?php echo ''.$dc->boxenradius.''?>px;
border-radius: <?php echo ''.$dc->boxenradius.''?>px;
}
select:hover,select:focus,input:hover,input:focus,input[type=text]:focus,input[type=password]:focus,textarea:focus,input[type=password]:hover,input[type=text]:hover,textarea:hover {
box-shadow:0 0 5px <?php echo ''.$dc->textareabordera.''?>;
border:1px solid <?php echo ''.$dc->textareabordera.''?>
}
input[type=submit],input[type=file],input[type=button],button[type=submit],button ,button[type=file]            
{
color: <?php echo ''.$dc->buttoncolorfont.''?>;
background-color: <?php echo ''.$dc->buttoncolor.''?>
}
input[type=submit],input[type=file],input[type=button],button[type=submit],button,button[type=file] 
{
border:1px solid <?php echo ''.$dc->buttonborder.''?>
-webkit-border-radius: <?php echo ''.$dc->vertibutborderradius.''?>px;
-moz-border-radius: <?php echo ''.$dc->vertibutborderradius.''?>px;
border-radius: <?php echo ''.$dc->vertibutborderradius.''?>px;
}
input[type=submit]:hover,input[type=submit]:focus,button[type=submit]:hover,button[type=submit]:hover,input[type=file]:hover,button:hover, button[type=file]:hover
{
box-shadow:0 0 5px <?php echo ''.$dc->buttonbordera.''?>;
border:1px solid <?php echo ''.$dc->buttonbordera.''?>
}
</style>
<?php
}
?>