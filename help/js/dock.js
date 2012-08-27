/**
 * Created with JetBrains WebStorm.
 * User: czluck
 * Date: 12-8-27
 * Time: 下午2:44
 * To change this template use File | Settings | File Templates.
 */
//
// login.js
//
//   This is where all the javascript required by your design is written.
//
//   Or
//   July 4, 2012, 1:59 pm with

$(document).ready(function(){

    // This is required for the PNG fix to work.
    if (window.DD_belatedPNG)
        DD_belatedPNG.fix('.png ');

    // This is some javascript to stop IE from displaying the img alt attributes
    // when you mouse over imagess.  If you would like IE to display the alt attributes,
    // just comment out the following 4 lines.  Don't worry, if you leave this in
    // place, your ALT attributes are still readable by the search engines.
    var tmpalt;
    $("img").hover(
        function(){ tmpalt = $(this).attr( "alt" ); $(this).attr( "alt", "" ); },
        function(){ $(this).attr( "alt", tmpalt ); });


    $(function(){
        $(".result > div > a").each(function(){
            $(this).find("img").hover(function(){
                $(this).animate({
                    width: 120,
                    height: 120,
                    padding: 10,
                    left: -20,
                    top: -20
                },200).fadeTo(200,1.5).addClass("hover");
            },function(){
                $(this).animate({
                    width: 70,
                    height: 70,
                    padding: 3,
                    left: 0,
                    top: 0
                },200).fadeTo(200,0.7).removeClass("hover");
            });
            $(this).click(function(){
                //添加当前选中图片样式
                $(".dock> div > a > img").removeClass("on");
                $(this).find("img").addClass("on");
                //启用超链接?
                $(this).attr("href");
                return true;
            }).hover(function(){
                    $(this).css("z-index",1);
                },function(){
                    $(this).css("z-index",0);
                });
        });
    });

});





