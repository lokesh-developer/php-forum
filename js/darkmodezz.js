$('#darkmode').click(function () {
    $('html').css('filter', 'invert(1) hue-rotate(180deg)');
    $('.inverted').css('filter', 'invert(1) hue-rotate(180deg)');
    $('#darkmode').hide();
    $('#lightmode').show();
});
$('#lightmode').click(function () {
    $('html').css('filter', '');
    $('.inverted').css('filter', '');
    $('#darkmode').show();
    $('#lightmode').hide();
});