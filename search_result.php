<?php
if (empty($_GET['dist'])) {
	$dist = 'ubuntu';
} else {
	$dist = $_GET['dist'];
}
if (empty($_GET['package'])) {
	$package = '';
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


<body background="static/img/<?=$dist?>/<?=$dist?>.jpg" style= "background-position:center;background-repeat:no-repeat;background-attachment:fixed ">

<div id="wrapper">
    <!-- This is 'background' -->
    <div id="background" class="bg">

    <?php include"static/public/search.html"?>
    <div id="header"></div>
        <!-- This is 'content-1' -->
        <div id="content-1" class="content-arch scroll">
        <br>
        <br>
                <p ><?=$package?>相关的软件搜索的结果</p>
            <br>
            <br>
            <hr>
            <!--<script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>-->
            <link type="text/css" rel="stylesheet" href="static/css/waterfall.css" />
            <script type="text/javascript" language="javascript" src="static/js/waterfall.js"></script>
            <ul id="intr">
            <li>

                <a href="intro.php?dist=<?=$dist?>&package=<?=$package?>" target="_new"><img class="icon" src="'+oProduct.image+'" border="0" ><a>
                <div style="float: right;height: 50px;width: 550px;">
                <p>
                     <a href="intro.php?dist=<?=$dist?>&package=<?=$package?>" target="_new"><?=$package?></a>
                </p>
                    <comment>
                     <?=$package?>是个好软件
                    </comment>
                </div>
            </li>
            </ul>
       	</div>
        <!-- This is 'content-2' -->
         <?php include"static/public/content-2.php"?>
    </div>
    <!-- UJian Button BEGIN -->
    <script type="text/javascript" src="http://v1.ujian.cc/code/ujian.js?type=slide&num=3&pos=left&btn=4&uid=1674756"></script>
    <!-- UJian Button END -->
    <!-- UY BEGIN -->

</div>
</body>
</html>
