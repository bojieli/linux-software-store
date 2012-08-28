/**
 * Created with JetBrains WebStorm.
 * User: czluck
 * Date: 12-8-28
 * Time: 上午10:05
 * To change this template use File | Settings | File Templates.
 */
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
