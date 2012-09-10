
<?php
                 //$rs = mysql_query("SELECT * FROM cz_pack WHERE did = '$did' AND recommend = 2");
                 //while ($pack = mysql_fetch_array($rs)) {
			$pack = array(
			   'pid' => 1,
			    'name' =>  'xx软件',	
				'icon_url' => '',
				'url' => 'http://mirrors.ustc.edu.cn/',
				'summary' =>'软件是个好东西'
);
//}
?>

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
                            <a href="intro.php?dist=<?=$dist?>&package=firefox" target="_blank">
                             <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >
                            </a>
                        </td>
                        <td class="bre" >
                              <p><a href="intro.php?dist=<?=$dist?>&package=firefox"  target="_blank"><?=$pack['name']?></a></p>
                              <comment><?=$pack['summary']?></comment>
                        </td>

                        <td class="icon" >
                        <a href="intro.php?dist=<?=$dist?>&package=firefox" target="_blank">
                        <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >

                        </a>
                        </td>
                        <td class="bre" >
                        <p><a href="intro.php?dist=<?=$dist?>&package=firefox"  target="_blank">firefox</a></p>
                         <comment>firefox<?=$pack['summary']?></comment>
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
                    <p><a href="search_result.php?dist=<?=$dist?>&tid=office">办公类内容</a></p>
                     
                    <table class="software">
                       <?php
                       		    for ($i=0; $i<5; $i++) {
                       		    ?>
                                           <tr>
                                               <td class="icon" >
                                                   <a href="intro.php?dist=<?=$dist?>&package=firefox" target="_blank">
                                                    <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >
                                                   </a>
                                               </td>
                                               <td class="bre" >
                                                     <p><a href="intro.php?dist=<?=$dist?>&package=firefox"  target="_blank"><?=$pack['name']?></a></p>
                                                     <comment><?=$pack['summary']?></comment>
                                               </td>

                                               <td class="icon" >
                                               <a href="intro.php?dist=<?=$dist?>&package=firefox" target="_blank">
                                               <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >

                                               </a>
                                               </td>
                                               <td class="bre" >
                                               <p><a href="intro.php?dist=<?=$dist?>&package=firefox"  target="_blank">永中office</a></p>
                                                <comment>永中office<?=$pack['summary']?></comment>
                                               </td>

                                           </tr>

                       		<?php
                       		}
                       		?>
                     </table>
                </div>
            </li>
            <li id="button-2" class="tab_2 button button-dist">
                <h2>学习</h2>
                <div>
                    <p><a href="search_result.php?dist=<?=$dist?>&tid=study">学习类内容</a></p>
                     
                    <table class="software">
                    <?php
                    		    for ($i=0; $i<5; $i++) {
                    		    ?>
                                        <tr>
                                            <td class="icon" >
                                                <a href="intro.php?dist=<?=$dist?>&package=firefox" target="_blank">
                                                 <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >
                                                </a>
                                            </td>
                                            <td class="bre" >
                                                  <p><a href="intro.php?dist=<?=$dist?>&package=firefox"  target="_blank"><?=$pack['name']?></a></p>
                                                  <comment><?=$pack['summary']?></comment>
                                            </td>

                                            <td class="icon" >
                                            <a href="intro.php?dist=<?=$dist?>&package=firefox" target="_blank">
                                            <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >

                                            </a>
                                            </td>
                                            <td class="bre" >
                                            <p><a href="intro.php?dist=<?=$dist?>&package=firefox"  target="_blank">Qtiplot</a></p>
                                             <comment>Qtiplot是做大物实验的利器，这个<?=$pack['summary']?></comment>
                                            </td>

                                        </tr>

                    		<?php
                    		}
                    		?>
                    </table>
                </div>
            </li>
            <li id="button-3" class="tab_3 button button-dist" >
                <h2>游戏</h2>
                <div>
                    <p><a href="search_result.php?dist=<?=$dist?>&tid=game">游戏类内容</a></p>
                     
                    <table class="software">
                    <?php
                    		    for ($i=0; $i<5; $i++) {
                    		    ?>
                                        <tr>
                                            <td class="icon" >
                                                <a href="intro.php?dist=<?=$dist?>&package=firefox" target="_blank">
                                                 <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >
                                                </a>
                                            </td>
                                            <td class="bre" >
                                                  <p><a href="intro.php?dist=<?=$dist?>&package=firefox"  target="_blank"><?=$pack['name']?></a></p>
                                                  <comment><?=$pack['summary']?></comment>
                                            </td>

                                            <td class="icon" >
                                            <a href="intro.php?dist=<?=$dist?>&package=firefox" target="_blank">
                                            <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >

                                            </a>
                                            </td>
                                            <td class="bre" >
                                            <p><a href="intro.php?dist=<?=$dist?>&package=firefox"  target="_blank">SuperTUX</a></p>
                                             <comment>SuperTUX是个好玩的赛车类游戏，它<?=$pack['summary']?></comment>
                                            </td>

                                        </tr>

                    		<?php
                    		}
                    		?>
                    </table>
                </div>
            </li>
            <li id="button-4" class="tab_4 button button-dist">
                <h2>娱乐</h2>
                <div>
                    <p><a href="search_result.php?dist=<?=$dist?>&tid=passtime">娱乐类内容<p>
                     
                    <table class="software">
                   <?php
                   		    for ($i=0; $i<5; $i++) {
                   		    ?>
                                       <tr>
                                           <td class="icon" >
                                               <a href="intro.php?dist=<?=$dist?>&package=firefox" target="_blank">
                                                <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >
                                               </a>
                                           </td>
                                           <td class="bre" >
                                                 <p><a href="intro.php?dist=<?=$dist?>&package=firefox"  target="_blank"><?=$pack['name']?></a></p>
                                                 <comment><?=$pack['summary']?></comment>
                                           </td>

                                           <td class="icon" >
                                           <a href="intro.php?dist=<?=$dist?>&package=firefox" target="_blank">
                                           <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >

                                           </a>
                                           </td>
                                           <td class="bre" >
                                           <p><a href="intro.php?dist=<?=$dist?>&package=firefox"  target="_blank">Kmplayer</a></p>
                                            <comment>Kmplayer是个优秀的开源软件，支持很多格式，它<?=$pack['summary']?></comment>
                                           </td>

                                       </tr>

                   		<?php
                   		}
                   		?>
                    </table>
                </div>
            </li>
            <li id="button-5" class="tab_5 button button-dist">
                <h2>系统</h2>
                <div>
                    <p><a href="search_result.php?dist=<?=$dist?>&tid=system">系统类内容</a><p>
                      <table class="software">
            <?php
		    for ($i=0; $i<5; $i++) {
		    ?>
                    <tr>
                        <td class="icon" >
                            <a href="intro.php?dist=<?=$dist?>&package=firefox" target="_blank">
                             <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >
                            </a>
                        </td>
                        <td class="bre" >
                              <p><a href="intro.php?dist=<?=$dist?>&package=firefox"  target="_blank"><?=$pack['name']?></a></p>
                              <comment><?=$pack['summary']?></comment>
                        </td>

                        <td class="icon" >
                        <a href="intro.php?dist=<?=$dist?>&package=firefox" target="_blank">
                        <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >

                        </a>
                        </td>
                        <td class="bre" >
                        <p><a href="intro.php?dist=<?=$dist?>&package=firefox"  target="_blank">Ubuntu-tweak</a></p>
                         <comment>Ubuntu-tweak<?=$pack['summary']?>，帮助我们更方便地配置ubuntu</comment>
                        </td>

                    </tr>

		        <?php
		        }
		        ?>
                    </table>

                </div>
            </li>
            <li id="button-6" class="tab_6 button button-dist">
                <h2>其它</h2>
                <div >

                    <p><a href="search_result.php?dist=<?=$dist?>&tid=others">其它类内容</p>
                     
                    <table class="software">
                    <?php
                    		    for ($i=0; $i<5; $i++) {
                    		    ?>
                                        <tr>
                                            <td class="icon" >
                                                <a href="intro.php?dist=<?=$dist?>&package=firefox" target="_blank">
                                                 <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >
                                                </a>
                                            </td>
                                            <td class="bre" >
                                                  <p><a href="intro.php?dist=<?=$dist?>&package=firefox"  target="_blank"><?=$pack['name']?></a></p>
                                                  <comment><?=$pack['summary']?></comment>
                                            </td>

                                            <td class="icon" >
                                            <a href="intro.php?dist=<?=$dist?>&package=firefox" target="_blank">
                                            <img src="<?=$pack['icon_url']?>" alt="软件图片" style="width: 50px;height: 50px;" >

                                            </a>
                                            </td>
                                            <td class="bre" >
                                            <p><a href="intro.php?dist=<?=$dist?>&package=firefox"  target="_blank">PHP5</a></p>
                                             <comment>PHP5<?=$pack['summary']?>,它能很轻松地完成建立工程的任务</comment>
                                            </td>

                                        </tr>

                    		<?php
                    		}
                    		?>
                    </table>
                </div>
            </li>
        </ul>
    </div>
</div>
