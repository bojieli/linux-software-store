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

a img {border:none}
a img:hover {border:none;
             color:red;}

body {
  font-family: sans-serif;
  font-size: small;
  vertical-align: middle;
  text-align: center;
  margin: 0;
  padding: 0;
}
#wrapper {
  text-align: left;
  margin: 0 auto;
  width: 1024px;
}
p {
    font-family: KaiTi;
    font-size: 22px;
    padding-top: 1px;
}
/* You named this layer   3 */
#background {
  width: 1024px;
  height: 768px;
}
#header {
  width: 100%;
  height: 188px;
}
/* You named this layer  230550 */
#content-2 {
  float: left;
  margin: 0 22px;
  width: 230px;
  height: 550px;
  background-image: url(../img/content-2.png);
}
/* You named this layer   calendar */
#info {
  padding: 10px;
  width: 205px;
  height: 200px;
  filter:alpha(opacity=50);
   text-align: center;
}
.nav {
  float: left;
  width: 115px;
  height: 55px;
  line-height: 55px;
  font-size: 25px;
  text-align: center;
  background-image: url(../img/<?=$dist?>/button-4.png);
}
/* You named this layer home-button */
#home-button {
  width: 230px;
  height: 55px;
  line-height: 55px;
    font-family:  sans-serif;
    font-size:40px;
    text-align: center;  
}

/* You named this layer content-1 */
#content-1 {
  float: right;
  margin-right: 35px;
  width: 700px;
  height: 550px;
  background-image: url(../img/content-1.png);
}
/* You named this layer lightbutton */
#lightbutton {
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
  color: black;
  text-decoration: none;
}
a:visited {
  color:black;
  text-decoration: none;
}
a:hover {
  color: bule;

   text-decoration: underline;
  font-weight: bold;
}


TEXTAREA
{
    margin: 0px;
    padding: 0px;
	font: 20px "Droid Sans", "Segoe UI", "Trebuchet MS", "Bitstream Vera Sans", "Luxi Sans", Verdana, arial;
    color: #777;
	border: 1px solid #BBB;
	background-color: #FFF;
	overflow-y: auto;
}