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

<body>
<table border=0 style="height: 100%;width: 100%">
    <tr>
        <td align="center" style="height: 100%; width: 100%">
            <table border=0 style="height: 100%">
                <tr>
                    <td valign="middle" style="height: 100%">
                        <?php include"public/header.html"?>
                        <div class="rounded_box lightgrey_borderless" style="margin-bottom: 5px;">
                            <div class="xboxcontent" style="vertical-align: middle; padding: 5px;">
                                <table border="0" cellpadding="0" cellspacing="0" style="width: 850px; height: 570px; table-layout: fixed;" dir="ltr" class="maintable">
                                    <tr>
                                        <td class="main" colspan="3" style="height: auto; padding-top: 5px;" valign="top">
                                            <?php include"public/update_time.html"?>
                                            <table>
                                                <tr>
                                                    <td style="width: auto; padding: 5px 10px 0 5px;">
                                                        我们做过这个小测试，相信您会对您的发行版有了一定的了解！
                                                        <p>当您喜爱的发行版不在此页中时，请即使反馈该问题，发送邮件给<a href="mailto:czluck123@gmail.com"><b>czluck123@gmail.com</b></a>，以便我我们及时更正。
                                                        <p><b>同样, 我们要感谢给我们免费使用权的GNU/Linux的发行版和他们所在的社区开发人员!</b>
                                                            <br style="clear: both;">
                                                            <br>

                                                        <br>

                                                    </td>
                                                    </tr>
                                                <tr>
                                                    <td>
                                                       <h2 style="margin-bottom: 0px; padding-bottom: 0px;">测试结果</h2>
                                                      <table>
                                                      <tr>
                                                       <td class="data">
                                                          <?php
                                                           foreach ($rank as $dist => $score) {
	                                                       break;
                                                          }
                                                         ?>
                                                            <p class="result">最适合您的发行版是：<a href="../dist.php?dist=<?=$dist?>" title="点此去找<?=$dist?>的软件"><?=$dist?></a></p>
                                                            <p class="result">匹配程度：<?=$score*10?>%</p>
                                                            <div class="dist_png"><a href="../dist.php?dist=<?=$dist?>"><img src="../static/img/login/<?=$dist?>.png" title="点此去找<?=$dist?>的软件"></a></div>
                                                            <ol class="feature">
                                                            <?php
                                                             $handle->print_feature($dist);
                                                              ?>
                                                            </ol>
                                                        </td>
                                                        <?php include"public/distro_name.html"?>
                                                        </tr>
                                                        <tr>
                                                            <td class="otherdist">
                                                            <p>您还可以选择：</p>
                                                            <dl>
                                                                <?php
                                                                    $first = true;
                                                                    foreach ($rank as $dist => $score) {
	                                                                if (!$first) {
                                                                ?>
                                                                <dt class="dist_get"><a href="../dist.php?dist=<?=$dist?>" title="点此去找<?=$dist?>的软件"><?=$dist?></a>
                                                                <div class="dist_png"><a href="../dist.php?dist=<?=$dist?>"><img src="../static/img/login/<?=$dist?>.png" title="点此去找<?=$dist?>的软件"></a></div></dt>
                                                                <dd >匹配程度：<?=$score*10?>%
                                                               </dd>
                                                                <?php
	                                                               }
	                                                         $first = false;
                                                            }
                                                         ?>
                                                              </dl>
                                                        </tr>


                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
        <br>
        <br>
        <b>感谢你的参与！</b>
        <br>
感谢您花了一些参与我们的“帮助新手选择linux“发行版&nbsp;
我们期待您的回复，这将有助于我们提高为新手选择linux发行版的准确度。您可以畅所欲言,&nbsp;
不管他们是好的还是不好的评论，我们一定虚心接受您的批评建议。<br>
        <br>
        <b>如果您不愿告诉我们, 那也没关系, 但我们想知道:</b>
        <br>
&nbsp;&nbsp;&nbsp;<b>*</b>&nbsp;您需要的是哪一个发行版<br>
&nbsp;&nbsp;&nbsp;<b>*</b>&nbsp;结果是否是您期望的/不期望的<br>
&nbsp;&nbsp;&nbsp;<b>*</b>&nbsp;我们怎样才能让您更加满意<br>
&nbsp;&nbsp;&nbsp;<b>*</b>&nbsp;其他的您愿与我们分享的.<br>
        <br>
        如果您希望接受我们的回复<br><i>这是可选的,仅当您需要我们的回复时.</i><br>
        <br>
        <b>我们仅仅发送中文的回复</b><br>
        <br>

        <form action="feedback.php" method="POST">
        <table>
                <tr>
        <input type="hidden" name="sendfeedback" value="true">
        <b>您可以在这儿写评论：</b><br>
        <textarea name="comment_field" style="width: 100%; height: 150px;"></textarea><br>
        <br>
        </tr>
        <tr>
            <td>
                <b>E-mail地址</b> (如果您愿意接受我们的回信)
                <br>
                <input type="text" style="background-color: #FFF; border: 1px solid #BBB; width: 250px;" name="email_add">
            </td>
            <td>
                <div style="width: 100%; float:right;text-align: center;">
                <input type="submit" value="发送"></div></td>
        </tr>
             <tr><td><?php include"public/back_to_home.html"?></td></tr></table>



        </form>

        </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<script type="text/javascript" src="./js/google.js"></script>

</body>
</html>
