function bitton_click ()
{
	document.getElementsByName("button").onclick=function change()
	{
	   document.getElementByName("button").style=document.write("background-image:url(./img/button-1.png);width=100px ;height=30px;border:0px; ");
	   $(this).style=document.write("background-image:url(./img/button-2.png);width=100px ;height=30px;border:0px; ");	
	   document.close();
	}
}