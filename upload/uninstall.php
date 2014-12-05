

<?php

if ( empty ($_POST['step']) ) { ?>
<html>
  <head><title>[ U n I n s t a l l e r ] Design Creator</title>
  <link href="http://holdirbootstrap.de/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://holdirbootstrap.de/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
  <body style="background:#141414">
		<form action="uninstall.php" method="POST">
<input type="hidden" name="step" value="3">
 <div class="container">
<div class="panel panel-warning" style="margin-top:20%">
  <div class="panel-body">
    <legend><h4><img style="float:left;margin-right:7px;" src="http://www.maretz.eu/icon.ico">  Design Creator <small>by <a href="http://www.maretz.eu" target="_blank"><strong>Maretz.eu</strong></a></small></h4></legend>
<p>Um das Modul zu entfernen dr&uuml;cke auf <strong>Modul l&ouml;schen</strong></p>
<br><br>
<p class="text-center"><input class="btn btn-danger" type="submit" value="Modul l&ouml;schen"> <a class="btn btn-default" href="index.php?">Modul nicht löschen</a>
  </div>
</div>
</div>
</form>
 </body>
</html>
<?php

} elseif ($_POST['step'] == '3') {
define ( 'main' , TRUE );
require_once('include/includes/config.php');
require_once('include/includes/func/db/mysql.php');
db_connect();
$error = '';
$loeschen = "DROP TABLE prefix_designcreator";
$loesch = db_query($loeschen);
$clear = "DELETE FROM prefix_modules WHERE url= 'designcreator'";
$loesch = db_query($clear);
$clean = "DELETE FROM prefix_menu WHERE wo= '6'";
$loesch = db_query($clean);







?>
<html>
  <head><title>[ U n I n s t a l l e r ] Design Creator</title>
  <link href="http://holdirbootstrap.de/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://holdirbootstrap.de/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
  <body style="background:#141414">
 <div class="container">
        <div class="alert alert-success" style="margin-top:20%"><h3><i class="fa fa-check-square-o"></i>Deinstallation abgeschlossen</h3>
   <?php

                    if(!empty($erfolg)) {
                        $erfolg = '<p>Die Deinstallation wurde erfolgreich abgeschlossen!</p>';
                    }
                    if(@unlink('uninstall.php') && @unlink('include/admin/designcreator.php') && @unlink('include/boxes/lastnews_creator.php') && @unlink('include/boxes/lastforum_creator.php') && @unlink('include/boxes/login_creator.php') && @unlink('include/boxes/style_creator.php')  && @unlink('include/images/icons/admin/dc.png') && @unlink('include/designs/mar_Creator/index.htm') && @unlink('include/designs/mar_Creator/style.css')  && @unlink('include/designs/mar_Creator/templates/user/boxen_login_creator.htm') && @unlink('include/admin/templates/designcreator.htm')) {
                        $erfolg .= '<p></p><p>Diese Dateien von dem Modul wurden erfolgreich gel&ouml;scht.</p></p>Es muss nur noch der Ordner include/designs/mar_Creator gel&ouml;scht werden.</p>';
                    }
                    else {
                        $erfolg .= '<p class="text-danger">Die Installationsdateien konnten nicht automatisch gel&ouml;scht werden.Folgende Dateien sollten entfernt werden:</p><p class="text-danger"><i>uninstall.php</i><br><i>include/admin/designcreator.php</i><br><i>include/admin/templates/designcreator.htm</i><br><i>include/boxes/lastnews_creator.php</i><br><i>include/boxes/lastforum_creator.php</i><br><i>include/boxes/login_creator.php</i><br><i>include/boxes/style_creator.php</i><br><i>include/images/icons/admin/dc.png</i><br><i>Ordner include/designs/mar_Creator</i></p>';
                    }

                    echo $erfolg;

                ?>
<p class="text-right"><a class="btn btn-default" href="index.php">Zur Startseite</a></p></div>
</div>
 </body>
</html>
<?php
}
?>
