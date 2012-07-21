<?php
$fields = array(
	'install_type' => array(
		'2' => '有图形化安装界面',
		'1' => '有命令行安装方式'
	),
	'tech_level' => array(
		'0' => '适合linux初学者',
		'1' => '适合有一定经验的linux用户',
		'2' => '适合喜欢折腾的linux用户'
	),
	'distro_type' => array(
		'1' => '适用于家庭/个人',
		'2' => '适用于服务器'
	),
	'speed' => array(
		'0' => '极致的速度，哪怕不方便使用',
		'1' => '速度和易用性间的折中',
		'2' => '有比较炫的桌面效果'
	),
	'desktop' => array(
		'1' => '预装KDE桌面',
		'2' => '预装GNOME桌面',
		'3' => '没有预装桌面环境',
		'4' => '模仿Windows的定制桌面环境',
		'5' => '模仿Mac的定制桌面环境'
	),
	'desktop_3d' => array(
		'1' => '有3D桌面效果',
		'2' => '没有3D桌面效果'
	),
	'oneclick' => array(
		'1' => '有很多预装软件',
		'0' => '大部分软件都要自行安装'
	),
	'package_manager' => array(
		'1' => '使用deb包管理器',
		'2' => '使用rpm包管理器',
		'3' => '使用pacman包管理器',
		'4' => '使用pkgtool包管理器，需要手动解决依赖',
		'5' => '不提供包管理器，需要手工编译',
		'6' => '使用PETget包管理器'
	),
	'package_dev' => array(
		'1' => '容易获取开发者版软件包',
		'2' => '预装了很多软件包',
		'3' => '不容易获取开发者版软件包'
	),
	'stability' => array(
		'1' => '稳定的、经过长期测试的软件',
		'2' => '兼顾软件的稳定性和新鲜度',
		'3' => '软件更新很快，几乎总是最新的'
	),
	'configurability' => array(
		'2' => '可配置性很高，适合折腾',
		'1' => '可配置性中等，适合做普通的个性化和定制',
		'0' => '可配置性较低，大部分设置在系统中内置'
	),
	'include_livecd' => array(
		'1' => '包含LiveCD，可以在安装前先体验',
		'0' => '不包含LiveCD'
	),
	'popularity' => array(
		'1' => '这是一个很流行的发行版，流行度',
		'0.5' => '这是一个比较流行的发行版，流行度',
		'0' => '这是一个小众发行版，流行度'
	)
);

function abs_diff($in, $ref) {
	if ($in == $ref)
		return 1;
	if ($in == $ref + 1 || $in + 1 == $ref)
		return 0.5;
	return 0;
}

function equal_nonzero($in, $ref) {
	if ($in == 0)
		return 0.5;
	return $in == $ref ? 1 : 0;
}

function equal($in, $ref) {
	return $in == $ref ? 1 : 0;
}

function greater_or_equal($in, $ref) {
	return $in >= $ref ? 1 : 0;
}

function less_or_equal($in, $ref) {
	return $in <= $ref ? 1 : 0;
}

function in_list($in, $ref) {
	return in_array($in, $ref) ? 1 : 0;
}

function in_list_nonzero($in, $ref) {
	if ($in == 0)
		return 0.5;
	return in_array($in, $ref) ? 1 : 0;
}

function return_rank($in, $ref) {
	switch ($in) {
		case 1: return $ref;
		case 2: return 1 - $ref;
		default: return 0;
	}
}

$score_func = array(
	'tech_level' => 'greater_or_equal',
	'distro_type' => 'in_list',
	'speed' => 'equal',
	'install_type' => 'in_list_nonzero',
	'desktop' => 'equal_nonzero',
	'desktop_3d' => 'equal_nonzero',
	'stability' => 'abs_diff',
	'oneclick' => 'equal',
	'package_manager' => 'equal_nonzero',
	'package_dev' => 'in_list',
	'configurability' => 'equal',
	'include_livecd' => 'equal_nonzero',
	'popularity' => 'return_rank'
);

$dists = array(
	'archlinux' => array(
		'tech_level' => 2,
		'distro_type' => array(1),
		'speed' => 0,
		'install_type' => array(1),
		'desktop' => 3,
		'desktop_3d' => 2,
		'stability' => 3,
		'oneclick' => 0,
		'package_manager' => 3,
		'package_dev' => array(1),
		'configurability' => 2,
		'include_livecd' => 1,
		'popularity' => 0.5
	),
	'centos' => array(
		'tech_level' => 1,
		'distro_type' => array(1, 2),
		'speed' => 1,
		'install_type' => array(1, 2),
		'desktop' => 3,
		'desktop_3d' => 2,
		'stability' => 1,
		'oneclick' => 0,
		'package_manager' => 2,
		'package_dev' => array(1),
		'configurability' => 1,
		'include_livecd' => 1,
		'popularity' => 0.5
	),
	'debian' => array(
		'tech_level' => 1,
		'distro_type' => array(1, 2),
		'speed' => 1,
		'install_type' => array(1, 2),
		'desktop' => 2,
		'desktop_3d' => 2,
		'stability' => 1,
		'oneclick' => 1,
		'package_manager' => 1,
		'package_dev' => array(1),
		'configurability' => 1,
		'include_livecd' => 1,
		'popularity' => 1
	),
	'deepin' => array(
		'tech_level' => 0,
		'distro_type' => array(1),
		'speed' => 2,
		'install_type' => array(2),
		'desktop' => 4,
		'desktop_3d' => 1,
		'stability' => 2,
		'oneclick' => 1,
		'package_manager' => 1,
		'package_dev' => array(1),
		'configurability' => 0,
		'include_livecd' => 1,
		'popularity' => 0.5
	),
	'fedora' => array(
		'tech_level' => 0,
		'distro_type' => array(1),
		'speed' => 1,
		'install_type' => array(2),
		'desktop' => 2,
		'desktop_3d' => 1,
		'stability' => 3,
		'oneclick' => 1,
		'package_manager' => 1,
		'package_dev' => array(1),
		'configurability' => 1,
		'include_livecd' => 1,
		'popularity' => 0.6
	),
	'gentoo' => array(
		'tech_level' => 2,
		'distro_type' => array(1),
		'speed' => 0,
		'install_type' => array(1),
		'desktop' => 3,
		'desktop_3d' => 2,
		'stability' => 3,
		'oneclick' => 0,
		'package_manager' => 4,
		'package_dev' => array(1),
		'configurability' => 2,
		'include_livecd' => 1,
		'popularity' => 0.1
	),
	'slackware' => array(
		'tech_level' => 2,
		'distro_type' => array(1),
		'speed' => 0,
		'install_type' => array(1),
		'desktop' => 3,
		'desktop_3d' => 2,
		'stability' => 3,
		'oneclick' => 0,
		'package_manager' => 5,
		'package_dev' => array(1),
		'configurability' => 2,
		'include_livecd' => 1,
		'popularity' => 0.2
	),
	'puppy' => array(
		'tech_level' => 0,
		'distro_type' => array(1),
		'speed' => 1,
		'install_type' => array(2),
		'desktop' => 5,
		'desktop_3d' => 1,
		'stability' => 2,
		'oneclick' => 1,
		'package_manager' => 6,
		'package_dev' => array(1),
		'configurability' => 0,
		'include_livecd' => 1,
		'popularity' => 0.4
	),
	'mint' => array(
		'tech_level' => 0,
		'distro_type' => array(2),
		'speed' => 1,
		'install_type' => array(2),
		'desktop' => 5,
		'desktop_3d' => 1,
		'stability' => 2,
		'oneclick' => 1,
		'package_manager' => 1,
		'package_dev' => array(1),
		'configurability' => 0,
		'include_livecd' => 1,
		'popularity' => 0.8
	),
	'opensuse' => array(
		'tech_level' => 1,
		'distro_type' => array(2),
		'speed' => 1,
		'install_type' => array(2),
		'desktop' => 1,
		'desktop_3d' => 1,
		'stability' => 3,
		'oneclick' => 1,
		'package_manager' => 2,
		'package_dev' => array(1),
		'configurability' => 1,
		'include_livecd' => 1,
		'popularity' => 0.5
	),
	'ubuntu' => array(
		'tech_level' => 0,
		'distro_type' => array(1, 2),
		'speed' => 2,
		'install_type' => array(1, 2),
		'desktop' => 2,
		'desktop_3d' => 1,
		'stability' => 2,
		'oneclick' => 1,
		'package_manager' => 1,
		'package_dev' => array(1),
		'configurability' => 0,
		'include_livecd' => 1,
		'popularity' => 1
	)
);

$score_details = array();
$corr = array();

function field_corr($field, $input, $dist) {
	global $dists, $score_func;
	if (!isset($dists[$dist][$field]))
		return 0;
	$refscore = $dists[$dist][$field];
	$func = $score_func[$field];
	if (!function_exists($func))
		return 0;
	return $func($input, $refscore);
}

function dist_corr($form) {
	global $dists;
	global $score_details, $corr;
	$corr = array();
	foreach ($dists as $distname => $refscore) {
		$corr[$distname] = 0;
		foreach ($form as $field => $value) {
			$score_details[$distname][$field] = field_corr($field, $value, $distname);
			$corr[$distname] += $score_details[$distname][$field];
		}
	}
	arsort($corr);
	return $corr;
}

function print_feature($form, $dist) {
	global $fields, $dists, $score_func, $score_details, $corr;
	echo '<p>Features for <strong>'.$dist."</strong> (Score: <strong>".$corr[$dist]."</strong>):\n";
	echo '<ul>';
	foreach ($form as $field => $value) {
		if (isset($fields[$field]) && isset($dists[$dist][$field])) {
			echo '<li>';
			echo '('.$score_details[$dist][$field].') ';
			$value = $dists[$dist][$field];
			if (is_array($value)) {
				$rs = array();
				foreach ($value as $v)
					 $rs[] = $fields[$field][$v];
				echo implode(', ', $rs);
			} else if ($score_func[$field] == 'return_rank') {
				$closest = 0;
				$minwidth = 10000;
				foreach ($fields[$field] as $key => $desc)
					if (abs($key - $value) < $minwidth) {
						$closest = $key;
						$minwidth = abs($key - $value);
					}
				echo $fields[$field][$closest]. $value;
			} else if (isset($fields[$field][$value])) {
				echo $fields[$field][$value];
			}
			echo '</li>'."\n";
		}
	}
	echo '</ul>'."\n";
}
