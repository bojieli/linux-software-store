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
    <div id="background" class="bg" style="background-image: url(./static/img/<?=$dist?>/<?=$dist?>.jpg); background-repeat: no-repeat">

    <?php include"static/public/search.html"?>
    <div id="header"></div>
        <!-- This is 'content-1' -->
        <div id="content-1" class="content-arch">
                <p>此处显示<?=$package?>相关的软件搜索的结果</p>
            <br>
            <br>
            <pre class="intro"><a href="intro.php?dist=<?=$dist?>&package=<?=$package?>" target="_new"><?=$package?>软件简介</a></pre>
                 <div id="more">
                 <script type="text/javascript" src="static/js/jquery.more.js"></script>
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

        <!-- This is 'content-2' -->
         <?php include"static/public/content-2.html"?>
    </div>
</div>
</body>
</html>
