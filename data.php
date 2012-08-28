<?php

// 实际应用中 data 一般从数据库读取

$data = array();

$data[] = (object)array('image'=>'static/img/star1.png',  'title'=>'sadnf');
$data[] = (object)array('image'=>'static/img/star1.png',  'title'=>'cfvsxckjvnjzx');
$data[] = (object)array('image'=>'static/img/star1.png',  'title'=>'nvc nx cvnxn,vcbxjcnvb');
$data[] = (object)array('image'=>'static/img/star1.png',  'title'=>'xvckjxncjvnx;jnf;sfg sdfgn;s');
$data[] = (object)array('image'=>'static/img/star1.png',  'title'=>'zxcvx cvksdfg');
$data[] = (object)array('image'=>'static/img/star1.png',  'title'=>'xcvjhasodufafabsv azxc');
$data[] = (object)array('image'=>'static/img/star1.png',  'title'=>'cvbnmkjhgfvbnm,');
$data[] = (object)array('image'=>'static/img/star1.png',  'title'=>'cvxcvsdfgsdfgsdfgsdfg');
$data[] = (object)array('image'=>'static/img/star1.png',  'title'=>'vbncnvndfv dnfvd   kxvnkncv');
$data[] = (object)array('image'=>'static/img/star1.png', 'title'=>'ieijnnvfnvlzxijpvnvcv');
$data[] = (object)array('image'=>'static/img/star1.png', 'title'=>'ncjsdncivncvcv');
$data[] = (object)array('image'=>'static/img/star1.png', 'title'=>'cvkskdmvmshirnrfgnfo');
$data[] = (object)array('image'=>'static/img/star1.png', 'title'=>'mvnxcvldkvnxvl;fijospjvvpo');
$data[] = (object)array('image'=>'static/img/star1.png', 'title'=>';lkoxmocomzxczxcmsd,mcmpvmc,vz');
$data[] = (object)array('image'=>'static/img/star1.png', 'title'=>'cjvjcjvjjcjvjcjxklc;zikxvfj');
$data[] = (object)array('image'=>'static/img/star1.png', 'title'=>'zxcvdkkfjikcxlvxijv');
$data[] = (object)array('image'=>'static/img/star1.png', 'title'=>'nzl;kxnvknfivnsfd[vna');
$data[] = (object)array('image'=>'static/img/star1.png', 'title'=>'sdijnvnxvllksdnjdjjvncxjdlfvnlkjni');
$data[] = (object)array('image'=>'static/img/star1.png', 'title'=>'llllalcmmmkdmvxc');
$data[] = (object)array('image'=>'static/img/star1.png', 'title'=>'vnzxcjvfjnczxcjijdfcdiczcidocn');


// 随机抽取9条记录以模拟实际情况
$keys = array_rand($data, 10);

$json = array();
foreach($keys as $key)
{
	$json[] = $data[$key];
}

echo json_encode( $json );

?>