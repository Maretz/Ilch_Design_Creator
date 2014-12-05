<?php

if ( empty ($_POST['step']) ) { ?>
<html>
  <head><title>[ I n s t a l l ] Design Creator</title>
  <link href="http://holdirbootstrap.de/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://holdirbootstrap.de/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
  <body style="background:#141414">
		<form action="install.php" method="POST">
<input type="hidden" name="step" value="3">
 <div class="container">
<div class="panel panel-warning" style="margin-top:20%">
  <div class="panel-body">
    <legend><h4><img style="float:left;margin-right:7px;" src="http://www.maretz.eu/icon.ico">  Design Creator <small>by <a href="http://www.maretz.eu" target="_blank"><strong>Maretz.eu</strong></a></small></h4></legend>
<p>Mit dem Design Creator kannst du dir das Design nach deinen Vorstellungen anpassen in der Farbgebung sowie in der Gr&ouml;ße und weiteren M&ouml;glichkeiten.</p>
<p><i class="fa fa-exclamation-triangle" style="color:#ff0000"></i> Lege dir zuerst eine <strong><a href="admin.php?backup" target="_blank"><i class="fa fa-external-link"></i> Sicherheits Kopie der Datenbank</a></strong> an.</p>
<p>Dr&uuml;cke auf Installieren, um das Modul zu installieren.</p>
<br><br>
<p class="text-center"><input class="btn btn-default" type="submit" value="Installieren"> <a class="btn btn-warning" href="index.php?">Installation abbrechen</a></p>
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
$check_dc = db_query("SHOW TABLES LIKE 'prefix_designcreator'");
if (db_num_rows($check_dc)) {
echo "
<html>
  <head><title>[ I n s t a l l ] Design Creator</title>
  <link href=\"http://holdirbootstrap.de/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"http://holdirbootstrap.de/examples/jumbotron-narrow/jumbotron-narrow.css\" rel=\"stylesheet\">
<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">

</head>
  <body style=\"background:#141414\">
 <div class=\"container\">
        <div class=\"alert alert-danger\" style=\"margin-top:20%\"><h3><i class=\"fa fa-exclamation-triangle\"></i> Installation abgebrochen</h3>
   <p>Das Modul wurde bereits installiert!</p><br><p class=\"text-right\"><a class=\"btn btn-default\" href=\"index.php\">Zur Startseite</a></p></div>
</div>
</div>
 </body>
</html>
";
} 
else {
$error = '';
$sql_file = implode('',file('install.sql'));
$sql_file = preg_replace ("/(\015\012|\015|\012)/", "\n", $sql_file);
$sql_statements = explode(";\n",$sql_file);
foreach ( $sql_statements as $sql_statement ) {
   if ( trim($sql_statement) != '' ) {
      #echo '<pre>'.$sql_statement.'</pre><hr>';
            db_query($sql_statement) OR $error .= mysql_errno().': '.mysql_error().'<br />';
   }
}

?>
<html>
  <head><title>[ I n s t a l l ] Design Creator</title>
  <link href="http://holdirbootstrap.de/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://holdirbootstrap.de/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
  <body style="background:#141414">
 <div class="container">
        <div class="alert alert-success" style="margin-top:20%"><h3><i class="fa fa-check-square-o"></i> Installation abgeschlossen</h3>
   <?php

    if(!empty($error)) {
        if(empty($fehler)) {
                        $fehler = '<p class="text-danger">Es sind Fehler bei der Installation aufgetreten!Bitte benachrichtigen Sie den Entwickler.</p>';
                    }
                    $fehler .= '<p class="text-danger">Oben sollten Sie eine ausf&uuml;hrlichere Fehlermeldung sehen.</p>';

                    echo $fehler.'<p class="text-danger"><strong style="text-decoration:underline;">Fehlermeldungen:</strong><br><br><span style="color:#FF0000;font-size:bold;">'.$error.'</span></p>';
                }
                else {
                    if(empty($erfolg)) {
                        $erfolg = '<p>Die Installation wurde erfolgreich abgeschlossen!</p>';
                    }
                    if(@unlink('install.php') && @unlink('install.sql') && @unlink('uninstall.php')) {
                        $erfolg .= '<p></p><p>Diese Installationsdateien wurden erfolgreich gel&ouml;scht. Es muss nichts mehr getan werden.</p><p class="text-warning">Um das Modul wieder zu l&ouml;schen muss nochmals die uninstall.php aufgespielt werden und über die URL ( http://meine-seite.de/uninstall.php ) aufgerufen werden!</p>';
                    }
                    else {
                        $erfolg .= '<p class="text-danger">Die Installationsdateien konnten nicht automatisch gel&ouml;scht werden. L&ouml;sche folgende Dateien:<p><p class="text-danger"></strong><br /><br><i>install.php</i><br><i>install.sql</i><br><i>uninstall.php</i></p><p class="text-warning">Um das Modul wieder zu l&ouml;schen muss nochmals die uninstall.php aufgespielt werden und über die URL ( http://meine-seite.de/uninstall.php ) aufgerufen werden!</p>';
                    }

                    echo $erfolg;
                }

                ?>
<p class="text-right"><a class="btn btn-default" href="index.php">Zur Startseite</a></p></div>
</div>
 </body>
</html>
<?php
}
}
?>