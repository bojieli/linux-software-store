<?php
if (empty($_GET['dist'])) {
	$dist = 'ubuntu';
} else {
	$dist = $_GET['dist'];
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


  <!--This search area-->
  <?php include"static/public/search.html"?>




  <div id="header"></div>
   <!-- This is 'content-2' -->
        <?php include"static/public/content-2.php"?>

  <!-- This is 'content-1' -->
        <?php include"static/public/content-1.php"?>
   </div>
</div>
</body>
</html>
