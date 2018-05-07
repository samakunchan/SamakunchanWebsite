$(document).ready(function () {
    setTimeout(function () {
        $('#body').fadeIn();
        $('#fondLoader').hide();
        $('#loader').hide();
        $('#footer').show(8000);
    }, 200)
    $('.samCtrl').click(function () {
        $('#body').fadeOut();
    })
});