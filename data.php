<?php

// 实际应用中 data 一般从数据库读取

$data = array();

$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'sadnf', 'comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'cfv','comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'nvc n' ,'comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'xvckjx','comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'zxcv','comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'xcvj' ,'comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'cvbn' ,'comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'cvxcg' ,'comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'vbncn','comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'ieijnn' ,'comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'ncjs' ,'comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'cvksfo' ,'comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'mvnxcvpjvvpo','comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'cmpvmc,vz' ,'comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'cjvjcc;zikxvfj' ,'comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'zxxijv' ,'comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'nz[vna' ,'comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'sdlkjni' ,'comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'llvxc' ,'comments'=>'这个软件是个好软件');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'vnzxcz' ,'comments'=>'这个软件是个好软件');


// 随机抽取9条记录以模拟实际情况
$keys = array_rand($data, 10);

$json = array();
foreach($keys as $key)
{
	$json[] = $data[$key];
}

echo json_encode( $json );

?>