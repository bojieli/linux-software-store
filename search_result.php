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
        <br>
        <br>
                <p>此处显示<?=$package?>相关的软件搜索的结果</p>
            <br>
            <br>
            <hr>
            <div  class="software">
                                    <div class="icon" >
                                        <a href="intro.php?dist=<?dist?> & packge=<?=$package?>" target="_blank">
                                         <img src=" " alt="软件图片" style="width: 50px;height: 50px;" >
                                        </a>
                                    </div>
                                      <div class="brf" >
                                          <a href="intro.php?dist=<?=$dist?> & packge=<?=$package?>"  target="_blank">
                                                <p><?=$package?><p>
                                          </a>
                                          <comment>zxfgdfg</comment>
                                    </div>
                                </div>


            <div id="more">
            <script type="text/javascript">

$(function(){
	var winH = $(window).height(); //页面可视区域高度
	var i = 1;
	$(window).scroll(function () {
	    var pageH = $(document.body).height();
		var scrollT = $(window).scrollTop(); //滚动条top
		var aa = (pageH-winH-scrollT)/winH;
		if(aa<0.02){
			$.getJSON("result.php",{page:i},function(json){
				if(json){
					var str = "";
					$.each(json,function(index,array){
						var str = "<div class=\"single_item\"><div class=\"element_head\">";
						var str = str + "<div class=\"date\">"+array['date']+"</div>";
						var str = str + "<div class=\"author\">"+array['author']+"</div>";
                        var str = str + "</div><div class=\"content\">"+array['content']+"</div></div>";
						$("#container").append(str);
					});
					i++;
				}else{
					$(".nodata").show().html("别滚动了，已经到底了。。。");
					return false;
				}
			});
		}
	});
});

                 </script>
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
