CREATE TABLE IF NOT EXISTS `prefix_designcreator` (

  `id` int(11) NOT NULL auto_increment,

  `breitedesign` varchar(7) NOT NULL,
  `farbehtml` varchar(7) NOT NULL,
  `sizehtml` varchar(7) NOT NULL,
  `fonthtml` varchar(100) NOT NULL,
  `ahtml` varchar(7) NOT NULL,
  `ahoverhtml` varchar(7) NOT NULL,
  `farbebody` varchar(7) NOT NULL,
  `imagebody` varchar(200) NOT NULL,
  `frv` varchar(7) NOT NULL,
  `frb` varchar(7) NOT NULL,
  `fropacity` varchar(3) NOT NULL,
  `frbordercolor` varchar(7) NOT NULL,
 `frborderradius` varchar(2) NOT NULL,
 `rschatten` varchar(40) NOT NULL,
 `rschattenc` varchar(7) NOT NULL,
 `menubreite` varchar(7) NOT NULL,
 `menubreite2` varchar(7) NOT NULL,
 `header` varchar(40) NOT NULL,
 `imageheader` varchar(200) NOT NULL,
 `headerhight` varchar(3) NOT NULL,
 `seitenname` varchar(10) NOT NULL,
 `seitennamecolor` varchar(7) NOT NULL,
 `seitennamesize` varchar(2) NOT NULL,
 `seitennamepos` varchar(10) NOT NULL,
 `boxencolorvon` varchar(7) NOT NULL,
 `boxencolorzu` varchar(7) NOT NULL,
 `menuobencolor` varchar(7) NOT NULL,
 `menuobensize` varchar(2) NOT NULL,
 `menuobencolorfont` varchar(7) NOT NULL,
 `boxenborder` varchar(7) NOT NULL,
 `boxenradius` varchar(7) NOT NULL,
 `contentbackground` varchar(7) NOT NULL,
 `navionoff` varchar(10) NOT NULL,
 `boxschatten` varchar(40) NOT NULL,
 `boxschattencolor` varchar(7) NOT NULL,
 `dropdownvon` varchar(7) NOT NULL,
 `dropdownzu` varchar(7) NOT NULL,
 `dropdownborder` varchar(7) NOT NULL,
 `dropdownname` varchar(7) NOT NULL,
 `dropdownnamea` varchar(7) NOT NULL,
 `dropdownnamesize` varchar(2) NOT NULL,
 `dropdownlink` varchar(7) NOT NULL,
 `dropdownlinka` varchar(7) NOT NULL,
 `infopanel` varchar(10) NOT NULL,
 `hmenuon` varchar(10) NOT NULL,
 `vertibutcolora` varchar(7) NOT NULL,
 `vertibutcolorah` varchar(7) NOT NULL,
 `vertibutcolorb` varchar(7) NOT NULL,
 `vertibutcolorbh` varchar(7) NOT NULL,
 `vertibutborder` varchar(7) NOT NULL,
 `vertibutbordera` varchar(7) NOT NULL,
 `vertibutborderradius` varchar(2) NOT NULL,
 `vertibutfont` varchar(7) NOT NULL,
 `vertibutfonta` varchar(7) NOT NULL,
 `tableborder` varchar(7) NOT NULL,
 `tablekopf` varchar(7) NOT NULL,
 `tablekopfa` varchar(7) NOT NULL,
 `tablekopfcolor` varchar(7) NOT NULL,
 `tablekopfin` varchar(7) NOT NULL,
 `tablekopfina` varchar(7) NOT NULL,
 `tablekopfincolor` varchar(7) NOT NULL,
 `tablein` varchar(7) NOT NULL,
 `tableina` varchar(7) NOT NULL,
 `tableincolor` varchar(7) NOT NULL,
 `tableinacolor` varchar(7) NOT NULL,
 `textareacolor` varchar(7) NOT NULL,
 `textareacolorfont` varchar(7) NOT NULL,
 `textareaborder` varchar(7) NOT NULL,
 `textareabordera` varchar(7) NOT NULL,
 `buttoncolor` varchar(7) NOT NULL,
 `buttoncolorfont` varchar(7) NOT NULL,
 `buttonborder` varchar(7) NOT NULL,
 `buttonbordera` varchar(7) NOT NULL,
 `bgvorschau` varchar(7) NOT NULL,
 `zeichenzahl` varchar(3) NOT NULL,
 `heightinf` varchar(3) NOT NULL,

  PRIMARY KEY  (`id`)
)ENGINE = MYISAM;

INSERT INTO `prefix_designcreator` (`id` ,`breitedesign` ,`farbehtml` ,`sizehtml` ,`fonthtml` ,`ahtml` ,`ahoverhtml` ,`farbebody` ,`imagebody` ,`frv` ,`frb` ,`fropacity` ,`frbordercolor` ,`frborderradius` ,`rschatten` 
,`rschattenc` ,`menubreite` ,`menubreite2`  ,`header` ,`imageheader` ,`headerhight` ,`seitenname` ,`seitennamecolor` ,`seitennamesize` ,`seitennamepos` ,`boxencolorvon` ,`boxencolorzu` ,`menuobencolor` ,`menuobensize`
,`menuobencolorfont` ,`boxenborder` ,`boxenradius` ,`contentbackground` ,`navionoff` ,`boxschatten` ,`boxschattencolor` ,`dropdownvon` ,`dropdownzu` ,`dropdownborder` ,`dropdownname` ,`dropdownnamea` ,`dropdownnamesize`
,`dropdownlink` ,`dropdownlinka` ,`infopanel` ,`hmenuon` ,`vertibutcolora` ,`vertibutcolorah` ,`vertibutcolorb` ,`vertibutcolorbh` ,`vertibutborder` ,`vertibutbordera` ,`vertibutborderradius` ,`vertibutfont` ,`vertibutfonta`
,`tableborder` ,`tablekopf` ,`tablekopfa` ,`tablekopfcolor` ,`tablekopfin` ,`tablekopfina` ,`tablekopfincolor` ,`tablein` ,`tableina` ,`tableincolor` ,`tableinacolor` ,`textareacolor` ,`textareacolorfont`
 ,`textareaborder` ,`textareabordera` ,`buttoncolor` ,`buttoncolorfont` ,`buttonborder` ,`buttonbordera` ,`bgvorschau` ,`zeichenzahl` ,`heightinf`) 

VALUES (NULL ,'1100' ,'#C4C4C4' ,'12' ,'Arial, Verdana, Helvetica, Times, Georgia, Comic Sans MS' ,'#CCCCCC' ,'#7FBC05' ,'#000000' ,'http://demo.maretz.eu/include/designs/mar_UnderGround/images/background.jpg'
,'#262626' ,'#000000' ,'90' ,'#3D3D3D' ,'50' ,'0px -2px 10px 2px' ,'#000000' ,'200' ,'250' ,'header' ,'include/designs/mar_Creator/images/header.jpg' ,'145' ,'block' ,'#FFFFFF' ,'32' ,'center'
 ,'#262626' ,'#000000' ,'#262626' ,'14' ,'#7FBC05' ,'#3D3D3D' ,'3' ,'#0A0A0A' ,'inline' ,'0px -7px 7px -2px' ,'#0A0A0A' ,'#262626' ,'#000000' ,'#444444' ,'#C1C1C1' ,'#7FBC05' ,'14' ,'#C1C1C1' ,'#7FBC05'
 ,'inline' ,'inline' ,'#262626' ,'#000000' ,'#7FBC05' ,'#000000' ,'#3D3D3D' ,'#3D3D3D' ,'3' ,'#4C4C4C' ,'#FFFFFF' ,'#3D3D3D' ,'#88c522' ,'#2D4402' ,'#E5E5E5' ,'#282828' ,'#000000' ,'#E5E5E5' ,'#0C0C0C' ,'#111111'
 ,'#C4C4C4' ,'#C4C4C4' ,'#262626' ,'#CCCCCC' ,'#878787' ,'#6ea804' ,'#262626' ,'#CCCCCC' ,'#878787' ,'#FFFFFF' ,'#DBDBDB' ,'40' ,'180');


INSERT INTO `prefix_modules` (`url` ,`name` ,`gshow` ,`ashow` ,`fright`) VALUES ('designcreator', 'Design Creator', '1', '1', '0');

INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 0, 2, 0, 0, 'Menü 1', 'allianz.php');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 1, 7, 0, 0, 'Link 1-1', 'null');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 2, 7, 0, 0, 'Link 1-2', 'null');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 3, 7, 0, 0, 'Link 1-3', 'null');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 4, 2, 0, 0, 'Menü 2', 'allianz.php');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 5, 7, 0, 0, 'Link 2-1', 'null');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 6, 7, 0, 0, 'Link 2-2', 'null');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 7, 7, 0, 0, 'Link 2-3', 'null');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 8, 2, 0, 0, 'Menü 3', 'allianz.php');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 9, 7, 0, 0, 'Link 3-1', 'null');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 10, 7, 0, 0, 'Link 3-2', 'null');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 11, 7, 0, 0, 'Link 3-3', 'null');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 12, 2, 0, 0, 'Menü 4', 'allianz.php');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 13, 7, 0, 0, 'Link 4-1', 'null');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 14, 2, 0, 0, 'Menü 5', 'allianz.php');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 15, 7, 0, 0, 'Link 5-1', 'null');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 16, 2, 0, 0, 'Menü 6', 'allianz.php');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (6, 17, 7, 0, 0, 'Link 6-1', 'null');





