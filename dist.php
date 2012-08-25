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
include "static/public/head.html"
?>

<body>

<div id="wrapper">
  <!-- This is 'background' -->
  <div id="background" class="bg" style="background-image: url(./static/img/<?=$dist?>/<?=$dist?>.jpg); background-repeat: no-repeat">


  <!--This search area-->
  <?php include"static/public/search.html"?>


  <!-- This is 'content-2' -->
      <?php include"static/public/content-2.html"?>

  
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
                    <br>
                    <p><a href="intro.php?dist=<?=$dist?>&package=bash" target="_new"> bash软件</a><p>
                    </div>

            </li>
          	<li id="button-1" class="tab_1 button button-dist">
              	<h2>办公</h2>
                  <div>
                  	<p>办公类内容</p>
                  	<br>
                  	<p><a href="intro.php?dist=<?=$dist?>&package=office" target="_new"> office软件</a><p>
                  </div>
              </li>
          	<li id="button-2" class="tab_2 button button-dist">
              	<h2>学习</h2>
                  <div>
                  	<p>学习类内容</p>
                  	<br>
                    <p><a href="intro.php?dist=<?=$dist?>&package=gimp" target="_new"> gimp软件</a><p>
      			    </div>
              </li>
          	<li id="button-3" class="tab_3 button button-dist">
              	<h2>科学</h2>
                  <div>
                  	<p>科学类内容</p>
                  	<br>
                    <p><a href="intro.php?dist=<?=$dist?>&package=qtiplot" target="_new">qtiplot软件</a><p>
                  </div>
              </li>
          	<li id="button-4" class="tab_4 button button-dist">
              	<h2>娱乐</h2>
                  <div>
                  	<p>娱乐类内容<p>
                  	<br>
                   <p><a href="intro.php?dist=<?=$dist?>&package=kmplayer" target="_new">kmplayer软件</a><p>
                  </div>
              </li>
          	<li id="button-5" class="tab_5 button button-dist">
              	<h2>系统</h2>
                  <div>
                  	<p>系统类内容<p>
                  	<br>
                  	<p><a href="intro.php?dist=<?=$dist?>&package=git" target="_new"> git软件</a><p>

                  </div>
              </li>
          	<li id="button-6" class="tab_6 button button-dist">
              	<h2>其它</h2>
                  <div id="search" name="search" >

                  	<p>其它类内容</p>
                  	<br>
                    <p><a href="intro.php?dist=<?=$dist?>&package=skype" target="_new"> skype软件</a><p>
                  </div>
              </li>
          </ul>
      </div>
    </div>
</div>
</div>
</body>
</html>
