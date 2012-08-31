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

<body>

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
                            <td>
                                <img src="<?=$info['icon']?>" alt="此处显示软件的图片">
                            </td>
                            <td class="sw_name">
                                <?=$package?>
                            </td>
                        </tr>
                    </table>
                    <table class="detail">
                        <tr class="sw_info">
                           <td >
                              <p>
                                 软件大小：MB<!--<?=print_filesize($info['filesize'])?>-->
                              </p>
                           </td>
                           <td >
                              <p>
                                 应用平台：<?=$dist?> x86_64 , i386
                              </p>
                           </td>
                        </tr>
                        <tr class="sw_info">
                           <td>
                              <p>
                                 发行版本：
                              </p>
                           </td>
                           <td >
                              <p>
                                 软件授权：GPL
                              </p>
                           </td>
                        </tr>
                        <tr class="sw_info">
                           <td>
                              <p>
                                 软件类型：deb rmp
                              </p>
                           </td>
                           <td>
                              <p>
                                 软件分类：生活 网络 浏览器
                              </p>
                           </td>
                        </tr>
                        <tr class="sw_info">
                           <td>
                              <pre>下载软件: <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">x86_64</a>       <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">i386</a>
                              </pre>
                           </td>
                           <td >
                               <pre>下载源码: <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">x86_64</a>  <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">i386</a>
                               </pre>
                           </td>
                        </tr>
                        <tr class="sw_info">
                           <td>
                              <pre>软件安装:   <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">x86_64</a>  <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">i386</a>
                              </pre>
                           </td>
                           <td>
                              <pre>源码编译:   <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">x86_64</a>  <a href="http://mirrors.ustc.edu.cn/<?=$dist?>/">i386</a>
                              </pre>
                           </td>
                        </tr>
                        <tr class="sw_info">
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
                </div>
            </div>
            <div class="sw_intro">
               <h1>软件简介</h1>
               &nbsp;&nbsp;<p style="text-align: left">/*<?=$info['description']?>*/<?=$package?>是一个好软件啊</p>
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