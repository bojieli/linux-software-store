<?php
                 //$rs = mysql_query("SELECT * FROM cz_pack WHERE did = '$did' AND recommend = 2");
                 //while ($pack = mysql_fetch_array($rs)) {
			$pack = ['name' => '永中Office',
				'pid' => 1,
				'icon_url' => '',
				'url' => 'http://mirrors.ustc.edu.cn/',
				'summary' => '永中Office是个好东西'
				];?>

<div id="content-1">
    <script type="text/javascript" language="javascript" src="static/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="static/js/tab.js"></script>
    <div class="tabs">
        <ul>
            <li id="button-0" class="first tab_0 button button-dist">
                <h2 class="active">小站推荐</h2>
                <div>
                    <p>小站推荐内容</p>
                     
                <table class="software">

	        <?php
		    for ($i=0; $i<5; $i++) {
		    ?>
                    <tr>
                        <td class="icon" >
                            <a href="intro.php?dist=<?=$dist?>&pid=<?=$pid?>" target="_blank">
                             <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >
                            </a>
                        </td>
                          <td class="bre" >
                              <p><a href="intro.php?dist=<?=$dist?>&pid=<?=$pid?>"  target="_blank"><?=$pack['name']?></a></p>
                              <comment><?=$pack['summary']?></comment>
                        </td>

                        <td class="icon" >
                        <a href="intro.php?dist=<?=$dist?>&pid=<?=$pid+1?>" target="_blank">
                        <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >
                        </a>
                        </td>
                        <td class="bre" >
                        <p><a href="intro.php?dist=<?=$dist?>&pid=<?=$pid+1?>"  target="_blank">libreoffice</a></p>
                         <comment><?=$pack['summary']?></comment>
                        </td>

                    </tr>

		<?php
		}
		?>
                    </table>
                </div>
            </li>
            <li id="button-1" class="tab_1 button button-dist">
                <h2>办公</h2>
                <div>
                    <p>办公类内容</p>
                     
                    <table class="software">
                       <tr>
                                            <td class="icon" >
                                                <a href="intro.php?dist=<?dist?> & packge=永中office" target="_blank">
                                                 <img src=" " alt="软件图片" style="width: 50px;height: 50px;" >
                                                </a>
                                            </td>
                                              <td class="bre" >
                                                  <a href="intro.php?dist=<?=$dist?> & packge=永中office"  target="_blank">
                                                  <p>永中office<p>
                                                  </a>
                                                  <comment>zxfgdfg</comment>
                                            </td>
                                            </tr>
                                        </table>
                </div>
            </li>
            <li id="button-2" class="tab_2 button button-dist">
                <h2>学习</h2>
                <div>
                    <p>学习类内容</p>
                     
                    <table class="software">
                    <tr>
                        <td class="icon" >
                            <a href="intro.php?dist=<?dist?> & packge=永中office" target="_blank">
                             <img src=" " alt="软件图片" style="width: 50px;height: 50px;" >
                            </a>
                        </td>
                          <td class="bre" >
                              <a href="intro.php?dist=<?=$dist?> & packge=永中office"  target="_blank">
                              <p>永中office<p>
                              </a>
                              <comment>zxfgdfg</comment>
                        </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li id="button-3" class="tab_3 button button-dist" >
                <h2>游戏</h2>
                <div>
                    <p>游戏类内容</p>
                     
                    <table class="software">
                    <tr>
                        <td class="icon" >
                            <a href="intro.php?dist=<?dist?> & packge=永中office" target="_blank">
                             <img src=" " alt="软件图片" style="width: 50px;height: 50px;" >
                            </a>
                        </td>
                          <td class="bre" >
                              <a href="intro.php?dist=<?=$dist?> & packge=永中office"  target="_blank">
                              <p>永中office<p>
                              </a>
                              <comment>zxfgdfg</comment>
                        </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li id="button-4" class="tab_4 button button-dist">
                <h2>娱乐</h2>
                <div>
                    <p>娱乐类内容<p>
                     
                    <table class="software">
                    <tr>
                        <td class="icon" >
                            <a href="intro.php?dist=<?dist?> & packge=永中office" target="_blank">
                             <img src=" " alt="软件图片" style="width: 50px;height: 50px;" >
                            </a>
                        </td>
                          <td class="bre" >
                              <a href="intro.php?dist=<?=$dist?> & packge=永中office"  target="_blank">
                              <p>永中office<p>
                              </a>
                              <comment>zxfgdfg</comment>
                        </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li id="button-5" class="tab_5 button button-dist">
                <h2>系统</h2>
                <div>
                    <p>系统类内容<p>
                     
                    <table class="software">
                    <tr>
                        <td class="icon" >
                            <a href="intro.php?dist=<?dist?> & packge=永中office" target="_blank">
                             <img src=" " alt="软件图片" style="width: 50px;height: 50px;" >
                            </a>
                        </td>
                          <td class="bre" >
                              <a href="intro.php?dist=<?=$dist?> & packge=永中office"  target="_blank">
                              <p>永中office<p>
                              </a>
                              <comment>zxfgdfg</comment>
                        </td>
                        </tr>
                    </table>

                </div>
            </li>
            <li id="button-6" class="tab_6 button button-dist">
                <h2>其它</h2>
                <div >

                    <p>其它类内容</p>
                     
                    <table class="software">
                    <tr>
                        <td class="icon" >
                            <a href="intro.php?dist=<?dist?> & packge=永中office" target="_blank">
                             <img src=" " alt="软件图片" style="width: 50px;height: 50px;" >
                            </a>
                        </td>
                          <td class="bre" >
                              <a href="intro.php?dist=<?=$dist?> & packge=永中office"  target="_blank">
                              <p>永中office<p>
                              </a>
                              <comment>zxfgdfg</comment>
                        </td>
                        </tr>
                    </table>
                </div>
            </li>
        </ul>
    </div>
</div>
