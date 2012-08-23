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
  width: 210px;
  height: 200px;
  filter:alpha(opacity=50);
  text-align: center;
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
  color: blue;
   text-decoration: underline;
  font-weight: bold;
}


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


#content-3{
  float: left;
  margin-left: 35px;
  width: 567px;
  height: 550px;
  background-image: url(../img/content-1.png);
}

#brf
{
  float: top;
  width: 567px;
  height: 100px;

}

#detail
{
 width: 567px;
 height: 195px;
 text-align:left;
}

.sw_img
{

     width: 100px;
     height: 100px;
     align:center;
}
.sw_name{

  width:467px;
  height:100px;
  font-size:40px;
  text-align:center;
}
.sw_info_1
{
    width: 567px;
    height:35px;
    text-align：center;
    background:yellow;
 }

.sw_info_2
{
    width: 567px;
    height:35px;
    text-align：center;
    background:purple;

}

.sw_intro
{
  width: 567px;
  height:35px;
  padding:3px;
  text-align：left;
  filter:alpha(opacity=50);

}
#content-4 {
  float: right;
  margin-right: 35px;
  width: 375px;
  height: 550px;
  background-image: url(../img/content-1.png);
}

.comment
{
  width: 375px;
  height: 550px;
}

.sum
{
   width: 375px;
   height: 35px;
   background:lightblue;
   font-size:25px;

}
.message
{
     width: 375px;
     height:135px;
     align:left;

}

.face
{
     width: 375px;
     height:35px;
     background:lightgreen;

}

.comment_1
{
     width: 375px;
     height:50px;
     background:yellow;

}
.comment_2
{
     width: 375px;
     height:50px;
     background:green;

}

.intro
{
 font-size:20px;
}