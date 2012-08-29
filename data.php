<?php

// 实际应用中 data 一般从数据库读取

$data = array();

$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'sadnf', 'comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'cfv','comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'nvc n' ,'comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'xvckjx','comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'zxcv','comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'xcvj' ,'comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'cvbn' ,'comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'cvxcg' ,'comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png',  'name'=>'vbncn','comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'ieijnn' ,'comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'ncjs' ,'comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'cvksfo' ,'comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'mvnxcvpjvvpo','comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'cmpvmc,vz' ,'comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'cjvjcc;zikxvfj' ,'comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'zxxijv' ,'comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'nz[vna' ,'comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'sdlkjni' ,'comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'llvxc' ,'comments'=>$name+'这个软件是个好东西');
$data[] = (object)array('image'=>'static/img/star1.png', 'name'=>'vnzxcz' ,'comments'=>$name+'这个软件是个好东西');


// 随机抽取9条记录以模拟实际情况
$keys = array_rand($data, 10);

$json = array();
foreach($keys as $key)
{
	$json[] = $data[$key];
}

echo json_encode( $json );

?>