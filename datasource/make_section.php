<?php
include "../db/db_init.php";

$map = array();

$rs = mysql_query("SELECT * FROM cz_subsection");
while ($row = mysql_fetch_array($rs)) {
    $keywords = explode(',', $row['deb_keyword']);
    foreach ($keywords as $keyword)
        $map[$keyword] = array($row['sid'], $row['subsid']);
}

$count = 0;
$fp = fopen("pack_section.txt", "w");

$rs = mysql_query("SELECT pid,section FROM cz_pack_detail");
while ($row = mysql_fetch_array($rs)) {
    foreach ($map as $keyword => $arr) {
        if (strstr($row['section'], $keyword)) {
            $sid = $arr[0];
            $subsid = $arr[1];
            $pid = $row['pid'];
            fwrite($fp, "$sid\t$subsid\t$pid\n");
            //mysql_query("INSERT INTO cz_pack_section SET `sid`='$sid',`subsid`='$subsid',`pid`='$pid'");
        }
    }
    if ($count++ % 10000 == 0)
        echo $count."\t";
}
fclose($fp);
