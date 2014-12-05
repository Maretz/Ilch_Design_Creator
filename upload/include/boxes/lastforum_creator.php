<?php 
#   Copyright by Manuel Staechele
#   LastForum Design Creator

defined ('main') or die ( 'no direct access' );
echo '<div style="margin:5px"><span style="float:right" class="smalfont">Latest Forum</span><br>';
$query = "SELECT a.id, a.name, a.rep,b.name as top, b.id as fid, c.erst as last, c.erstid, c.id as pid, c.time, a.rep, a.erst, a.hit, a.art, a.stat, d.name as kat, zeichenzahl
FROM prefix_topics a
  LEFT JOIN prefix_forums b ON b.id = a.fid
  LEFT JOIN prefix_posts c ON c.id = a.last_post_id
	LEFT JOIN prefix_forumcats d ON d.id = b.cid AND b.id = a.fid
  LEFT JOIN prefix_groupusers vg ON vg.uid = ".$_SESSION['authid']." AND vg.gid = b.view
  LEFT JOIN prefix_groupusers rg ON rg.uid = ".$_SESSION['authid']." AND rg.gid = b.reply
  LEFT JOIN prefix_groupusers sg ON sg.uid = ".$_SESSION['authid']." AND sg.gid = b.start
  LEFT JOIN prefix_designcreator ON zeichenzahl 
WHERE ((".$_SESSION['authright']." <= b.view AND b.view < 1) 
   OR (".$_SESSION['authright']." <= b.reply AND b.reply < 1)
   OR (".$_SESSION['authright']." <= b.start AND b.start < 1)
	 OR vg.fid IS NOT NULL
	 OR rg.fid IS NOT NULL
	 OR sg.fid IS NOT NULL
	 OR -9 >= ".$_SESSION['authright'].")
ORDER BY c.time DESC
LIMIT 0,3";
$resultID = db_query($query);
if (loggedin()) {
    $admin = '';
    if (user_has_admin_right($menu, false)) {
        $admin = '<br><a href="admin.php?forum">neues Forum erstellen</a>';
    }
}
if ( @db_num_rows($resultID) == 0 ) {
	echo '<div style="text-align:center;margin-top:5%" class="smalfont">kein Forumeintrag vorhanden'.$admin.'</div>';
} 
while ($row = db_fetch_assoc($resultID)) {
	$row['date'] = date('d.m.y - H:i',$row['time']);
	$row['page'] = ceil ( ($row['rep']+1)  / $allgAr['Fpanz'] );
	$row['ORD']  = forum_get_ordner($row['time'],$row['id'],$row['fid']);
  $row['zeichenkate'] = $row['zeichenzahl'] - 23 ;
echo '<div style="line-height:15px;margin-top:3px">';	
	echo '<font class="smalfont">Autor: '.$row['erst'].' | Kategorie: '.((strlen($row['kat'])<($row['zeichenkate'])) ? $row['kat'] : substr($row['kat'],0,($row['zeichenkate'])).'...').'</font><br><a href="index.php?forum-showposts-'.$row['id'].'-p'.$row['page'].'#'.$row['pid'].'" title="'.$row['name'].' ( '.$row['rep'].' reply )"><b>'.((strlen($row['name'])<($row['zeichenzahl'])) ? $row['name'] : substr($row['name'],0,($row['zeichenzahl'])).'...').' </b><sup>'.$row['rep'].'</sup></a><br>
<font class="smalfont">Last Post: '.$row['last'].' | '.$row['date'].' Uhr</font>';
echo '</div>';
}
echo '</div>';
?>











