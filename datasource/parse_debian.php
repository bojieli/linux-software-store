<?php
if (!($fp = fopen($argv[1], "r")))
	die('Error opening input file');

$stderr = fopen("php://stderr", "r");

if (!($fpmain = fopen($argv[2], "w")))
	die('Error opening output file for cz_pack');
if (!($fpdetail = fopen($argv[3], "w")))
	die('Error opening output file for cz_pack_detail');

$pack_common = array(
	'did' => isset($argv[4]) ? $argv[4] : 1,
	'rid' => isset($argv[5]) ? $argv[5] : 1,
	'create_time' => time(),
	'update_time' => time(),
	'extension' => 'deb'
);

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

$mainFields = array(
	'did',
	'rid',
	'filesize',
	'install_size',
	'rate_total',
	'rate_count',
	'create_time',
	'update_time',
	'recommend',
	'name',
	'version',
	'url',
	'summary',
	'extension'
);
$detailFields = array(
	'checksum_md5',
	'checksum_sha1',
	'checksum_sha256',
	'bug_url',
	'homepage',
	'license',
	'maintainer',
	'maintainerUrl',
	'priority',
	'description',
	'icon',
	'section',
	'tags',
	'depends',
	'suggests',
	'conflicts',
	'provides',
	'replaces'
);

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
		fputs($stderr, "$field: $value\n");
	} else {
		$package[$fieldmap[$field]] = $value;
	}
	$value = '';
}

save_package_finish($fpmain);
save_package_finish($fpdetail);


function save_package_init() {
	global $mainFields;
	global $fpmain;
	__save_package_init($fpmain, 'cz_pack', $mainFields);
	global $detailFields;
	global $fpdetail;
	__save_package_init($fpdetail, 'cz_pack_detail', $detailFields);
}

function __save_package_init($fp, $table, $fields) {
	$strs = array();
	foreach ($fields as $field) {
		$strs[] = "`$field`";
	}
	fputs($fp, "INSERT INTO `$table` (".implode(",", $strs).") VALUES \n");
}

function save_package_finish($fp) {
	fputs($fp, ";\n");
}

function save_package($package) {
	global $mainFields;
	global $fpmain;
	__save_package($fpmain, $package, $mainFields, 'cz_pack');
	global $detailFields;
	global $fpdetail;
	__save_package($fpdetail, $package, $detailFields, 'cz_pack_detail');
}

function __save_package($fp, $package, $fields, $table) {
	static $nonfirst = array();
	static $count = array();
	$strs = array();
	foreach ($fields as $field) {
		$strs[] = "'".addslashes(isset($package[$field]) ? $package[$field] : '')."'";
	}
	if (empty($strs))
		return;
	if (!isset($count[(int)$fp]))
		$count[(int)$fp] = 0;
	$count[(int)$fp]++;
	if (isset($nonfirst[(int)$fp]))
		fputs($fp, ",\n");
	else
		$nonfirst[(int)$fp] = true;
	fputs($fp, '('.implode(',', $strs).')');

	// make a new sql every 1000 items
	if ($count[(int)$fp] % 1000 == 0) {
		save_package_finish($fp);
		unset($nonfirst[(int)$fp]);
		__save_package_init($fp, $table, $fields);
	}
}
