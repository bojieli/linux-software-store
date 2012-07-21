<!DOCTYPE html>
<meta charset="utf-8">
<?php
require_once 'dist_corr.inc.php';
$form = array(
	'tech_level' => 0,
	'distro_type' => 1,
	'speed' => 1,
	'install_type' => 0,
	'desktop' => 4,
	'desktop_3d' => 1,
	'stability' => 3,
	'oneclick' => 1,
	'package_manager' => 0,
	'configurability' => 0,
	'popularity' => 1
);
var_dump($form);
$rank = dist_corr($form);
echo "<ol>";
foreach ($rank as $dist => $score) {
	echo "<li>$dist: <strong>$score</strong></li>";
}
echo "</ol>\n";
foreach ($rank as $dist => $score) {
	print_feature($form, $dist);
}
?>
