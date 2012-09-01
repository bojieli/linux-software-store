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
include "static/public/head.html"
?>
<body background="static/img/<?=$dist?>/<?=$dist?>.jpg" style= "background-position:   center;background-repeat:   no-repeat;background-attachment:   fixed ">

<!-- UJian Button BEGIN -->
<script type="text/javascript" src="http://v1.ujian.cc/code/ujian.js?type=slide&num=3&pos=left&btn=4&uid=1674756"></script>
<!-- UJian Button END -->

  <div id="wrapper">
    <!-- This is 'background' -->
    <div id="background" class="bg">

       <?php include"static/public/search.html"?>
       <div id="header"></div>
        <!--this area is designed for show software information-->
        <div id="comm">
            <div id="content-3">
                <div id="intro">
                    <table id="brf">
                        <tr class="sw_img">
                            <td class="sw_dtl">
                                <img src="<?=$info['icon']?>" alt="此处显示软件的图片">
                            </td>
                            <td class="sw_name">
                                <?=$package?>
                            </td>
                        </tr>
                        <tr class="sw_info  ">
                           <td class="sw_dtl">
                               
                                 软件大小：MB
                                
                           </td>
                           <td class="sw_dtl">
                               
                                 应用平台：<?=$dist?> x86_64 , i386
                                
                           </td>
                        </tr>
                        <tr class="sw_info ">
                           <td class="sw_dtl">
                               
                                 发行版本：
                                
                           </td>
                           <td class="sw_dtl">
                               
                                 软件授权：GPL
                                
                           </td>
                        </tr>
                        <tr class="sw_info  ">
                           <td class="sw_dtl">
                              
                                 软件类型：deb rmp
                              
                           </td>
                           <td class="sw_dtl">
                               
                                 软件分类：生活 网络 浏览器
                                
                           </td>
                        </tr>
                        <tr class="sw_info ">
                           <td class="sw_dtl">

                             下载软件: <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">x86_64</a> <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">i386</a>
                           </td>
                           <td class="sw_dtl">
                               下载源码: <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">x86_64</a> <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">i386</a>
                           </td>
                        </tr>
                        <tr class="sw_info  ">
                           <td class="sw_dtl">
                              软件安装: <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">x86_64</a>  <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">i386</a>

                           </td>
                           <td class="sw_dtl">
                              源码编译: <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">x86_64</a> <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">i386</a>

                           </td>
                        </tr>
                        <tr class="sw_info  ">
                           <td class="sw_dtl">

                           </td>
                           <td class="sw_dtl">

                           </td>
                        </tr>
                    </table>
                </div>
                <div id="sw_intro">
                    <h1>软件简介</h1>
                    &nbsp;&nbsp;<p style="text-align: left"><?=$package?>是一个好软件啊
                </div>
            </div>

       
            <div id="content-4">
             <!-- UY BEGIN -->
             <div id="uyan_frame"></div>
             <script type="text/javascript" id="UYScript" src="http://v1.uyan.cc/js/iframe.js?UYUserId=1674756" async=""></script>
             <!-- UY END -->
             </div>
        </div>
    </div>
  </div>
</body>