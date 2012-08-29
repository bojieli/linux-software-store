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

/*include_once "db_init.php";
$distid = mysql_result(mysql_query("SELECT did FROM cz_dist WHERE `name` = '$dist'"), 0);
if (empty($distid)) {
	die('Distribution not found');
}
$rs = mysql_query("SELECT * FROM cz_pack LEFT JOIN cz_pack_detail ON cz_pack.pid=cz_pack_detail.pid WHERE `name` = '$package' AND `did` = '$distid'");
$info = mysql_fetch_array($rs);
if (empty($info)) {
	die('Package not found');
}*/
include "static/public/head.html"
?>

<body>

<div id="wrapper">
    <!-- This is 'background' -->
    <div id="background" class="bg">
        <?php include"static/public/search.html"?>
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

                            <?=$package?>

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
                              应用平台：<?=$dist?> x86_64 , i386
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
                                软件授权：GPL
                            </p>
                        </td>
                    </tr>
                    <tr class="sw_info_1">
                        <td >
                            <p>
                                软件语言：UTF8,中文
                            </p>
                        </td>
                        <td >
                            <p>
                                软件分类：生活 网络 浏览器
                            </p>
                        </td>
                    </tr>
                    <tr class="sw_info_2">
                        <td >
                            <pre>下载软件: <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">x86_64</a>  <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">i386</a>
                            </pre>
                        </td>
                        <td >
                           <pre>下载源码: <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">x86_64</a>  <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">i386</a>
                           </pre>
                        </td>
                    </tr>
                    <tr class="sw_info_1">
                        <td >
                            <pre>软件安装: <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">x86_64</a>  <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">i386</a>
                            </pre>
                        </td>
                        <td >
                             <pre>源码编译: <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">x86_64</a>  <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">i386</a>
                             </pre>

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
                &nbsp;&nbsp;<p style="text-align: left">/*<?=$info['description']?>*/<?=$package?>是一个好软件啊</p>
            </div>
        </div>
/*<?php
$packid = $info['pid'];
$comment_count = mysql_result(mysql_query("SELECT COUNT(*) FROM cz_pack_comment WHERE `pid` = '$packid' AND `status` = 'show'"), 0);
?>*/
        <div id="content-4" >
             <table id="comment">
             <tr class="sum">
                 <td>
                  <pre>用户评论      一共有/*<?=$comment_count?>*/6条评论</pre>
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
//$comments = mysql_query("SELECT author, time, content FROM cz_pack_comment WHERE `pid` = '$packid' AND `status` = 'show' ORDER BY time DESC LIMIT 6");
$odd = 6;
while ($odd//$comment = mysql_fetch_array($comments)) {
?>
                 <tr class="comment_<?=$odd?>">
                     <td>
                         //<?=$comment['author']?> 于 <?=date($comment['time'])?>: <?=$comment['content']?>
                         bnlsjkdfsdsdfkjdfa;dslfjasd msada dsasdav vasdnv;aj;ndsva;sjdvnas;vansdvjbadbjadfbdbf asldfa
                     </td>
                 </tr>
<?php
	$odd=$odd-1;
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
