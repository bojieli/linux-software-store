<?php
if (empty($_GET['dist'])) {
	$dist = 'ubuntu';
} else {
	$dist = $_GET['dist'];
}
function firstLetterToUpper($word) {
	if ($word[0] >= 'a'&& $word[0] <= 'z') {
		$word[0] = chr(ord($word[0])- ord('a') + ord('A'));
	}
	return $word;
}
$distname = firstLetterToUpper($dist);
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
<div id="search" style="float:right;padding top:80px;padding right:140px;font-size:30px;">
         <br>
         <form action="dist.php" method="post">
         <p><input type="text" name="dist" class="input"> <input type="submit" class="sear_btn" value="搜索"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         </form>
 </div>
    <div id="header"></div>
    <!-- This is 'content-1' -->
    <div id="content-1" class="content-arch">
      <script type="text/javascript" language="javascript" src="./static/js/jquery-1.7.1.min.js"></script>
      <script type="text/javascript" src="static/js/tab.js"></script>
      <script src="./static/js/jquery1.3.2.js" type="text/javascript"></script>
      <script type="text/javascript" src="./static/js/intro.js"></script>

      <div class="tabs">
      	<ul>
          	<li id="button-0" class="first tab_0 button button-dist">
              	<h2 class="active">小站推荐</h2>
                  <div>
                  	<p>小站推荐内容</p>
                  	<div id="panel" >
                        <h5 class="head" >
                            <table>
                                <tr>
                            <td class="img" align="left">
                                <img src="" width="50px" height="50px" alt="此处存放软件图片">
                            </td>
                            <td >
                                <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    此处填写软件的简介</div>
                            </td>
                        </table>
                        </h5>
                        <div class="content">
                           <table >
                               <tr>
                                 <td> 下载链接: <a href="http://mirrors.ustc.edu.cn" target="_new">下载deb包</a>&nbsp;
                                                <a href="http://mirrors.ustc.edu.cn" target="_new">下载gz包</a>
                                 </td>


                                   <td>
                                      如何安装: <a href="http://mirrors.ustc.edu.cn" target="_new">安装deb包</a>&nbsp;
                                               <a href="http://mirrors.ustc.edu.cn" target="_new">安装gz包</a>
                                   </td>
                               </tr>
                             <tr>

                               <tr>

                                   <td align="center" class="">

                                       软件得分:
                                       <br>
                                        实用性:<img src="./static/img/star.png" width="20px" height="20px" alt="">
                                              <img src="./static/img/star.png" width="20px" height="20px" alt="">
                                              <img src="./static/img/star.png" width="20px" height="20px" alt="">
                                              <img src="./static/img/star2.png" width="20px" height="20px" alt="">
                                              <img src="./static/img/star2.png" width="20px" height="20px" alt="">

                                        <br>
                                        美观性:<img src="./static/img/star.png" width="20px" height="20px" alt="">
                                              <img src="./static/img/star.png" width="20px" height="20px" alt="">
                                              <img src="./static/img/star.png" width="20px" height="20px" alt="">
                                              <img src="./static/img/star2.png" width="20px" height="20px" alt="">
                                              <img src="./static/img/star2.png" width="20px" height="20px" alt="">
                                       <br>
                                        推荐度:<img src="./static/img/star.png" width="20px" height="20px" alt="">
                                              <img src="./static/img/star.png" width="20px" height="20px" alt="">
                                              <img src="./static/img/star.png" width="20px" height="20px" alt="">
                                              <img src="./static/img/star2.png" width="20px" height="20px" alt="">
                                              <img src="./static/img/star2.png" width="20px" height="20px" alt="">
                                       <br>
                                   </td>
                                   <td>
                                       对软件评价:
                                       <form action="" method="get">
                                            &nbsp;&nbsp;<textarea  rows="2" cols="35" value="输入您的评价"></textarea>

                                       <br>
                                       <input type="button" value="提交" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="button" value="取消" >
                                       </form>
                                   </td>
                               </tr>
                           </table>
                        </div>
                    </div>

            </li>
          	<li id="button-1" class="tab_1 button button-dist">
              	<h2>办公</h2>
                  <div>
                  	<p>办公类内容</p>
                  </div>
              </li>
          	<li id="button-2" class="tab_2 button button-dist">
              	<h2>学习</h2>
                  <div>
                  	<p>学习类内容</p>

      			    </div>
              </li>
          	<li id="button-3" class="tab_3 button button-dist">
              	<h2>科学</h2>
                  <div>
                  	<p>科学类内容</p>

                  </div>
              </li>
          	<li id="button-4" class="tab_4 button button-dist">
              	<h2>娱乐</h2>
                  <div>
                  	<p>娱乐类内容<p>

                  </div>
              </li>
          	<li id="button-5" class="tab_5 button button-dist">
              	<h2>其他</h2>
                  <div>
                  	<p>其他类内容<p>

                  </div>
              </li>
          	<li id="button-6" class="tab_6 button button-dist">
              	<h2>搜索结果</h2>
                  <div id="search" name="search" >

                  	<p>搜索结果内容</p>

                  </div>
              </li>
          </ul>
      </div>
    </div>

    <!-- This is 'content-2' -->
    <div id="content-2">
      <!-- This is 'dist info' -->
      <div id="info" class="info" style="background-image:url(./static/img/info.png);border:0px;">


      <!--此处盛放%dist的相关信息-->


      <p>官网信息</p>
      <br>
      <p>下载镜像</p>
      <br>
      <p>最新软件</p>

      </div>

      <!-- This is 'home-button' -->
      <div id="home-button" class="home-button" style="background-image:url(./static/img/<?=$dist?>/button-1.png);width:230px;height:55px;border:0px;" >
        <a href="index.html" style="font-size:30px;">返回首页</a>
      </div>

      <?php $dists = array('archlinux', 'centos', 'debian', 'deepin', 'fedora', 'gentoo', 'mint', 'opensuse', 'puppy', 'slackware', 'ubuntu');
      foreach ($dists as $d) 
      	if ($d != $dist) { ?>
      <div class="nav"><a href="dist.php?dist=<?=$d?>"><?=firstLetterToUpper($d) ?></a></div>
      <?php } ?>
    </div>
  </div>
</div>
</body>
</html>
