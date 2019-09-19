$(document).ready(function () {
    var lang = false;

    $('#lang').click(function () {
        if (lang) {
            lang = false;
        } else {
            lang = true;
        }
        langMenu(lang);

    });

    $("#" + document.documentElement.lang + "-btn")
        .addClass('active')
        .click(function (e) {
            e.preventDefault();
        });
});

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function contrast(cookie) {
    if (cookie == 'true') {
        setCookie('acces', true, 7);
        $('#acces').css('opacity', 1);
        $('h1, h2, h3, h4, h5, h6, p, a').addClass('contrast');
        $('.si-contrast').addClass('contrast');
        $('.no-contrast').removeClass('contrast');
        $('#navbar').addClass('contrast-navbar');
    } else {
        setCookie('acces', false, 7);
        $('#acces').css('opacity', 0.6);
        $('h1, h2, h3, h4, h5, h6, p, a').removeClass('contrast');
        $('.si-contrast').removeClass('contrast');
        $('#navbar').removeClass('contrast-navbar');
    }
}

function langMenu(active) {
    if (active){
        $("#lang-menu").removeClass('lang-hide');
        $("#lang").addClass('lang-close');
    }else{
        $("#lang-menu").addClass('lang-hide');
        $("#lang").removeClass('lang-close');
    }
}
