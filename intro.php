<?php
if (empty($_GET['dist'])) {
	$dist = 'ubuntu';
} else {
	$dist = addslashes($_GET['dist']);
}
function firstLetterToUpper($word) {
	if ($word[0] >= 'a'&& $word[0] <= 'z') {
		$word[0] = chr(ord($word[0])- ord('a') + ord('A'));
	}
	return $word;
}
$distname = firstLetterToUpper($dist);

if (empty($_GET['package'])) {
	$package = 'bash';
} else {
	$package = addslashes($_GET['package']);
}

include_once "db_init.php";
$distid = mysql_result(mysql_query("SELECT did FROM cz_dist WHERE `name` = '$dist'"), 0);
if (empty($distid)) {
	die('Distribution not found');
}
$rs = mysql_query("SELECT * FROM cz_pack LEFT JOIN cz_pack_detail ON cz_pack.pid=cz_pack_detail.pid WHERE `name` = '$package' AND `did` = '$distid'");
$info = mysql_fetch_array($rs);
if (empty($info)) {
	die('Package not found');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title><?=$distname ?> Software Store !</title>

    <!--方便网站被搜索引擎发现-->
    <meta name="description" content="This page is made for <?=$distname?> users to get software!" />
    <meta name="keywords" content="<?=$distname?>,software,free,unofficial" />


    <!-- The CSS Reset-->
    <!-- <link rel="stylesheet" type="text/css" href="reset.css" media="screen" /> -->

    <!-- The Primary External CSS style sheet. -->
    <link rel="stylesheet" type="text/css" href="static/css/style.css.php?dist=<?=$dist?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="static/css/tab.css.php?dist=<?=$dist?>" media="screen" />
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
            <form action="search_result.php" name="search">
                <table border="0" cellpadding="0" cellspacing="0" class="tab_search">
                    <tr>
                        <td>
                            <input type="text" name="dist=<?=$dist?>&&package=" title="Search" class="searchinput" id="searchinput" onkeydown="if (event.keyCode==13) {}" onblur="if(this.value=='')value='- Search Softwares -';" onfocus="if(this.value=='- Search Softwares -')value='';" value="- Search Softwares -" size="10"/>
                        </td>
                        <td>
                            <input type="image" width="21" height="17" class="searchaction" onclick="if(document.forms['search'].searchinput.value=='- Search Sotfwares -')document.forms['search'].searchinput.value='';" alt="Search" src="static/img/magglass.gif" border="0" hspace="2"/>
                        </td>
                    </tr>
                </table>
                &nbsp;&nbsp;&nbsp;&nbsp;
            </form>

        </div>
        <div id="header">

        </div>
        <!-- This is 'content-1' -->
        <div id="content-3" style="align:center;text-align: left;">
                <table id="brf">
                    <tr class="sw_img">
                        <td>
                            <img src="<?=$info['icon']?>" alt="此处显示软件的图片" width="50px" height="50px" padding="25px">
                        </td>
                        <td class="sw_name">
                            <?=$info['name']?>
                       </td>
                   </tr>
                </table>
                <table class="detail">
                   <tr class="sw_info_1">
                       <td >
                           <p>
                            软件大小：<?=print_filesize($info['filesize'])?>
                            </p>
                       </td>
                       <td >
                           <p>
                              应用平台：<?=$dist?>
                           </p>
                       </td>
                   </tr>
                    <tr class="sw_info_2">
                        <td >
                            <p>
                                更新时间：xx年xx月
                            </p>
                        </td>
                        <td >
                            <p>
                                软件授权：xxx
                            </p>
                        </td>
                    </tr>
                    <tr class="sw_info_1">
                        <td >
                            <p>
                                软件语言：英文
                            </p>
                        </td>
                        <td >
                            <p>
                                软件分类：xx
                            </p>
                        </td>
                    </tr>
                    <tr class="sw_info_2">
                        <td >
                            <p>
                                下载软件
                            </p>
                        </td>
                        <td >
                            <p>
                                下载源码
                            </p>
                        </td>
                    </tr>
                    <tr class="sw_info_1">
                        <td >
                            <p>
                                软件安装
                            </p>
                        </td>
                        <td >
                            <p>
                                源码编译
                            </p>
                        </td>
                    </tr>
                    <tr class="sw_info_2">
                        <td >
                            <p>
                                推荐指数：
                                <img src="static/img/star.png" alt="star" width="20px" height="20px">
                                <img src="static/img/star.png" alt="star" width="20px" height="20px">
                                <img src="static/img/star.png" alt="star" width="20px" height="20px">
                                <img src="static/img/star2.png" alt="star2" width="20px" height="20px">
                                <img src="static/img/star2.png" alt="star2" width="20px" height="20px">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </p>
                        </td>
                        <td >
                            <p>
                                软件评级：
                                <img src="static/img/star.png" alt="star" width="20px" height="20px">
                                <img src="static/img/star.png" alt="star" width="20px" height="20px">
                                <img src="static/img/star.png" alt="star" width="20px" height="20px">
                                <img src="static/img/star2.png" alt="star2" width="20px" height="20px">
                                <img src="static/img/star2.png" alt="star2" width="20px" height="20px">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </p>
                        </td>
                    </tr>
            </table>
            <div class="sw_intro">
                 <h1>软件简介</h1>
                &nbsp;&nbsp;<p style="text-align: left"><?=$info['description']?></p>
            </div>
        </div>
<?php
$packid = $info['pid'];
$comment_count = mysql_result(mysql_query("SELECT COUNT(*) FROM cz_pack_comment WHERE `pid` = '$packid' AND `status` = 'show'"), 0);
?>
        <div id="content-4" >
             <table id="comment">
             <tr class="sum">
                 <td>
                  <pre>用户评论      一共有<?=$comment_count?>条评论</pre>
                 </td>
             </tr>
             <tr class="message">
                 <td>
                       <textarea style=" width: 361px;height:145px;font-size: 15px;"></textarea>
                 </td>
             </tr>
             <tr class="face" style="text-align: left;">
                 <td>

                     <pre>      <img src="static/img/face.jpg" padding="6px">                          <input type="button" value="提交"></pre>
                 </td>
             </tr>
<?php
// show 6 comments at most
$comments = mysql_query("SELECT author, time, content FROM cz_pack_comment WHERE `pid` = '$packid' AND `status` = 'show' ORDER BY time DESC LIMIT 6");
$odd = 1;
while ($comment = mysql_fetch_array($comments)) {
?>
                 <tr class="comment_<?=$odd?>">
                     <td>
                         <?=$comment['author']?> 于 <?=date($comment['time'])?>: <?=$comment['content']?>
                     </td>
                 </tr>
<?php
	$odd = 3 - $odd;
}
?>

             </table>
        </div>
    </div>
    </div>
</div>
</body>
</html>
<?php
function print_filesize($size) {
	return sprintf("%.2F MB", $size/1024/1024);
}
?>
