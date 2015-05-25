$("#scrollup").click(function(){$('body,html').animate({scrollTop:0},500);})
$(".qr_tool").mouseover(function(){
    $(".qrcode_box").css("display","block");
});
$(".qr_tool").mouseout(function(){
    $(".qrcode_box").css("display","none");
});