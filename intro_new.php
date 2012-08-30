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
        <div id="content-3"></div>
        <div id="content-4">
            <!-- UY BEGIN -->
            <div id="uyan_frame"></div>
            <script type="text/javascript" id="UYScript" src="http://v1.uyan.cc/js/iframe.js?UYUserId=1674756" async=""></script>
            <!-- UY END -->

            </div>
        </div>
    </div>
 </body>