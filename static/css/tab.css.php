<?php
header("Content-Type: text/css");
$dist = $_GET['dist'];
?>
.page {
	font-size: 12px;
	padding: 40px;
}
ul {
	padding: 0;
	margin: 0;
	list-style: none;
}
h2 {
	font-size: 12px;
	padding: 0;
	margin: 0;
}


.tabs {
	width: 700px;
	height: 550px;	
}
.tabs li {
	line-height: 26px;
	height: 28px;
	float: left;
	position: relative;
}
.tabs h2 {
	text-align: center;
	background:url("../img/<?=$dist?>/button-3.png");
	width: 100px;
	cursor: pointer;
}
.tabs h2.active {
	background:url("../img/<?=$dist?>/button-2.png");

}
.tabs .tab_0 h2 {
	border-left: none;
}
.tabs .tab_0 div {
	display: block;

}
.tabs div {
	background: none;
	display:none;
	width: 650px;
	height: 495px;
	border-top: none;
	padding: 20px;
	position: absolute;
	top: 28px;
	left: 0;
}

.tab_0 div {
	left: 0;
}
.tab_1 div {
	left: -100px;
}
.tab_2 div {
	left: -200px;
}
.tab_3 div {
	left: -300px;
}
.tab_4 div {
	left: -400px;
}
.tab_5 div {
	left: -500px;
}
.tab_6 div {
	left: -600px;
}

.tabs tr {
	background: none;
	width: 650px;
	height: 45px;
	border-top: none;
}

.software{
     width:650px;
     height:470px;

}

.icon{
     width:45px;
}

.bre{
    width:220px;
    text-align:left;
    font-size:15px;
}

.tabs hr{
width:650px;
}

*{  margin:0;padding:0;}



#panel {
         width: 650px; border: 1px;
          }

.head {
        padding-top: 5px; cursor: pointer
        }

.content {
            padding: 10px;
            text-indent: 2em;
            border-top: 1px solid #0050D0;
            display:block;
            }
