<?php
if (empty($_POST)) {
	echo "<script>document.location.href='help.html';</script>";
	exit();
}
require_once "dist_corr.inc.php";
$corr = dist_corr($_POST);
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
		<META http-equiv="content-language" content="cn">
		<meta name="author" content="czluck" >
		<META HTTP-EQUIV="Reply-to" CONTENT="czluck123">
		<meta name="generator" content="Bluefish 2.2.2" >
		<META name="keywords" content="linux 发行版 kde gnome rpm apt get">
		<META NAME="description" CONTENT="帮助新手选择发行版">
		<META NAME="Creation_Date" CONTENT="12/07/2012">
		<META name="revisit-after" content="15 days">
		<title>帮助新手选linux发行版</title>
		<!-- Hack for alphachannel png with IE -->
		<style type="text/css">
		img {
			behavior:	url("pngbehavior.htc");
		}
		</style>
		<link rel="stylesheet" type="text/css" href="standard.css">
		<script type="text/javascript" src="js/prototype.js"></script>
		<script type="text/javascript" src="js/scriptaculous.js"></script>

		<script type="text/javascript" src="js/help.js"></script>

		
	</head>
	<body>
		<table border=0 style="height: 100%;width: 100%">
			<tr>
				<td align="center" style="height: 100%; width: 100%">
					<table border=0 style="height: 100%">
						<tr>
							<td valign="middle" style="height: 100%">
							<table border="0" cellpadding="0" cellspacing="0" style="width: 600px; height: 620px; table-layout: fixed;" id="maintable">
  						  		<tr>
        						<td class="header" style="border-bottom: 1px solid #BBB; height: 60px; width: 55px;" align="center" valign="middle">
        								<img border="0" width=48 height=48 src="images/chooser.png">
        						</td>
        						<td class="header" style="border-bottom: 1px solid #BBB;"><b>帮助新手选择发行版</b>
        						<font style="font-size: 8pt;">
        							<br>&copy;&nbsp;<a href="../../index.html">linux software store</a>
        							<br>( <a href="questionnaire.html">测试页面</a> )</font>
        						</td>
       						 <td class="header" style="width: 100px; border-bottom: 1px solid #BBB; font-size: 8pt;">&nbsp;</td>
   						 </tr>
					   <tr>
	    					<td class="main" colspan="3" style="height: auto;" valign="top">
							<h2 style="margin-bottom: 0px; padding-bottom: 0px;">反馈结果</h2>
                      <div>
                      <!----此处用来展示linux 选择推荐的linux发行版---->
                      </div>						
							
							
							
							<br>
							<br>
							<b>感谢你的参与！</b>
							<br>
								感谢您花了一些参与我们的“帮助新手选择linux“发行办&nbsp;
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
									<input type="hidden" name="sendfeedback" value="true">
									<b>您可以在这儿写评论：</b><br>
									<textarea name="comment_field" style="width: 100%; height: 150px;"></textarea><br>
									<br>
									<b>E-mail地址</b> (如果您愿意接受我们的回信)<br>
									<input type="text" style="background-color: #FFF; border: 1px solid #BBB; width: 250px;" name="email_add">
									<br>
			
									<br>
									<div style="width: 100%; text-align: right;"><input type="submit" value="Send feedback"></div>
									</form>
					</td>
						</tr>
							</table>
				</td>
						</tr>
						</table>
				</td>
				</tr>
		</table>
</body>
</html>
