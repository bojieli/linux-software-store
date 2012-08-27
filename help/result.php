<?php
if (empty($_POST)) {
	echo "<script>document.location.href='help.php';</script>";
exit();
}
require_once "dist_corr.inc.php";
$handle = new dist_corr;
$handle->init_form($_POST);
$rank = $handle->dist_corr();
include "public/head.html"?>

<style>
#wrapper { margin: 0 auto; width: 960px;}
.xboxcontent { font-size: 14px; padding: 5px;}
.otherdist { float: left; width: 160px; margin: 10px;}
.clear { clear: both;}
</style>

<body>
<div id="wrapper">
<?php include "public/header.html"?>
<div class="rounded_box lightgrey_borderless">
  <div class="xboxcontent">
    <?php include "public/update_time.html"?>
    <p>我们做过这个小测试，相信您会对您的发行版有了一定的了解！
    <p>当您喜爱的发行版不在此页中时，请即使反馈该问题，发送邮件给<a href="mailto:czluck123@gmail.com"><b>czluck123@gmail.com</b></a>，以便我我们及时更正。
    <p><b>同样, 我们要感谢给我们免费使用权的GNU/Linux的发行版和他们所在的社区开发人员!</b>
    <hr>
    <div class="result" id="result">
    <h2>测试结果</h2>
<?php
foreach ($rank as $dist => $score) {
	unset($rank[$dist]);
	break;
}
?>
<div class="fit-1" id="fit-1">
   <p >最适合您的发行版是：
     <a href="../dist.php?dist=<?=$dist?>" title="点此去找<?=$dist?>的软件"><?=$dist?></a>
   </p>
   <p >匹配程度：<?=$score*10?>%</p>

   </div>
   <div class="fit-2" id="fit-2">
     <a href="../dist.php?dist=<?=$dist?>">
      <img class="dist_png" id="dist_png" src="../static/img/login/<?=$dist?>.png" title="点此去找<?=$dist?>的软件">
    </a>
   </div>
   <br>
   <br>
   <br>
   <ol class="feature">
<?php
$handle->print_feature($dist);
?>
   </ol>
   </div>
   <hr>
   <p>您还可以选择：</p>
<?php
foreach ($rank as $dist => $score) {
?>
     <div class="otherdist">
       <a href="../dist.php?dist=<?=$dist?>" title="点此去找<?=$dist?>的软件"><?=$dist?></a>
       <br>匹配程度：<?=$score*10?>%
       <div>
         <a href="../dist.php?dist=<?=$dist?>"><img class="dist_png" id="dist_png" src="../static/img/login/<?=$dist?>.png" title="点此去找<?=$dist?>的软件"></a>
       </div>
     </div>
<?php
}
?>
   <div class="clear"></div>
   <hr>
   <p><b>感谢你的参与！</b></p>
   <p>感谢您花了一些参与我们的“帮助新手选择linux“发行版&nbsp;
我们期待您的回复，这将有助于我们提高为新手选择linux发行版的准确度。您可以畅所欲言,&nbsp;
不管他们是好的还是不好的评论，我们一定虚心接受您的批评建议。
   <p><b>如果您不愿告诉我们, 那也没关系, 但我们想知道:</b>
   <ul>
     <li>您需要的是哪一个发行版
     <li>结果是否是您期望的/不期望的
     <li>我们怎样才能让您更加满意
     <li>其他的您愿与我们分享的
   </ul>
   <p>如果您希望接受我们的回复<br><i>这是可选的,仅当您需要我们的回复时.</i><br><b>我们仅仅发送中文的回复</b><br>
   <form action="feedback.php" method="POST">
     <input type="hidden" name="sendfeedback" value="true">
     <p>您可以在这儿写评论：</p>
     <textarea name="comment_field" style="width: 100%; height: 150px;"></textarea>
           <b>E-mail地址</b> (如果您愿意接受我们的回信)
           <input type="text" style="background-color: #FFF; border: 1px solid #BBB; width: 250px;" name="email_add">
           <div style="width: 100%; float:right;text-align: center;">
           <input type="submit" value="发送"></div></td>
   </form>
<?php include"public/back_to_home.html"?>
  </div>
</div>

<script type="text/javascript" src="./js/google.js"></script>

</div>
</body>
</html>
