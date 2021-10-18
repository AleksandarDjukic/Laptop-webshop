$('#preview').click(function(){
    var bg = $('#body-bg').val();
    $('#theme-preview').css("background-color",bg);
    var primary = $('#primary-color').val();
    $('#theme-nav').css("background-color",primary);
    $('#theme-h-button').css("background-color",primary);
    $('#offer').css("background-color",primary);
    $('#footer-preview').css("background-color",primary);
    $('.price-preview').css("background-color",primary);
    $('.buy-preview').css("background-color",primary);
    var secondary = $('#secondary-color').val();
    $('#theme-top').css("background-color",secondary);
    $('#footer-top-preview').css("background-color",secondary);
    var textColor = $('#text-color').val();
    $('.text-preview').css("color", textColor);
});
