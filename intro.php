<?php
require_once('db_init.php');
require_once('CPackage.php');
mysql_query("SET CHARSET utf8");
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
	$pkgName = 'bash';
} else {
	$pkgName = addslashes($_GET['package']);
}

$package = new CPackage($pkgName, $distname);
//var_dump($package); //for debug
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
								<?php echo $package->getszName();?>
                            </td>
                        </tr>
                        <tr class="sw_info  ">
                           <td class="sw_dtl">
                               
						   软件大小：<?php echo $package->getuFileSize();?>MB
                                
                           </td>
                           <td class="sw_dtl">
                               
						   安装之后：所需硬盘空间<?php echo $package->getuInstallSize();?>  MB
                                
                           </td>
                        </tr>
                        <tr class="sw_info  ">
                           <td class="sw_dtl">
                                应用平台：<?php echo $package->getszDistName();?> x86_64 , i386
                           </td>
                           <td class="sw_dtl">

                               发行版本：<?php echo $package->getszVersion();?>

                           </td>
                        </tr>
                        <tr class="sw_info ">
                           <td class="sw_dtl">
                               
						   软件授权：<?php echo $package->getszLicense();?>
                                
                           </td>
                           <td class="sw_dtl">
						   软件主页：<a href="<?php echo "http://".$package->getszHomepage();?>"><?echo $package->getszName();?></a>
                           </td>
                        </tr>
                        <tr class="sw_info  ">
                           <td class="sw_dtl">
                               下载软件: <a href="http://mirrors.ustc.edu.cn/<?php echo $package->getszDistName();?>/">x86_64</a> <a href="http://mirrors.ustc.edu.cn/<?php echo $package->getszDistName();?>/">i386</a>
                           </td>
                           <td class="sw_dtl">
                               软件安装: <a href="http://mirrors.ustc.edu.cn/<?php echo $package->getszDistName();?>/">x86_64</a>  <a href="http://mirrors.ustc.edu.cn/<?php echo $package->getszDistName();?>/">i386</a>

                           </td>
                        </tr>
                        <tr class="sw_info">
                           <td class="sw_dtl">
						   软件分类：<?php echo $package->getszCategory();?>
                           </td>
                           <td class="sw_dtl">
                                软件类型：<?php echo $package->getszExtension();?>
                           </td>
                        </tr>

                        <tr class="sw_info  ">
                           <td class="sw_dtl">
                               软件评分：0～5分
                           </td>
                           <td class="sw_dtl">
                               推荐指数：
                           </td>
                        </tr>
                        <tr class="sw_info  ">
                           <td class="sw_dtl">
						   软件维护：<a href="<?php echo $package->getszMaintainerUrl();?>" target="_blank"><?php echo $package->getszMaintainer()?></a>
                           </td>
                           <td class="sw_dtl">
						   报告bug：<a href="<?php echo $package->getszBugUrl();?>" target="_blank"><?php echo $package->getszName();?> bug报告</a>
                           </td>
                        </tr>

                    </table>
                </div>
                <div id="sw_intro">
                    <h1>软件简介</h1>
                    &nbsp;&nbsp;<p style="text-align: left"><?php echo $package->getszSummary();?></p>
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
