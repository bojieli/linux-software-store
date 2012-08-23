$(function () {
    $("#panel h5.head").show(function () {
        $(this).next("div.content").hide();
    });
    $("#panel h5.head").mouseenter(function () {
        $(this).next("div.content").slideToggle().mouseout(function () {
            $(this).next("div.content").slideToggle();
        });
    });
});