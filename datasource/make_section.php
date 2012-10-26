<?php
include "../db/db_config.php";

$map = array();

$rs = mysql_query("SELECT * FROM cz_subsection");
while ($row = mysql_fetch_array($rs)) {
    $keywords = explode(',', $row['deb_keyword']);
    foreach ($keywords as $keyword)
        $map[$keyword] = array($row['sid'], $row['subsid']);
}

$rs = mysql_query("SELECT section FROM cz_pack_detail");
while ($row = mysql_fetch_array($rs)) {
    foreach ($map as $keyword => $arr) {
        if (strstr($row['tags'], $keyword)) {
            $sid = $arr['sid'];
            $subsid = $arr['subsid'];
            $pid = $row['pid'];
            mysql_query("INSERT INTO cz_pack_section SET `sid`='$sid',`subsid`='$subsid',`pid`='$pid'");
        }
    }
}
