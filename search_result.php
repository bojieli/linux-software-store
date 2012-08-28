<?php
if (empty($_GET['dist'])) {
	$dist = 'ubuntu';
} else {
	$dist = $_GET['dist'];
}
if (empty($_GET['package'])) {
	$package = 'bash';
} else {
	$package = addslashes($_GET['package']);
}

function firstLetterToUpper($word) {
	if ($word[0] >= 'a'&& $word[0] <= 'z') {
$word[0] = chr(ord($word[0])- ord('a') + ord('A'));
}
return $word;
}
$distname = firstLetterToUpper($dist);
include "static/public/head.html"
?>


<body>

<div id="wrapper">
    <!-- This is 'background' -->
    <div id="background" class="bg">

    <?php include"static/public/search.html"?>
    <div id="header"></div>
        <!-- This is 'content-1' -->
        <div id="content-1" class="content-arch">
        <br>
        <br>
                <p>此处显示<?=$package?>相关的软件搜索的结果</p>
            <br>
            <br>
            <hr>
            <ul>
            <li>
            <div  class="software">
                                    <div class="icon" >
                                        <a href="intro.php?dist=<?dist?> & packge=<?=$package?>" target="_blank">
                                         <img src=" " alt="软件图片" style="width: 50px;height: 50px;padding-top:3px;" >
                                        </a>
                                    </div>
                                      <div class="brf" >
                                          <a href="intro.php?dist=<?=$dist?> & packge=<?=$package?>"  target="_blank">
                                                <p><?=$package?><p>
                                          </a>
                                          <comment>zxfgdfg</comment>
                                    </div>
                                    <hr>
                                </div>

             </li>
             <li>
                         <div  class="software">
                                                 <div class="icon" >
                                                     <a href="intro.php?dist=<?dist?> & packge=<?=$package?>" target="_blank">
                                                      <img src=" " alt="软件图片" style="width: 50px;height: 50px;padding-top:3px;" >
                                                     </a>
                                                 </div>
                                                   <div class="brf" >
                                                       <a href="intro.php?dist=<?=$dist?> & packge=<?=$package?>"  target="_blank">
                                                             <p><?=$package?>a<p>
                                                       </a>
                                                       <comment>zxfgdfg</comment>
                                                 </div>
                                                 <hr>
                                             </div>

                          </li>
            <li>
                        <div  class="software">
                                                <div class="icon" >
                                                    <a href="intro.php?dist=<?dist?> & packge=<?=$package?>" target="_blank">
                                                     <img src=" " alt="软件图片" style="width: 50px;height: 50px;padding-top:3px;" >
                                                    </a>
                                                </div>
                                                  <div class="brf" >
                                                      <a href="intro.php?dist=<?=$dist?> & packge=<?=$package?>"  target="_blank">
                                                            <p><?=$package?>ab<p>
                                                      </a>
                                                      <comment>zxfgdfg</comment>
                                                </div>
                                                <hr>
                                            </div>

                         </li>
            <li>
            <div id="more">
            <script type="text/javascript" src="static/js/more.js"> </script>
                 <div class="single_item">
                      <div class="name">
                           <div class="pic"></div>
                           <div class="brief"></div>
                           <div class="rank"></div>
                       </div>
                 </div>

                 <a href="javascript:;" class="get_more">::点击加载更多内容::</a>
           </div>
         </div>
        </li>
        <script type="text/javascript">
                $(function(){
                    $('#more').more({'address': 'data.php'})
                });
            </script>
      </ul>
        <!-- This is 'content-2' -->
         <?php include"static/public/content-2.php"?>
    </div>
</div>
</body>
</html>
