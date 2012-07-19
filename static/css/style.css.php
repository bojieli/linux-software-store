<?php
header("Content-Type: text/css");
$dist = $_GET['dist'];
?>
/*
 *  style.css
 *
 *  This file was originally wriiten by czluck
 *  July 5, 2012, 10:34 am 
 *
 *
 *  July 10, 2012, 10:34 am
 *  change font 
 */
body {
  font-family: KaiTi, Geneva, Arial, Helvetica, sans-serif;
  font-size: small;
  vertical-align: middle;
}
p {
    font-family: KaiTi;
    font-size:22px;
    padding-top:1px;
}
/* You named this layer   3 */
#background {
  position: absolute;
  left: 170px;
  top: 0px;
  width: 1024px;
  height: 768px;
  z-index: 1;
}
/* You named this layer  230550 */
#content-2 {
  position: absolute;
  left: 22px;
  top: 188px;
  width: 230px;
  height: 550px;
  z-index: 2;
  background-image: url(../img/content-2.png);
}
/* You named this layer   calendar */
#calendar {
  padding:10px;
  width: 205px;
  height: 200px;
}
.nav {
	float: left;
	width: 115px;
	height: 55px;
	line-height: 55px;
	font-size: 22px;
	text-align: center;
	background-image: url(../img/<?=$dist?>/button-4.png);
}

/* You named this layer home-button */
#home-button {
  width: 230px;
  height: 55px;
  line-height: 55px;
    font-family: KaiTi;
    font-size:40px;
    text-align: center;  
}
/* You named this layer content-1 */
#content-1 {
  position: absolute;
  left: 292px;
  top: 188px;
  width: 700px;
  height: 550px;
  background-image: url(../img/content-1.png);
}
/* You named this layer lightbutton */
#lightbutton {
  position: absolute;
  left: 400px;
  top: 0px;
  width: 100px;
  height: 30px;
  z-index: 16;
    font-family: KaiTi;
    font-size:20px;
    text-align: center;  
}

.button {
	float: left;
	width: 100px;
	height: 30px;
	line-height: 30px;
	font-size: 20px;
	text-align: center;
}
/* Here are some examples of how you might want to change the
 * look and behavior of the links on your page.  Some examples for
 * further customization are included in comments.  */
a {
  cursor: pointer;
  outline: none;
  border: 0px;
}
a:link {
    color: #000;
    text-decoration: none;
     }
a:visited { color:#000 ; text-decoration: none;
}
a:hover {
  color: #000;
  text-decoration: underline;
  /* text-decoration: underline; */
  /* font-weight: bold; */
}