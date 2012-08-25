<?php include"/public/head.html"?>
<body>
<table border=0 style="height: 100%;width: 100%">
<tr>
<td align="center" style="height: 100%; width: 100%">
<table border=0 style="height: 100%">
<tr>
<td valign="middle" style="height: 100%">
<div class="rounded_box iceblue_borderless" style="margin-bottom: 0;">
    <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
    <div class="xboxcontent" style="vertical-align: middle; padding: 5px;"></div>
     <?php include "public/header.html"?>
    <b class="xbottom"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
</div>
<div class="rounded_box lightgrey_borderless" style="margin-bottom: 5px;">
<div class="xboxcontent" style="vertical-align: middle; padding: 5px;">
<table border="0" cellpadding="0" cellspacing="0" style="width: 850px; height: 570px; table-layout: fixed;" dir="ltr" class="maintable">
<tr>
<td class="main" colspan="3" style="font-size:15px;height: auto;" valign="top">
<b>欢迎</b>
<br>这部分是帮助你决定你所需要的发行版的互动环节. 在我们开始前，请回答下列问题.<br>
<br>
<div class="rounded_box iceblue" style="margin-bottom: 10px;">
    <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
    <div class="xboxcontent" style="vertical-align: middle; padding: 0; font-weight: bold; font-size: 14px;">
        <table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;">
            <tr>
                <td style="width: 20px; padding: 5px;" align="center" valign="middle">
                    <img src="images/info.png">
                </td>
                <td style="width: auto; padding-left: 0; text-align: left;" valign="middle">
                    这部分问题有助与我们了解你的计算机知识水平(包括你的是否安装过系统、计算机的硬件、用途、喜好桌面环境等等)。
                </td>
            </tr>
        </table>
    </div>
    <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
    <!--此处以下是调查问卷的主要内容-->
</div>
<br>
<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;" class="questionblock" id="q1">
    <tr>
        <td style="width: 50px; padding-bottom: 5px;" align="center" valign="middle">
            <img border="0" width=32 height=32  src="images/distro.png">
        </td>
        <td align="left" style="padding-bottom: 5px;" valign="middle">
            <b>你使用过linux吗？</b>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width=16 height=16 src="images/forward.png">
        </td>
        <td id="answer_1_1" style="padding: 2px; height: auto;" valign="middle">
            <a class="fu" href="javascript:void(0);" onclick="$('q2').appear();setValue('0','tech_level','answer_1_1','2','1');hideHelps();">
                没有</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width=16 height=16 src="images/forward.png">
        </td>
        <td id="answer_1_2" style="padding: 2px; height: auto;" valign="middle">
            <a class="fu" href="javascript:void(0);" onclick="$('q2').appear();setValue('1','tech_level','answer_1_2','2','1');hideHelps();">
                是的，只使用过图形界面</a>

    <tr>
         <td style="padding: 2px;" align="right" valign="middle">
              <img border="0" width=16 height=16 src="images/forward.png">
          </td>
          <td id="answer_1_3" style="padding: 2px; height: auto;" valign="middle">
              <a class="fu" href="javascript:void(0);" onclick="$('q2').appear();setValue('2','tech_level','answer_1_3','2','1');hideHelps();">
                  是的，使用过终端命令</a>
           </td>
     </tr>

      <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
</table>
<br>
<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;display: none;" class="questionblock" id="q2">
    <tr>
        <td style="width: 50px; padding-bottom: 5px;" align="center" valign="middle">
            <img border="0" width=32 height=32  src="images/install.png">
        </td>
        <td align="left" style="padding-bottom: 5px;" valign="middle">
            <b>这台电脑的主要用途是？</b>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width=16 height=16 src="images/forward.png">
        </td>
        <td id="answer_2_1" style="padding: 2px; height: auto;" valign="middle">
            <a class="fu" href="javascript:void(0);" onclick="$('q3').appear();setValue('1','distro_type','answer_2_1','2','2');hideHelps();">
                家庭/个人</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width=16 height=16 src="images/forward.png">
        </td>
        <td id="answer_2_2" style="padding: 2px; height: auto;" valign="middle">
            <a class="fu" href="javascript:void(0);" onclick="$('q3').appear();setValue('2','distro_type','answer_2_2','2','2');hideHelps();">
                服务器</a>
        </td>
    </tr>
</table>
<br>
<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;display: none;" class="questionblock" id="q3">
    <tr>
        <td style="width: 50px; padding-bottom: 5px;" align="center" valign="middle">
            <img border="0" width="32" height="32" src="images/partition.png">
        </td>
        <td align="left" style="padding-bottom: 5px;" valign="middle">
            <b>你对操作系统的速度有何要求？</b>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="./images/forward.png">
        </td>
        <td id="answer_3_1" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q4').appear();setValue('0','speed','answer_3_1','3','1');hideHelps();">极致的速度，哪怕不方便使用。</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="./images/forward.png">
        </td>
        <td id="answer_3_2" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q4').appear();setValue('1','speed','answer_3_2','3','1');hideHelps();">速度和易用性间的折中。</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="./images/forward.png">
        </td>
        <td id="answer_3_3" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q4').appear();setValue('2','speed','answer_3_3','3','1');hideHelps();">有比较炫的桌面效果，不追求速度。</a>
        </td>
    </tr>
</table>
<br>
<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;display: none; " class="questionblock" id="q4">
    <tr>
        <td style="width: 50px; padding-bottom: 5px;" align="center" valign="middle">
            <img border="0" width="32" height="32" src="./images/graph_text.png">
        </td>
        <td align="left" style="padding-bottom: 5px;" valign="middle">
            <b>你喜欢那种安装方式？</b>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="./images/forward.png">
        </td>
        <td id="answer_4_1" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q5').appear();setValue('2','install_type','answer_4_1','4','2');hideHelps();">图形化安装(指针和点击)</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="./images/forward.png">
        </td>
        <td id="answer_4_2" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q5').appear();setValue('1','install_type','answer_4_2','4','2');hideHelps();">文本方式(只使用键盘)</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="./images/forward.png">
        </td>
        <td id="answer_4_3" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q5').appear();setValue('0','install_type','answer_4_3','4','2');hideHelps();">我不关心，只要方便就好</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="./images/info.png">
        </td>
        <td id="answer_4_4" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('help3').appear();setHelp('2');setValue('0','install_type','answer_4_4','4','2');">它们的区别是什么？</a>
            <br>
            <div class="helpblock" id="help3" style="width: 350px;display:none;">
                <div class="rounded_box white" style="margin-bottom: 10px;">
                    <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
                    <div class="xboxcontent" style="vertical-align: middle; padding: 0; font-weight: bold; font-size: 14px;">
                        <table border="0" cellpadding="0" cellspacing="0" style="table-layout: auto;">
                            <tr>
                                <td style="padding: 10px;" colspan="2">
                                    图形化安装方式看起来就像在安装windows的软件一样,
                                    而文本方式安装就像在DOS下安装软件一样。
                                    两种方式安装完毕后你都会有一个标准的桌面环境。
                                    一些人喜欢图形化方式，而另一些人喜欢文本方式。
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px;" align="right" valign="middle">
                                    <img border="0" width="16" height="16" src="./images/forward.png">
                                </td>
                                <td id="answer_4_5" style="padding: 2px; height: auto;" valign="middle">
                                    <a href="javascript:void(0);" onclick="$('help3').toggle();$('q5').appear();setValue('0','install_type','answer_4_4','4','2');setHelp('0');">好的</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
                </div>
            </div>
        </td>
    </tr>
</table>
<br>
<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;display: none; " class="questionblock" id="q5">
    <tr>
        <td style="width: 50px; padding-bottom: 5px;" align="center" valign="middle">
            <img border="0" width="32" height="32" src="images/technical.png">
        </td>
        <td align="left" style="padding-bottom: 5px;" valign="middle">
            <b>你喜欢什么桌面环境？</b>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_5_1" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q6').appear();setValue('1','desktop','answer_5_1','3','1');hideHelps();">我喜欢KDE桌面。</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_5_2" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q6').appear();setValue('2','desktop','answer_5_2','3','1');hideHelps();">我喜欢GNOME桌面。</a></td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_5_3" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q6').appear();setValue('3','desktop','answer_5_3','3','1');hideHelps();">我喜欢自由选择其他的桌面环境。</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_5_4" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q6').appear();setValue('4','desktop','answer_5_4','3','1');hideHelps();">我喜欢类似Windows的桌面。</a></td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_5_5" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q6').appear();setValue('5','desktop','answer_5_5','3','1');hideHelps();">我喜欢类似Mac的桌面。</a></td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_5_6" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q6').appear();setValue('0','desktop','answer_5_6','3','1');hideHelps();">我不在乎。</a></td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/info.png">
        </td>
        <td id="answer_5_7" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('help4').appear();setHelp('1');setValue('0','desktop','answer_5_7','5','1');">
                有什么区别？</a>
            <br>
            <div class="helpblock" id="help4" style="display: none; width: 350px;">
                <div class="rounded_box white" style="margin-bottom: 10px;">
                    <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
                    <div class="xboxcontent" style="vertical-align: middle; padding: 0; font-weight: bold; font-size: 14px;">
                        <table border="0" cellpadding="0" cellspacing="0" style="table-layout: auto;">
                            <tr>
                                <td style="padding: 10px;" colspan="2">
                                    如果你想知道更多不同的桌面环境，请选择下面的
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px;" align="right" valign="middle">
                                    <img border="0" width="16" height="16" src="images/browser.png">
                                </td>
                                <td style="padding: 2px; height: auto;" valign="middle">
                                    <a href="http://www.kde.org/" target="_new" onclick="$('help4').toggle();setHelp('0');$('q6').appear();">
                                        我想知道更多关于KDE
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px;" align="right" valign="middle">
                                    <img border="0" width="16" height="16" src="images/browser.png">
                                </td>
                                <td style="padding: 2px; height: auto;" valign="middle">
                                    <a href="http://www.gnome.org/" target="_new" onclick="$('help4').toggle();setHelp('0');$('q6').appear();">
                                        我想知道更多关于GNOME</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px;" align="right" valign="middle">
                                    <img border="0" width="16" height="16" src="images/browser.png">
                                </td>
                                <td style="padding: 2px; height: auto;" valign="middle">
                                    <a href="http://zh.wikipedia.org/wiki/Mac_OS" target="_new" onclick="$('help4').toggle();setHelp('0');$('q6').appear();">
                                        我想知道更多关于Mac os。</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px;" align="right" valign="middle">
                                    <img border="0" width="16" height="16" src="images/browser.png">
                                </td>
                                <td style="padding: 2px; height: auto;" valign="middle">
                                    <a href="http://zh.wikipedia.org/wiki/Windows" target="_new" onclick="$('help4').toggle();setHelp('0');$('q6').appear();">
                                        我想知道更多关于Windows。</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px;" align="right" valign="middle">
                                    <img border="0" width="16" height="16" src="images/forward.png">
                                </td>
                                <td id="answer_" style="padding: 2px; height: auto;" valign="middle">
                                    <a href="javascript:void(0);" onclick="$('help4').toggle();$('q6').appear();setValue('0','desktop','answer_5_7','5','1');setHelp('0');">
                                        不，谢谢</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
                </div>
            </div>
        </td>
    </tr>
</table>
<br>
<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;display: none; " class="questionblock" id="q6">
    <tr>
        <td style="width: 50px; padding-bottom: 5px;" align="center" valign="middle">
            <img border="0" width="32" height="32" src="images/mycomputer.png">
        </td>
        <td align="left" style="padding-bottom: 5px;" valign="middle">
            <b>你想要3D桌面效果吗？</b>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_6_1" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q7').appear();setValue('1','desktop_3d','answer_6_1','3','1');hideHelps();">是的，当然要够炫！</a></td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_6_2" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q7').appear();setValue('2','desktop_3d','answer_6_2','3','1');hideHelps();">不需要，它拖慢了我的系统。</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_6_3" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q7').appear();setValue('0','desktop_3d','answer_6_3','3','1');hideHelps();">无所谓</a>
        </td>
    </tr>
</table>
<br>
<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;display: none; " class="questionblock" id="q7">
    <tr>
        <td style="width: 50px; padding-bottom: 5px;" align="center" valign="middle">
            <img border="0" width="32" height="32" src="images/mycomputer.png">
        </td>
        <td align="left" style="padding-bottom: 5px;" valign="middle">
            <b>你喜欢较新的软件，还是较稳定的软件？</b>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_7_1" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q8').appear();setValue('1','stability','answer_7_1','3','2');hideHelps();">我喜欢稳定的，经过长期测试的软件。</a></td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_7_2" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q8').appear();setValue('2','stability','answer_7_2','3','2');hideHelps();">我想要较新并且较稳定的软件。</a></td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_2_3" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q8').appear();setValue('3','stability','answer_7_3','3','2');hideHelps();">我想要最新的软件，哪怕是试验版。</a></td>
    </tr>
</table>
<br>
<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;display: none; " class="questionblock" id="q8">
    <tr>
        <td style="width: 50px; padding-bottom: 5px;" align="center" valign="middle">
            <img border="0" width="32" height="32" src="images/cpu.png">
        </td>
        <td align="left" style="padding-bottom: 5px;" valign="middle">
            <b>你希望多数软件随系统预装好吗？</b></td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle"><img border="0" width="16" height="16" src="images/forward.png"></td>
        <td id="answer_8_1" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q9').appear();setValue('1','oneclick','answer_8_1','2','1');hideHelps();">
                是的，谢谢</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_8_2" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q9').appear();setValue('0','oneclick','answer_8_2','2','1');hideHelps();">
                不，我不需要。</a></td>
    </tr>
</table>
<br>
<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;display: none; " class="questionblock" id="q9">
    <tr>
        <td style="width: 50px; padding-bottom: 5px;" align="center" valign="middle">
            <img border="0" width="32" height="32" src="images/kickstart.png">
        </td>
        <td align="left" style="padding-bottom: 5px;" valign="middle">
            <b>你希望使用哪种包管理器？</b>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_9_1" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q10').appear();setValue('1','package_manager','answer_9_1','3','1');hideHelps();">deb。</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_9_2" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q10').appear();setValue('2','package_manager','answer_9_2','3','1');hideHelps();">rmp。</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_9_3" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q10').appear();setValue('3','package_manager','answer_9_3','3','1');hideHelps();">pacman。</a></td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_9_4" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q10').appear();setValue('4','package_manager','answer_9_4','3','1');hideHelps();">pkgtool。</a></td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_9_5" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q10').appear();setValue('5','package_manager','answer_9_5','3','1');hideHelps();">petget。</a></td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_9_6" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q10').appear();setValue('6','package_manager','answer_9_6','3','1');hideHelps();">自己编译。</a></td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_9_7" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q10').appear();setValue('0','package_manager','answer_9_7','3','1');hideHelps();">我不在乎。</a></td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/info.png">
        </td>
        <td id="answer_9_8" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('help2').appear();setHelp('1');setValue('0','desktop','answer_9_7','5','1');">
                有什么区别？</a>
            <br>
            <div class="helpblock" id="help2" style="display: none; width: 350px;">
                <div class="rounded_box white" style="margin-bottom: 10px;">
                    <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
                    <div class="xboxcontent" style="vertical-align: middle; padding: 0; font-weight: bold; font-size: 14px;">
                        <table border="0" cellpadding="0" cellspacing="0" style="table-layout: auto;">
                            <tr>
                                <td style="padding: 10px;" colspan="2">
                                    如果你想知道更多不同的安装包管理器，请选择下面的
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px;" align="right" valign="middle">
                                    <img border="0" width="16" height="16" src="images/browser.png">
                                </td>
                                <td style="padding: 2px; height: auto;" valign="middle">
                                    <a href="http://zh.wikipedia.org/wiki/Deb" target="_new" onclick="$('help2').toggle();setHelp('0');$('q10').appear();">
                                        我想知道更多关于deb
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px;" align="right" valign="middle">
                                    <img border="0" width="16" height="16" src="images/browser.png">
                                </td>
                                <td style="padding: 2px; height: auto;" valign="middle">
                                    <a href="http://zh.wikipedia.org/wiki/rmp" target="_new" onclick="$('help2').toggle();setHelp('0');$('q10').appear();">
                                        我想知道更多关于rmp</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px;" align="right" valign="middle">
                                    <img border="0" width="16" height="16" src="images/browser.png">
                                </td>
                                <td style="padding: 2px; height: auto;" valign="middle">
                                    <a href="http://zh.wikipedia.org/wiki/pacman" target="_new" onclick="$('help2').toggle();setHelp('0');$('q10').appear();">
                                        我想知道更多关于pacman。</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px;" align="right" valign="middle">
                                    <img border="0" width="16" height="16" src="images/browser.png">
                                </td>
                                <td style="padding: 2px; height: auto;" valign="middle">
                                    <a href="http://zh.wikipedia.org/wiki/pkgtool" target="_new" onclick="$('help2').toggle();setHelp('0');$('q10').appear();">
                                        我想知道更多关于pkgtool。</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px;" align="right" valign="middle">
                                    <img border="0" width="16" height="16" src="images/browser.png">
                                </td>
                                <td style="padding: 2px; height: auto;" valign="middle">
                                    <a href="http://zh.wikipedia.org/wiki/patget" target="_new" onclick="$('help2').toggle();setHelp('0');$('q10').appear();">
                                        我想知道更多关于petget。</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px;" align="right" valign="middle">
                                    <img border="0" width="16" height="16" src="images/browser.png">
                                </td>
                                <td style="padding: 2px; height: auto;" valign="middle">
                                    <a href="http://wenku.baidu.com/view/c666b31514791711cc791772.html" target="_new" onclick="$('help2').toggle();setHelp('0');$('q10').appear();">
                                        我想知道如何自己编译软件。</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px;" align="right" valign="middle">
                                    <img border="0" width="16" height="16" src="images/forward.png">
                                </td>
                                <td id="" style="padding: 2px; height: auto;" valign="middle">
                                    <a href="javascript:void(0);" onclick="$('help2').toggle();$('q10').appear();setValue('0','desktop','answer_9_7','9','1');setHelp('0');">
                                        不，谢谢</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
                </div>
            </div>
        </td>
    </tr>
</table>
<br>
<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;display: none; " class="questionblock" id="q10">
    <tr>
        <td style="width: 50px; padding-bottom: 5px;" align="center" valign="middle">
            <img border="0" width="32" height="32" src="images/technical.png">
        </td>
        <td align="left" style="padding-bottom: 5px;" valign="middle">
            <b>你需要开发者版的软件包吗？</b>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_10_1" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q11').appear();setValue('8','package_dev','answer_10_1','3','2');hideHelps();">是的，容易获取就行</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_10_2" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q11').appear();setValue('7','package_dev','answer_10_2','3','2');hideHelps();">是的，需要预装</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_10_3" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q11').appear();setValue('6','package_dev','answer_10_3','3','2');hideHelps();">否,我自己来安装所需的软件</a>
        </td>
    </tr>
</table>
<br>
<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;display: none; " class="questionblock" id="q11">
    <tr>
        <td style="width: 50px; padding-bottom: 5px;" align="center" valign="middle">
            <img border="0" width="32" height="32" src="images/desktop.png">
        </td>
        <td align="left" style="padding-bottom: 5px;" valign="middle">
            <b>你需要多高的可配置性？</b>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_11_1" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q12').appear();setValue('0','configurability','answer_11_1','5','1');hideHelps();">
                只要能进行一些简单配置就行。</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_11_2" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q12').appear();setValue('1','configurability','answer_11_2','5','1');hideHelps();">
                需要有较灵活的系统配置。</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_11_3" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q12').appear();setValue('2','configurability','answer_11_3','5','1');hideHelps();">
                我是配置控。</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_11_4" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('q12').appear();setValue('0','configurability','answer_11_4','5','1');hideHelps();">
                我不关心。</a>
        </td>
    </tr>


</table>
<br>
<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;display: none; "  class="questionblock" id="q12">
    <tr>
        <td style="width: 50px; padding-bottom: 5px;" align="center" valign="middle">
            <img border="0" width="32" height="32" src="images/one-click.png">
        </td>
        <td align="left" style="padding-bottom: 5px;" valign="middle">
            <b>你希望发行版的流行度如何？</b>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_12_1" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('result').appear();setValue('1','popularity','answer_12_1','2','1');hideHelps();">越流行越好，以便获得更多支持。</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_12_2" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('result').appear();setValue('0','popularity','answer_12_2','2','1');hideHelps();">越不流行越好，我喜欢特立独行。</a>
        </td>
    </tr>
    <tr>
        <td style="padding: 2px;" align="right" valign="middle">
            <img border="0" width="16" height="16" src="images/forward.png">
        </td>
        <td id="answer_12_3" style="padding: 2px; height: auto;" valign="middle" class="">
            <a class="fu" href="javascript:void(0);" onclick="$('result').appear();setValue('0','popularity','answer_12_3','2','1');hideHelps();">我不关心这些。</a>
        </td>
    </tr>
</table>
<br>


</td>
</tr>
<!--此处一下为调查问卷提交部分
                           //value=“”部分根据用户的选择来填写
                                -->
<tr>
    <td class="main" colspan="3" style="height: auto;" valign="middle">
        <div style="text-align: right; display: none; margin: 0 30px 0 30px;" id="result">
            <form action="result.php" method="POST">
                <input type="hidden" id="tech_level" name="tech_level" value="">

                <input type="hidden" id="distro_type" name="distro_type" value="">

                <input type="hidden" id="speed" name="speed" value="">

                <input type="hidden" id="install_type" name="install_type" value="">

                <input type="hidden" id="desktop" name="desktop" value="">

                <input type="hidden" id="desktop_3d" name="desktop_3d" value="">

                <input type="hidden" id="stability" name="stability" value="">

                <input type="hidden" id="oneclick" name="oneclick" value="">

                <input type="hidden" id="package_manager" name="package_manager" value="">

                <input type="hidden" id="package_dev" name="package_dev" value="">

                <input type="hidden" id="configurability" name="configurability" value="">

                <input type="hidden" id="popularity" name="popularity" value="">

                <input type="submit" value="提交 >>" style="float: right; font-size: 15px;">

                <div style="text-align: left;">
                    <b>谢谢你的参与。</b>
                    <br><br>
                </div>
            </form>
        </div>
    </td>
</tr>
</table>
</div>
<b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
