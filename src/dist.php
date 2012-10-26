<?php
require_once('common_funcs.php');
if (empty($_GET['dist'])) {
	$dist = 'ubuntu';
} else {
	$dist = $_GET['dist'];
}
$distname = firstLetterToUpper($dist);
include "../static/public/head.html"
?>

<body background="../static/img/<?=$dist?>/<?=$dist?>.jpg" style= "background-position:center;background-repeat:no-repeat;background-attachment:fixed">

<div id="wrapper">
  <!-- This is 'background' -->
  <div id="background" class="bg">

  <!--This search area-->

  <?php include "../static/public/search.html"?>
  <div id="header"></div>

   <!-- This is 'content-2' -->
        <?php include "content-2.php"?>
  <!-- This is 'content-1' -->
	<?php include "content-1.php"?>
   </div>
</div>
</body>
</html>
