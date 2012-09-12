<?php
if (!($fp = fopen($argv[1], "r")))
	die('Error opening input file');

$stderr = fopen("php://stderr", "r");

$package = array();
$fieldmap = array(
	'Package' => 'name',
	'Priority' => 'priority',
	'Section' => 'section',
	'Installed-Size' => 'install_size',
	'Maintainer' => 'maintainer',
	'Architecture' => 'architecture',
	'Version' => 'version',
	'Filename' => 'url',
	'Size' => 'filesize',
	'MD5sum' => 'checksum_md5',
	'SHA1' => 'checksum_sha1',
	'SHA256' => 'checksum_sha256',
	'Description' => 'summary',
	'Tag' => 'tags',
	'Depends' => 'depends',
	'Suggests' => 'suggests',
	'Recommends' => 'suggests',
	'Conflicts' => 'conflicts',
	'Provides' => 'provides',
	'Replaces' => 'replaces',
	'Source' => 'source',
	'Homepage' => 'homepage',
	'Bugs' => 'bug_url'
);
$pack_common = array(
	'did' => isset($argv[2]) ? $argv[2] : 1,
	'rid' => isset($argv[3]) ? $argv[3] : 1
);
$savefields = array_unique(array_merge($fieldmap, array('did', 'rid', 'description')));

$field = '';
$value = '';

save_package_init();

$lines = file($argv[1]);
foreach ($lines as $line) {
/*	if ($line === false) {
		break;
	}
*/
	if (trim($line) == '') { // save the package
		save_package(array_merge($package, $pack_common));
		$package = array();
		$field = $value = '';
		continue;
	}

	if (!preg_match("/^([a-zA-Z0-9_-]+):(.*)$/", $line, $matches)) {
		if ($field == 'Description') { // start from the 2nd line
			if (trim($line) == '.')
				$value .= "\n";
			else
				$value .= trim($line). ' ';
		}
		continue;
	}
	if ($field == 'Description') { // need to save the previous paragraph
		$package['description'] = $value;
		$value = '';
		continue;
	}
	$field = trim($matches[1]);
	$value = trim($matches[2]);
	if (!isset($fieldmap[$field])) {
		fprintf($stderr, "$field: $value\n");
	} else {
		$package[$fieldmap[$field]] = $value;
	}
	$value = '';
}

save_package_finish();


function save_package_init() {
	global $savefields;
	$strs = array();
	foreach ($savefields as $orig => $field) {
		$strs[] = "`$field`";
	}
	echo "INSERT INTO cz_pack (".implode(",", $strs).") VALUES \n";
}

function save_package_finish() {
	echo ";";
}

function save_package($package) {
	global $savefields;
	static $first = true;
	$strs = array();
	foreach ($savefields as $orig => $field) {
		$strs[] = "'".addslashes(isset($package[$field]) ? $package[$field] : '')."'";
	}
	if (!$first)
		echo ",\n";
	else
		$first = false;
	echo "(".implode(",", $strs).")";
}
