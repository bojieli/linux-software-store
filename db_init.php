<?php
include_once 'db_config.php';
if (empty(mysql_pconnect($db['host'], $db['user'], $db['pass'])))
	die('Cannot connect to database!');
if (empty(mysql_select_db($db['name'])))
	die('Cannot find database!');
unset($db);

date_default_timezone_set('Asia/Chongqing');