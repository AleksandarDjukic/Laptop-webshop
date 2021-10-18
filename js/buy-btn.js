$(document).ready(function(){
    $('.buy-now').click(function(){
        $('.buy-modal-body').css("display", "block");
        $('.buy-modal-body').addClass("animate__backInDown");
    });
    $('.buyCancel').click(function(){
        $('.buy-modal-body').slideUp();
        console.log("ok");
    });
});
