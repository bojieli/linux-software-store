/**
 * Created with JetBrains WebStorm.
 * User: czluck
 * Date: 12-8-23
 * Time: 上午10:34
 * To change this template use File | Settings | File Templates.
 */
$(down=true ,
  $(function act(){
    ob=document.all("messagebox");
    ob.style.posTop=yp;
    if(yp<=xp)down=true;
    if(yp>=xp)down=false;
    if(down){step=4;}
    else{step=-4;}
   setTimeout('act('+(yp+step)+','+yk+','+yx+')',35)
}),
$(function activity(){
    ob=document.all("messagebox");
    if(ob.style.posTop<=50){
        var hei=document.body.clientHeight;
        act(50,hei-100,50);
    }
})
);