$(document).ready(function(){
    loadMore();
});

$("#content-1").scroll(function(){
//console.log($(this).scrollTop() + " " + $(this)[0].scrollHeight + " " + $(this).height());
if ($(this).scrollTop() + $(this).height() >= $(this)[0].scrollHeight)
    	loadMore();
});

function loadMore()
{
    $.ajax({
        url : 'data.php',
        dataType : 'json',
        success : function(json)
        {
            if(typeof json == 'object')
            {
                var oProduct, $row, iHeight, iTempHeight;
                for(var i=0, l=json.length; i<l; i++)
                {
                    oProduct = json[i];
                    iHeight = -1;
                    $('#intr').each(function(){
                        iTempHeight = Number( $(this).height() );
                        if(iHeight==-1 || iHeight>iTempHeight)
                        {
                            iHeight = iTempHeight;
                            $row = $(this);
                        }
                    });
                    $item = $('<li><img src="'+oProduct.image+'" border="0" >'+oProduct.title+'</li>').hide();
                    $row.append($item);
                    $item.fadeIn();
                }
            }
        }
    });
}
