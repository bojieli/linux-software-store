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
            <script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

            <link type="text/css" rel="stylesheet" href="css/waterfall.css" />
            <script type="text/javascript" language="javascript" src="js/waterfall.js"></script>
            <ul id="intr" >
            <li>


             </li>
             <li>


              </li>
            <li>

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
