<?php require_once 'common_funcs.php'; ?>
<div id="content-2">
    <!-- This is 'dist info' -->
    <div id="info" class="info" style="background-image:url(static/img/info.png);border:0px;text-align: left;">
        <!--此处盛放%dist的相关信息-->
        <script type="text/javascript" src="./static/js/text_float.js"></script>
        <div class="breakNewsblock">
            <div id="breakNews">
                <ul id="breakNewsList" class="list6">
                   <li><a href="http://mirrors.ustc.edu.cn/" target="_blank">科大Mirrors资源</a></li>
                   <li><a href="http://lug.ustc.edu.cn/wiki/mirrors/help/" target="_blank">mirrors镜像使用帮助</a></li>
                   <li></li>
                   <li></li>
                   <li><a href="http://www.archlinux.org/" target="_blank">Archlinux官方网站</a></li>
                   <li><a href="http://mirrors.ustc.edu.cn/archlinux/iso/2012.08.04/" target="_blank">Archlinux最新镜像下载</a></li>
                   <li></li>
                   <li></li>
                   <li><a href="https://www.centos.org/" target="_blank">Centos官方网站</a></li>
                   <li><a href="http://mirrors.ustc.edu.cn/centos/6.3/isos/" target="_blank">CentOS最新镜像下载</a></li>
                   <li></li>
                   <li></li>
                   <li><a href="http://www.debian.org/" target="_blank">Debian官方网站</a></li>
                   <li><a href="http://mirrors.ustc.edu.cn/debian-cd/6.0.5/ia64/iso-dvd/" target="_blank">Debian最新镜像下载</a></li>
                   <li></li>
                   <li></li>
                   <li><a href="http://www.linuxdeepin.com/" target="_blank">Deepin官方网站</a></li>
                   <li><a href="http://mirrors.ustc.edu.cn/deepin-cd/releases/12.06/final/desktop-zh-hant/" target="_blank">Deepin最新镜像下载</a></li>
                   <li></li>
                   <li></li>
                   <li><a href="http://fedoraproject.org/zh_CN/" target="_blank">Fedora官方网站</a></li>
                   <li><a href="http://mirrors.ustc.edu.cn/fedora/linux/releases/17/Live/x86_64/" target="_blank">Fedora最新镜像下载</a></li>
                   <li></li>
                   <li></li>
                   <li><a href="http://www.gentoo.org/" target="_blank">Gentoo官方网站</a></li>
                   <li><a href="http://mirrors.ustc.edu.cn/gentoo/releases/x86/current-iso/" target="_blank">Gentoo最新镜像下载</a></li>
                   <li></li>
                    <li></li>
                   <li><a href="http://linuxmint.com/" target="_blank">Linuxmint官方网站</a></li>
                   <li><a href="http://mirrors.ustc.edu.cn/linuxmint-cd/stable/13/" target="_blank">Linuxmint最新镜像下载</a></li>
                   <li></li>
                   <li></li>
                   <li><a href="http://www.opensuse.org/zh-cn/" target="_blank">Opensuse官方网站</a></li>
                   <li><a href="http://mirrors.ustc.edu.cn/opensuse/distribution/openSUSE-stable/iso/" target="_blank">Opensuse最新镜像下载</a></li>
                   <li></li>
                   <li></li>
                   <li><a href="http://www.puppylinux.com/" target="_blank">Puppy官方网站</a></li>
                   <li><a href="http://mirrors.ustc.edu.cn/puppy/puppy-5.3.3/" target="_blank">Puppy最新镜像下载</a></li>
                   <li></li>
                   <li></li>
                   <li><a href="http://www.slackware.com/" target="_blank">Slackware官方网站</a></li>
                   <li><a href="http://mirrors.ustc.edu.cn/slackware/slackware-13.37-iso/" target="_blank">Slackware最新镜像下载</a></li>
                   <li></li>
                   <li></li>
                   <li><a href="http://www.ubuntu.org.cn/" target="_blank">Ubuntu官方网站</a></li>
                   <li><a href="http://mirrors.ustc.edu.cn/ubuntu-releases/12.04/" target="_blank">Ubuntu最新镜像下载</a></li>
                   <li></li>
                   <li></li>
                </ul>
            </div>
        </div>
        <script language="javascript" type="text/javascript">
            var scroll2 = new ScrollText("breakNewsList","pre2","next2",true,70,true);
            scroll2.LineHeight = 24;
        </script>
    </div>

    <!-- This is 'home-button' -->
    <div id="home-button" class="home-button" style="background-image:url(static/img/<?=$dist?>/button-1.png);width:230px;height:55px;border:0px;" >
        <a href="index.html" style="font-size:30px;">返回首页</a>
    </div>


    <?php $dists = array('archlinux', 'centos', 'debian', 'deepin', 'fedora', 'gentoo', 'mint', 'opensuse', 'puppy', 'slackware', 'ubuntu');
      foreach ($dists as $d)
      	if ($d != $dist) { ?>
    <div class="nav"><a href="dist.php?dist=<?=$d?>"><?=firstLetterToUpper($d) ?></a></div>
    <?php } ?>
</div>
