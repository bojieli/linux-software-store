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
  font-family: "Microsoft YaHei","TrueType ","Apple LiGothic",sans-serif;
  vertical-align: middle;
  text-align: center;
  margin: 0;
  padding: 0;

}

#wrapper {

  margin: 0 auto;
  width: 1024px;
}

p {
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
  background-image: url(../img/<?=$dist?>/<?=$dist?>.png);

}
/* You named this layer  230550 */
#content-2 {

  float: left;
  margin: 0 22px;
  width: 230px;
  height: 550px;
  background-image: url(../img/content-2.png);
}

#info {
  padding: 10px;
  width: 210px;
  height: 200px;
}
.nav {
  float: left;
}
.nav a {
  background-image: url(../img/<?=$dist?>/button-4.png);
  color: black;
  display: inline-block;
  font-size: 22px;
  height: 55px;
  line-height: 55px;
  text-align: center;
  width: 114px;
}
.nav a:hover {
  background-color: black;
  color: white;
  cursor: pointer;
  text-decoration: none;
}
#dist
{
width:230px;
height:330 px;


}
#home-button a {
  background-image: url(../img/<?=$dist?>/button-1.png);
  color: black;
  display: inline-block;
  font-size: 30px;
  height: 55px;
  line-height: 55px;
  text-align: center;  
  width: 230px;
}
#home-button a:hover {
  background-color: black;
  color: white;
  cursor: pointer;
  text-decoration: none;
}

#content-1 {
  float: right;
  margin-right: 35px;
  width: 700px;
  height: 550px;
  background-image: url(../img/content-1.png);
}

#lightbutton {
  width: 100px;
  height: 30px;
  z-index: 16;
    font-family: sans-serif;
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
  color: blue;
  text-decoration: underline;
  font-weight: bold;
}

a img {border:none}

a img:hover {border:none;color:red;}

#panel { width: 705px; height:50px;border: 1px solid #0050D0 ;}

.head { padding top: 20px; cursor: pointer;background: #ffffff; }

.content { padding top: 90px;text-indent: 2em;background: #ffffff; border-top: 1px solid #0050D0;display:block; font-size:15px;}

.img{ width:50px;height:50px;}

.td {align:center;font-size:15px;}

.searchinput{
	border-right-width: 0px;
	padding-left: 2px;
	width: 140px;
	font-family: arial;
	float: left;
	border-top-width: 0px;
	border-bottom-width: 0px;
	color: #636365;
	margin-left: 4px;
	font-size: 15px;
	vertical-align: middle;
	border-left-width: 0px;
	margin-right: 3px;
}

.tab_search{
	border-bottom: #cccccc 1px solid;
	border-left: #cccccc 1px solid;
	height: 25px;
	border-top: #cccccc 1px solid;
	border-right: #cccccc 1px solid;

}
.searchaction{
	width: 21px;
	float: left;
	height: 17px;
}


.intro
{
 font-size:20px;
}

