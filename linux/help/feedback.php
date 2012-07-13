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
		<! -- Hack for alphachannel png with IE -->
		<style type="text/css">
		img {
			behavior:	url("pngbehavior.htc");
		}
		</style>
		<link rel="stylesheet" type="text/css" href="standard.css">
		<script type="text/javascript" src="js/prototype.js"></script>
		<script type="text/javascript" src="js/scriptaculous.js"></script>

		<script language="javascript">

			function setHelp(AbC)
			{
				Bb = document.getElementById('helpval');
				Bb.value = AbC;
			}

			function hideHelps()
			{
				Bb = document.getElementById('helpval');
				if (Bb.value != "0")
				{
					showHide("help" + Bb.value);
				}
			}

			function setValue(AbC, AbB, AbA, AbM, AbQ)
			{
				Bb = document.getElementById(AbB);
				//alert(AbB);
				Bb.value = AbC;
				AbMC = 1;
				do
				{
					Bq = document.getElementById("answer_" + AbQ + "_" + AbMC);
					//alert("answer_" + AbQ + "_" + AbMC);
					Bq.className = '';
					AbMC++;
				}
				while (AbMC <= AbM)
				Bc = document.getElementById(AbA);
				Bc.className = 'selected_answer';
			}

		</script>
	</head>
	<body>
		<table border=0 style="height: 100%;width: 100%">
			<tr>
				<td align="center" style="height: 100%; width: 100%">
					<table border=0 style="height: 100%">
						<tr>
							<td valign="middle" style="height: 100%"><table border="0" cellpadding="0" cellspacing="0" style="width: 600px; height: 620px; table-layout: fixed;" id="maintable">
    <tr>
        <td class="header" style="border-bottom: 1px solid #BBB; height: 60px; width: 55px;" align="center" valign="middle"><img border="0" width=48 height=48 src="images/chooser.png"></td>
        <td class="header" style="border-bottom: 1px solid #BBB;"><b>Linux Distribution Chooser</b><font style="font-size: 8pt;"><br>&copy;&nbsp;<a href="http://www.zegeniestudios.net">www.zegeniestudios.net</a><br>( <a href="index.php?firsttime=true">disclaimer / front page</a> )</font></td>
        <td class="header" style="width: 100px; border-bottom: 1px solid #BBB; font-size: 8pt;">&nbsp;</td>
    </tr>
	<tr>
	    <td class="main" colspan="3" style="height: auto;" valign="top">
					<h2 style="margin-bottom: 0px; padding-bottom: 0px;">Feedback</h2>
			(is a good thing)<br>
			<br>
			<b>Thank you!</b><br>
			Thank you for taking the time to send us your thoughts on the LDC (Linux Distribution Chooser).&nbsp;
			We appreciate your feedback, and will use it to improve this service. Feel free to write any comments you have,&nbsp;
			whether they are positive or negative. Improvement suggestions are also nice.<br>
			<br>
			<b>If you don't want to tell us, that's fine, but we would like to know:</b>
			<br>
			&nbsp;&nbsp;&nbsp;<b>*</b>&nbsp;Which distribution(s) was recommended<br>
			&nbsp;&nbsp;&nbsp;<b>*</b>&nbsp;Was this result expected/unexpected<br>
			&nbsp;&nbsp;&nbsp;<b>*</b>&nbsp;How can we improve this service<br>
			&nbsp;&nbsp;&nbsp;<b>*</b>&nbsp;Anything else you want to tell us.<br>
			<br>
			If you want us to get back to you, please also leave your email address below.<br><i>This is completely optional, and only if you want us to reply to your comment.</i><br>
			<br>
			<b>We can only respond to feedback in english or scandinavian languages</b><br>
			<br>
			<form action="feedback.php" method="POST">
			<input type="hidden" name="sendfeedback" value="true">
			<b>Write your comments here:</b><br>
			<textarea name="comment_field" style="width: 100%; height: 150px;"></textarea><br>
			<br>
			<b>Email address</b> (optional, if you want us to reply to your feedback)<br>
			<input type="text" style="background-color: #FFF; border: 1px solid #BBB; width: 250px;" name="email_add">
			<br>
			<br>
			<div style="width: 100%; text-align: right;"><input type="submit" value="Send feedback"></div>
			</form>
					</td>
	</tr>
</table>
</td></tr></table>
</td></tr></table>
</body>
</html>
