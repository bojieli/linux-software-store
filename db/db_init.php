<?php
include_once 'db_config.php';
if (!mysql_pconnect($db['host'], $db['user'], $db['pass']))
	die('Cannot connect to database!');
if (!mysql_select_db($db['name']))
	die('Cannot find database!');
unset($db);

date_default_timezone_set('Asia/Chongqing');
mysql_query("SET CHARSET utf8");
?>
