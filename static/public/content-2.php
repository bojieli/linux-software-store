<div id="content-2">
    <!-- This is 'dist info' -->
    <div id="info" class="info" style="background-image:url(static/img/info.png);border:0px;text-align: left;">
        <!--此处盛放%dist的相关信息-->
        <script type="text/javascript" src="./static/js/text_float.js"></script>
        <div class="breakNewsblock">
            <div id="breakNews">
                <ul id="breakNewsList" class="list6">
                <?php
                 switch($dist)
                 {
                 case "archlinux":
                                    echo"
                                        <li><a href="http://www.archlinux.org/" target="_blank">Archlinux官方网站</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/archlinux/" target="_blank">科大archlinux资源</a></li>
                                        <li><a href="http://mirrors.usct.edu.cn/archlinux/iso" target="_black">Archlinux镜像下载</a></li>
                                        <li><a href="http://lug.ustc.edu.cn/wiki/mirrors/help/archlinux" target="_blank">Archlinux镜像使用帮助</a></li>
                                        <li><a href="https://www.centos.org/" target="_blank">Centos官方网站</a></li>
                                        <li><a href="http://www.debian.org/" target="_blank">Debian官方网站</a></li>
                                        <li><a href="http://www.linuxdeepin.com/" target="_blank">Deepin官方网站</a></li>
                                        <li><a href="http://fedoraproject.org/zh_CN/" target="_blank">Fedora官方网站</a></li>
                                        <li><a href="http://www.gentoo.org/" target="_blank">Gentoo官方网站</a></li>
                                        <li><a href="http://linuxmint.com/" target="_blank">Linuxmint官方网站</a></li>
                                        <li><a href="http://www.opensuse.org/zh-cn/" target="_blank">Opensuse官方网站</a></li>
                                        <li><a href="http://www.puppylinux.com/" target="_blank">Puppy官方网站</a></li>
                                        <li><a href="http://www.slackware.com/" target="_blank">Slackware官方网站</a></li>
                                        <li><a href="http://www.ubuntu.org.cn/" target="_blank">Ubuntu官方网站</a></li>
                                        ";
                                        break;
                 case "centos":
                                    echo"
                                        <li><a href="http://www.centos.org/" target="_blank">Centos官方网站</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/centos/" target="_blank">科大centos资源</a></li>
                                        <li><a href="http://lug.ustc.edu.cn/wiki/mirrors/help/centos" target="_blank">Centos镜像使用帮助</a></li>
                                        <li><a href="https://www.archlinux.org/" target="_blank">Archlinux官方网站</a></li>
                                        <li><a href="http://www.debian.org/" target="_blank">Debian官方网站</a></li>
                                        <li><a href="http://www.linuxdeepin.com/" target="_blank">Deepin官方网站</a></li>
                                        <li><a href="http://fedoraproject.org/zh_CN/" target="_blank">Fedora官方网站</a></li>
                                        <li><a href="http://www.gentoo.org/" target="_blank">Gentoo官方网站</a></li>
                                        <li><a href="http://linuxmint.com/" target="_blank">Linuxmint官方网站</a></li>
                                        <li><a href="http://www.opensuse.org/zh-cn/" target="_blank">Opensuse官方网站</a></li>
                                        <li><a href="http://www.puppylinux.com/" target="_blank">Puppy官方网站</a></li>
                                        <li><a href="http://www.slackware.com/" target="_blank">Slackware官方网站</a></li>
                                        <li><a href="http://www.ubuntu.org.cn/" target="_blank">Ubuntu官方网站</a></li>
                                        ";
                                        break;
                 case "debian":
                                    echo"
                                        <li><a href="http://www.debian.org/" target="_blank">Debian官方网站</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/" target="_blank">科大debian资源</a></li>
                                        <li><a href="http://lug.ustc.edu.cn/wiki/mirrors/help/debian" target="_blank">Debian镜像使用帮助</a></li>
                                        <li><a href="http://mirrors.usct.edu.cn/debian-cd/" target="_black">Debian镜像下载</a></li>
                                        <li><a href="https://www.archlinux.org/" target="_blank">Archlinux官方网站</a></li>
                                        <li><a href="http://www.centos.org/" target="_blank">Centos官方网站</a></li>
                                        <li><a href="http://www.linuxdeepin.com/" target="_blank">Deepin官方网站</a></li>
                                        <li><a href="http://fedoraproject.org/zh_CN/" target="_blank">Fedora官方网站</a></li>
                                        <li><a href="http://www.gentoo.org/" target="_blank">Gentoo官方网站</a></li>
                                        <li><a href="http://linuxmint.com/" target="_blank">Linuxmint官方网站</a></li>
                                        <li><a href="http://www.opensuse.org/zh-cn/" target="_blank">Opensuse官方网站</a></li>
                                        <li><a href="http://www.puppylinux.com/" target="_blank">Puppy官方网站</a></li>
                                        <li><a href="http://www.slackware.com/" target="_blank">Slackware官方网站</a></li>
                                        <li><a href="http://www.ubuntu.org.cn/" target="_blank">Ubuntu官方网站</a></li>
                                        ";
                                        break;
                 case "deepin":
                                    echo"
                                       <li><a href="http://www.linuxdeepin.com/" target="_blank">Deepin官方网站</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/deepin" target="_blank">科大deepin资源</a></li>
                                        <li><a href="http://lug.ustc.edu.cn/wiki/mirrors/help/deepin" target="_blank">Deepin镜像使用帮助</a></li>
                                        <li><a href="http://mirrors.usct.edu.cn/deepin-cd/" target="_black">Deepin镜像下载</a></li>
                                        <li><a href="https://www.archlinux.org/" target="_blank">Archlinux官方网站</a></li>
                                        <li><a href="http://www.centos.org/" target="_blank">Centos官方网站</a></li>
                                        <li><a href="http://www.debian.org/" target="_blank">Debian官方网站</a></li>
                                        <li><a href="http://fedoraproject.org/zh_CN/" target="_blank">Fedora官方网站</a></li>
                                        <li><a href="http://www.gentoo.org/" target="_blank">Gentoo官方网站</a></li>
                                        <li><a href="http://linuxmint.com/" target="_blank">Linuxmint官方网站</a></li>
                                        <li><a href="http://www.opensuse.org/zh-cn/" target="_blank">Opensuse官方网站</a></li>
                                        <li><a href="http://www.puppylinux.com/" target="_blank">Puppy官方网站</a></li>
                                        <li><a href="http://www.slackware.com/" target="_blank">Slackware官方网站</a></li>
                                        <li><a href="http://www.ubuntu.org.cn/" target="_blank">Ubuntu官方网站</a></li>
                                        ";
                                        break;
                 case "fedora":
                                    echo"
                                        <li><a href="http://fedoraproject.org/zh_CN/" target="_blank">Fedora官方网站</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/fedora" target="_blank">科大Fedora资源</a></li>
                                        <li><a href="http://lug.ustc.edu.cn/wiki/mirrors/help/feodra" target="_blank">Fedora镜像使用帮助</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/fedora/linux/releases/" target="_black">Fedora镜像下载</a></li>
                                        <li><a href="https://www.archlinux.org/" target="_blank">Archlinux官方网站</a></li>
                                        <li><a href="http://www.centos.org/" target="_blank">Centos官方网站</a></li>
                                        <li><a href="http://www.debian.org/" target="_blank">Debian官方网站</a></li>
                                        <li><a href="http://www.linuxdeepin.com/" target="_blank">Deepin官方网站</a></li>
                                        <li><a href="http://www.gentoo.org/" target="_blank">Gentoo官方网站</a></li>
                                        <li><a href="http://linuxmint.com/" target="_blank">Linuxmint官方网站</a></li>
                                        <li><a href="http://www.opensuse.org/zh-cn/" target="_blank">Opensuse官方网站</a></li>
                                        <li><a href="http://www.puppylinux.com/" target="_blank">Puppy官方网站</a></li>
                                        <li><a href="http://www.slackware.com/" target="_blank">Slackware官方网站</a></li>
                                        <li><a href="http://www.ubuntu.org.cn/" target="_blank">Ubuntu官方网站</a></li>
                                        ";
                                        break;
                 case "gentoo":
                                    echo"
                                        <li><a href="http://www.gentoo.org/" target="_blank">Gentoo官方网站</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/gentoo-portage/" target="_blank">科大Gentoo资源</a></li>
                                        <li><a href="http://lug.ustc.edu.cn/wiki/mirrors/help/gentoo-portage" target="_blank">Gentoo镜像使用帮助</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/gentoo/releases/" target="_black">Gentoo镜像下载</a></li>
                                        <li><a href="https://www.archlinux.org/" target="_blank">Archlinux官方网站</a></li>
                                        <li><a href="http://www.centos.org/" target="_blank">Centos官方网站</a></li>
                                        <li><a href="http://www.debian.org/" target="_blank">Debian官方网站</a></li>
                                        <li><a href="http://www.linuxdeepin.com/" target="_blank">Deepin官方网站</a></li>
                                        <li><a href="http://fedoraproject.org/zh_CN/" target="_blank">Fedora官方网站</a></li>
                                        <li><a href="http://linuxmint.com/" target="_blank">Linuxmint官方网站</a></li>
                                        <li><a href="http://www.opensuse.org/zh-cn/" target="_blank">Opensuse官方网站</a></li>
                                        <li><a href="http://www.puppylinux.com/" target="_blank">Puppy官方网站</a></li>
                                        <li><a href="http://www.slackware.com/" target="_blank">Slackware官方网站</a></li>
                                        <li><a href="http://www.ubuntu.org.cn/" target="_blank">Ubuntu官方网站</a></li>
                                        ";
                                        break;

                 case "mint":
                                    echo"
                                       <li><a href="http://linuxmint.com/" target="_blank">Linuxmint官方网站</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/linuxmint/" target="_blank">科大Linuxmint资源</a></li>
                                        <li><a href="http://lug.ustc.edu.cn/wiki/mirrors/help/linuxmint" target="_blank">Linuxmint镜像使用帮助</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/linxumint-cd/" target="_black">Linuxmint镜像下载</a></li>
                                        <li><a href="https://www.archlinux.org/" target="_blank">Archlinux官方网站</a></li>
                                        <li><a href="http://www.centos.org/" target="_blank">Centos官方网站</a></li>
                                        <li><a href="http://www.debian.org/" target="_blank">Debian官方网站</a></li>
                                        <li><a href="http://www.linuxdeepin.com/" target="_blank">Deepin官方网站</a></li>
                                        <li><a href="http://fedoraproject.org/zh_CN/" target="_blank">Fedora官方网站</a></li>
                                        <li><a href="http://www.gentoo.org/" target="_blank">Gentoo官方网站</a></li>
                                        <li><a href="http://www.opensuse.org/zh-cn/" target="_blank">Opensuse官方网站</a></li>
                                        <li><a href="http://www.puppylinux.com/" target="_blank">Puppy官方网站</a></li>
                                        <li><a href="http://www.slackware.com/" target="_blank">Slackware官方网站</a></li>
                                        <li><a href="http://www.ubuntu.org.cn/" target="_blank">Ubuntu官方网站</a></li>
                                        ";
                                        break;
                 case "opensuse":
                                    echo"
                                        <li><a href="http://www.opensuse.org/zh-cn/" target="_blank">Opensuse官方网站</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/opensuse/" target="_blank">科大Opensuse资源</a></li>
                                        <li><a href="http://lug.ustc.edu.cn/wiki/mirrors/help/opensuse" target="_blank">Opensuse镜像使用帮助</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/opensuse/" target="_black">Linuxmint镜像下载</a></li>
                                        <li><a href="https://www.archlinux.org/" target="_blank">Archlinux官方网站</a></li>
                                        <li><a href="http://www.centos.org/" target="_blank">Centos官方网站</a></li>
                                        <li><a href="http://www.debian.org/" target="_blank">Debian官方网站</a></li>
                                        <li><a href="http://www.linuxdeepin.com/" target="_blank">Deepin官方网站</a></li>
                                        <li><a href="http://fedoraproject.org/zh_CN/" target="_blank">Fedora官方网站</a></li>
                                        <li><a href="http://www.gentoo.org/" target="_blank">Gentoo官方网站</a></li>
                                        <li><a href="http://linuxmint.com/" target="_blank">Linuxmint官方网站</a></li>
                                        <li><a href="http://www.puppylinux.com/" target="_blank">Puppy官方网站</a></li>
                                        <li><a href="http://www.slackware.com/" target="_blank">Slackware官方网站</a></li>
                                        <li><a href="http://www.ubuntu.org.cn/" target="_blank">Ubuntu官方网站</a></li>
                                        ";
                                        break;
                 case "puppy":
                                    echo"
                                        <li><a href="http://www.puppylinux.com/" target="_blank">Puppy官方网站</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/puppy/" target="_blank">科大Puppy资源</a></li>
                                        <li><a href="http://lug.ustc.edu.cn/wiki/mirrors/help/puppy" target="_blank">Puppy镜像使用帮助</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/puppy/" target="_black">Puppy镜像下载</a></li>
                                        <li><a href="https://www.archlinux.org/" target="_blank">Archlinux官方网站</a></li>
                                        <li><a href="http://www.centos.org/" target="_blank">Centos官方网站</a></li>
                                        <li><a href="http://www.debian.org/" target="_blank">Debian官方网站</a></li>
                                        <li><a href="http://www.linuxdeepin.com/" target="_blank">Deepin官方网站</a></li>
                                        <li><a href="http://fedoraproject.org/zh_CN/" target="_blank">Fedora官方网站</a></li>
                                        <li><a href="http://www.gentoo.org/" target="_blank">Gentoo官方网站</a></li>
                                        <li><a href="http://linuxmint.com/" target="_blank">Linuxmint官方网站</a></li>
                                        <li><a href="http://www.opensuse.org/zh-cn/" target="_blank">Opensuse官方网站</a></li>
                                        <li><a href="http://www.slackware.com/" target="_blank">Slackware官方网站</a></li>
                                        <li><a href="http://www.ubuntu.org.cn/" target="_blank">Ubuntu官方网站</a></li>
                                        ";
                                        break;
                 case "slackware":
                                    echo"

                                        <li><a href="http://www.slackware.com/" target="_blank">Slackware官方网站</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/slackware/" target="_blank">科大Slackware资源</a></li>
                                        <li><a href="http://lug.ustc.edu.cn/wiki/mirrors/help/slackware" target="_blank">Slackware镜像使用帮助</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/slackware/" target="_black">Slackware镜像下载</a></li>
                                        <li><a href="https://www.archlinux.org/" target="_blank">Archlinux官方网站</a></li>
                                        <li><a href="http://www.centos.org/" target="_blank">Centos官方网站</a></li>
                                        <li><a href="http://www.debian.org/" target="_blank">Debian官方网站</a></li>
                                        <li><a href="http://www.linuxdeepin.com/" target="_blank">Deepin官方网站</a></li>
                                        <li><a href="http://fedoraproject.org/zh_CN/" target="_blank">Fedora官方网站</a></li>
                                        <li><a href="http://www.gentoo.org/" target="_blank">Gentoo官方网站</a></li>
                                        <li><a href="http://linuxmint.com/" target="_blank">Linuxmint官方网站</a></li>
                                        <li><a href="http://www.opensuse.org/zh-cn/" target="_blank">Opensuse官方网站</a></li>
                                        <li><a href="http://www.puppylinux.com/" target="_blank">Puppy官方网站</a></li>
                                        <li><a href="http://www.ubuntu.org.cn/" target="_blank">Ubuntu官方网站</a></li>
                                        ";
                                        break;
                 case "ubuntu":
                                    echo"
                                        <li><a href="http://www.ubuntu.org.cn/" target="_blank">Ubuntu官方网站</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/ubuntu/" target="_blank">科大Ubuntu资源</a></li>
                                        <li><a href="http://lug.ustc.edu.cn/wiki/mirrors/help/ubuntu" target="_blank">Ubuntu镜像使用帮助</a></li>
                                        <li><a href="http://mirrors.ustc.edu.cn/Ubuntu/" target="_black">Ubuntu镜像下载</a></li>
                                        <li><a href="https://www.archlinux.org/" target="_blank">Archlinux官方网站</a></li>
                                        <li><a href="http://www.centos.org/" target="_blank">Centos官方网站</a></li>
                                        <li><a href="http://www.debian.org/" target="_blank">Debian官方网站</a></li>
                                        <li><a href="http://www.linuxdeepin.com/" target="_blank">Deepin官方网站</a></li>
                                        <li><a href="http://fedoraproject.org/zh_CN/" target="_blank">Fedora官方网站</a></li>
                                        <li><a href="http://www.gentoo.org/" target="_blank">Gentoo官方网站</a></li>
                                        <li><a href="http://linuxmint.com/" target="_blank">Linuxmint官方网站</a></li>
                                        <li><a href="http://www.opensuse.org/zh-cn/" target="_blank">Opensuse官方网站</a></li>
                                        <li><a href="http://www.puppylinux.com/" target="_blank">Puppy官方网站</a></li>
                                        <li><a href="http://www.slackware.com/" target="_blank">Slackware官方网站</a></li>

                                        ";
                                        break;
                 }
                 ?>
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