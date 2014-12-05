<?php 
#   Copyright by Manuel Staechele
#   LastNews Design Creator

defined ('main') or die ( 'no direct access' );
	echo '<div style="margin:5px"><span style="float:right" class="smalfont">Last News Entries</span><br>';
$abf = 'SELECT
          a.news_kat as kate,
          DATE_FORMAT(a.news_time,"%d.%m.%Y") as datum,      
          a.news_title as title,
          a.news_kat as kate,
          a.news_id as id,      
          b.name as username,
          b.id as userid ,  
          zeichenzahl 
          FROM prefix_news as a
          LEFT JOIN prefix_user as b ON a.user_id = b.id
          LEFT JOIN prefix_designcreator ON zeichenzahl 
          WHERE news_recht >= '.$_SESSION['authright'].'
          ORDER BY a.news_time DESC
          LIMIT 0,3';       
$erg = db_query($abf);
if (loggedin()) {
    $admin = '';
    if (user_has_admin_right($menu, false)) {
        $admin = '<br><a href="admin.php?news">jetzt eine News erstellen</a>';
    }
}
if ( @db_num_rows($erg) == 0 ) {
	echo '<div style="text-align:center;margin-top:5%" class="smalfont">kein Newseintrag vorhanden'.$admin.'</div>';
} 

while ($row = db_fetch_object($erg)) {
$row->zeichenkate = $row->zeichenzahl - 11 ;
echo '<div style="line-height:15px;margin-top:5px">';
	echo '<font class="smalfont">Kategorie: '.((strlen($row->kate)<($row->zeichenkate)) ? $row->kate : substr($row->kate,0,($row->zeichenkate)).'...').'</font><br><a href="index.php?news-'.$row->id.'" title="'.$row->title.'"><b>'.((strlen($row->title)<($row->zeichenzahl)) ? $row->title : substr($row->title,0,($row->zeichenzahl)).'...').'</b></a><br><font class="smalfont">Autor : '.$row->username.' | '.$row->datum.'</font>';
echo '</div>';
}
echo '</div>';
?>