<?php
if (empty($_GET['dist'])) {
	$dist = 'ubuntu';
} else {
	$dist = $_GET['dist'];
}
$distname = $dist;
if ($dist[0] >= 'a' && $dist[0] <= 'z') {
	$distname[0] = chr(ord($dist[0]) - ord('a') + ord('A'));
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
<link rel="stylesheet" type="text/css" href="static/css/style.css" media="screen" />

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

  <!-- This is 'background' -->
  <div id="background" class="bg" style="background-image: url(./static/img/<?=$dist?>/<?=$dist?>.jpg); background-repeat: no-repeat">
    <!-- This is 'content-1' -->
    <div id="content-1" class="content-arch">
    
      <!--<script type="text/javascript" src="../../src/button.js"></script>-->
      <style>
      .button-dist { background-image: url(static/img/<?=$dist?>/button-1.png) }
      </style>
      <div id="button-0" class="button button-dist">小站推荐</div>
      <div id="button-1" class="button button-dist">办公</div>
      <div id="button-2" class="button button-dist">学习</div>
      <div id="button-3" class="button button-dist">科学</div>
      <div id="button-4" class="button button-dist">娱乐</div>
      <div id="button-5" class="button button-dist">其他</div>
      <div id="button-6" class="button button-dist">搜索结果</div>

    </div>

    <!-- This is 'content-2' -->
    <div id="content-2">
      <!-- This is '  calendar' -->
      <div id="calendar" class="calendar"  >
      <img src="./static/img/<?=$dist?>/calendar.png" width="205" height="173" alt="  calendar" class="pngimg" /></div>

      <!-- This is 'home-button' -->
      <div id="home-button" class="home-button" style="background-image:url(./static/img/<?=$dist?>/button-1.png);width:230px;height:55px;border:0px;" >
        <a href="index.html">返回首页</a>
      </div>
      
      <!-- This is 'rb5' -->
      <div id="rb5" class="nav">
      <a href="../centos/centos.html">CentOS</a></div>

      <!-- This is 'rb4' -->
      <div id="rb4" class="nav">
      <a href="../debian/debian.html">Debian</a> </div>

      <!-- This is 'rb3' -->
      <div id="rb3" class="nav">
      <a href="../deepin/deepin.html">Deepin</a></div>

      <!-- This is 'rb2' -->
      <div id="rb2" class="nav">
      <a href="../fedora/fedora.html">Fedora</a></div>

      <!-- This is 'rb1' -->
      <div id="rb1" class="nav">
      <a href="../gentoo/gentoo.html">Gentoo</a> </div>

      <!-- This is 'lb5' -->
      <div id="lb5" class="nav">
      <a href="../mint/mint.html">Mint</a></div>

      <!-- This is 'lb4' -->
      <div id="lb4" class="nav">
      <a href="../opensuse/opensuse.html">Opensuse</a></div>

      <!-- This is 'lb3' -->
      <div id="lb3" class="nav">
      <a href="../puppy/puppy.html">Puppy</a> </div>

      <!-- This is 'lb2' -->
      <div id="lb2" class="nav">
      <a href="../slackware/slackware.html">Slackware</a></div>

      <!-- This is 'lb1' -->
      <div id="lb1" class="nav">
      <a href="../ubuntu/ubuntu.html">Ubuntu</a></div>

    </div>

  </div>
<!--<script>$('#p2c-edit').load('/app/p2cedit/p2cedit.html');</script>-->
</body>
</html>
