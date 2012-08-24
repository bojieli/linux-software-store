<?php
if (empty($_GET['dist'])) {
	$dist = 'ubuntu';
} else {
	$dist = $_GET['dist'];
}
if (empty($_GET['package'])) {
	$package = 'bash';
} else {
	$package = addslashes($_GET['package']);
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

    <title> Software Store !</title>

    <!--方便网站被搜索引擎发现-->
    <meta name="description" content="This page is made for <?=$distname?> users to get software !" />
    <meta name="keywords" content="<?=$distname?>,software,free,unofficial" />


    <!-- The CSS Reset-->
    <!-- <link rel="stylesheet" type="text/css" href="reset.css" media="screen" /> -->

    <!-- The Primary External CSS style sheet. -->
    <link rel="stylesheet" type="text/css" href="static/css/style.css.php?dist=<?=$dist?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="static/css/tab.css.php?dist=<?=$dist?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="static/css/text.css" media="screen">
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
        <div id="search" style="float:right;padding-right:35px;">
            <br>
            <br>
            <br>
            <br>
            <br>
            <form action="search_result.php" name="search" method="get">
                <table border="0" cellpadding="0" cellspacing="0" class="tab_search">
	 	    <input type="hidden" name="dist" value="<?=$dist?>" />
        	    <tr>
         		<td>
         			<input type="text" name="package" title="Search" class="searchinput" id="searchinput" onkeydown="if (event.keyCode==13) {}" onblur="if(this.value=='')value='- Search Softwares -';" onfocus="if(this.value=='- Search Softwares -')value='';" value="- Search Softwares -" size="10"/>
         		</td>
         		<td>
         			<input type="image" width="21" height="17" class="searchaction" onclick="if(document.forms['search'].searchinput.value=='- Search Sotfwares -')document.forms['search'].searchinput.value='';" alt="Search" src="static/img/magglass.gif" border="0" hspace="2"/>
         		</td>
                    </tr>
                </table>
                &nbsp;&nbsp;&nbsp;&nbsp;
            </form>

        </div>
        <div id="header"></div>
        <!-- This is 'content-1' -->
        <div id="content-1" class="content-arch">

                <p>此处显示软件搜索的结果</p>
            <br>
            <br>
            <pre class="intro"><a href="intro.php?dist=<?=$dist?>&package=<?=$package?>" target="_new"><?=$package?>软件简介</a></pre>
         </div>

        <!-- This is 'content-2' -->
        <div id="content-2">
            <!-- This is 'dist info' -->
            <div id="info" class="info" style="background-image:url(./static/img/info.png);border:0px;text-align: left;">
                  <!--此处盛放%dist的相关信息-->
                <script type="text/javascript" src="./static/js/text_float.js"></script>
                <div class="breakNewsblock">
                    <div id="breakNews">
                        <ul id="breakNewsList" class="list6">
                            <li><a href="http://www.archlinux.org/" target="_blank">Archlinux官方网站</a></li>
                            <li><a href="https://www.centos.org/" target="_blank">Centos官方网站</a></li>
                            <li><a href="http://www.debian.org/" target="_blank">Debian官方网站</a></li>
                            <li><a href="http://www.linuxdeepin.com/" target="_blank">Deepin官方网站</a></li>
                            <li><a href="http://fedoraproject.org/zh_CN/" target="_blank">Fedora官方网站</a></li>
                            <li><a href="http://www.gentoo.org/" target="_blank">Gentoo官方网站</a></li>
                            <li><a href="http://linuxmint.com/" target="_blank">Mint官方网站</a></li>
                            <li><a href="http://www.opensuse.org/zh-cn/" target="_blank">Opensuse官方网站</a></li>
                            <li><a href="http://www.puppylinux.com/" target="_blank">Puppy官方网站</a></li>
                            <li><a href="http://www.slackware.com/" target="_blank">Slackware官方网站</a></li>
                            <li><a href="http://www.ubuntu.org.cn/" target="_blank">Ubuntu官方网站</a></li>
                            <li><a href="http://mirrors.ustc.edu.cn/" target="_blank">科大mirrors源</a></li>
                        </ul>
                        <div class="hit">
                            <span><a style="cursor: pointer;"><img width="11" height="10" id="pre2" alt="上一条" src="static/img/login/none.gif"></a></span>
                            <span><a style="cursor: pointer;"><img width="11" height="10" id="next2" alt="下一条" src="static/img/login/none.gif"></a></span>
                        </div>
                    </div>
                </div>
                <script language="javascript" type="text/javascript">
                    var scroll2 = new ScrollText("breakNewsList","pre2","next2",true,70,true);
                    scroll2.LineHeight = 24;
                </script>


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
