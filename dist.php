﻿<?php
if (empty($_GET['dist'])) {
	$dist = 'ubuntu';
} else {
	$dist = $_GET['dist'];
}
$distname = $dist;
if ($dist[0]>='a'&& $dist[0] <= 'z') {
	$distname[0] = chr(ord($dist[0])- ord('a') + ord('A'));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?=$distname ?> Software Store !</title>

<!--方便网站被搜索引擎发现-->
<meta name="description" content="This page is made for <?=$distname?> users to get software !" />
<meta name="keywords" content="<?=$distname?>,software,free,unofficial" />


<!-- The CSS Reset-->
<!-- <link rel="stylesheet" type="text/css" href="reset.css" media="screen" /> -->

<!-- The Primary External CSS style sheet. -->
<link rel="stylesheet" type="text/css" href="static/css/style.css.php?dist=<?=$dist?>" media="screen" />
<link rel="stylesheet" type="text/css" href="static/css/tab.css.php?dist=<?=$dist?>" media="screen" />
<!-- 选项卡切换个效果标签位置 -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<!-- 浏览器兼容性 -->
<!--[if lt IE 7 ]>
<script type="text/javascript" src="DD_belatedPNG_0.0.8a-min.js"></script>
<![endif]-->

<!-- All the javascript generated for your design is in this file -->
<script type="text/javascript" src="static/js/style.js"></script>

</head>
<body>
<div id="wrapper">
  <!-- This is 'background' -->
  <div id="background" class="bg" style="background-image: url(./static/img/<?=$dist?>/<?=$dist?>.jpg); background-repeat: no-repeat">
    <!-- This is 'content-1' -->
    <div id="content-1" class="content-arch">
      <script type="text/javascript" language="javascript" src="./static/js/jquery-1.7.1.min.js"></script>
      <script type="text/javascript" src="static/js/tab.js"></script>
      
      <div class="tabs">
      	<ul>
          	<li id="button-0" class="first tab_0 button button-dist">
              	<h2 class="active">小站推荐</h2>
                  <div>
                  	小站推荐内容
                  </div>
              </li>
          	<li id="button-1" class="tab_1 button button-dist">
              	<h2>办公</h2>
                  <div>
                  	办公类内容
                  </div>
              </li>
          	<li id="button-2" class="tab_2 button button-dist">
              	<h2>学习</h2>
                  <div>
                  	学习类内容
      			</div>
              </li>
          	<li id="button-3" class="tab_3 button button-dist">
              	<h2>科学</h2>
                  <div>
                  	科学类内容
                  </div>
              </li>
          	<li id="button-4" class="tab_4 button button-dist">
              	<h2>娱乐</h2>
                  <div>
                  	娱乐类内容
                  </div>
              </li>
          	<li id="button-5" class="tab_5 button button-dist">
              	<h2>其他</h2>
                  <div>
                  	其他类内容
                  </div>
              </li>
          	<li id="button-6" class="tab_6 button button-dist">
              	<h2>搜索结果</h2>
                  <div>
                  	搜索结果内容
                  </div>
              </li>
          </ul>
      </div>
    </div>

    <!-- This is 'content-2' -->
    <div id="content-2">
      <!-- This is '  calendar' -->
      <div id="calendar" class="calendar"  >
      <img src="./static/img/<?=$dist?>/calendar.png" width="205" height="173" alt="calendar" class="pngimg" /></div>

      <!-- This is 'home-button' -->
      <div id="home-button" class="home-button" style="background-image:url(./static/img/<?=$dist?>/button-1.png);width:230px;height:55px;border:0px;" >
        <a href="index.html">返回首页</a>
      </div>
     
     
     
      <!-------------这里可能要修改成PHP了因为此处可能产生一个指向自身的超链接------------
             
      //              此处我觉得可以采用字符串数组存放每个dist-name,用for循环控制输出
      
      //              这样应该不会有产生重复的链接了------------------------------------>
      <!-- This is 'rb5' -->
      <div id="rb5" class="nav">
      <a href="dist.php?dist=centos">CentOS</a></div>

      <!-- This is 'rb4' -->
      <div id="rb4" class="nav">
      <a href="dist.php?dist=debian">Debian</a> </div>

      <!-- This is 'rb3' -->
      <div id="rb3" class="nav">
      <a href="dist.php?dist=deepin">Deepin</a></div>

      <!-- This is 'rb2' -->
      <div id="rb2" class="nav">
      <a href="dist.php?dist=fedora">Fedora</a></div>

      <!-- This is 'rb1' -->
      <div id="rb1" class="nav">
      <a href="dist.php?dist=gentoo">Gentoo</a> </div>

      <!-- This is 'lb5' -->
      <div id="lb5" class="nav">
      <a href="dist.php?=mint">Mint</a></div>

      <!-- This is 'lb4' -->
      <div id="lb4" class="nav">
      <a href="dist.php?dist=opensuse">Opensuse</a></div>

      <!-- This is 'lb3' -->
      <div id="lb3" class="nav">
      <a href="dist.php?dist=puppy">Puppy</a> </div>

      <!-- This is 'lb2' -->
      <div id="lb2" class="nav">
      <a href="dist.php?dist=slackware">Slackware</a></div>

      <!-- This is 'lb1' -->
      <div id="lb1" class="nav">
      <a href="dist.php?dist=ubuntu">Ubuntu</a></div>

    </div>
   </div>
  </div>
</body>
</html>
