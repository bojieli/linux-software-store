
$(document).ready(function(){
    loadMore();
});

$(window).scroll(function(){

    if ($(document).height() - $(this).scrollTop() - $(this).height()<100) loadMore();
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
                    $('#intr li').each(function(){
                        iTempHeight = Number( $(this).height() );
                        if(iHeight==-1 || iHeight>iTempHeight)
                        {
                            iHeight = iTempHeight;
                            $row = $(this);
                        }
                    });

                    $item = $('<div><img src="'+oProduct.image+'" border="0" ><br />'+oProduct.title+'</div>').hide();

                    $row.append($item);
                    $item.fadeIn();
                }
            }
        }
    });
}