$(document).ready(function() {
    $("#button-scroll").click(function() {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 2000);
    });

    $("#info-btn").click(function() {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 2000);
    });

    $("#reg-btn").click(function() {
        $('html, body').animate({
            scrollTop: $("#register-zone").offset().top
        }, 2000);
    });
});