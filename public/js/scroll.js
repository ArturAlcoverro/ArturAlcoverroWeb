$(document).ready(function () {
    // AOS.init();
    pageSelector();
    navbarScroll($(window).scrollTop());
    console.log($("#main").css('background-position-y'));

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        $("#main").css({
            'background-position-y': 'calc(' + (scroll * 0.5) + "px + 50%)"
        });
        pageSelector();
        navbarScroll(scroll)
    });
});

function pageSelector() {
    var $navs = $("#navbar li a");
    for (var i = 0; i < $navs.length; i++) {
        var navElem = $($navs[i]);
        var nextElem = $($navs[i + 1]);
        if (nextElem.length !== 0
            ? ($(navElem.attr("href")).offset().top <= (document.documentElement.scrollTop + 200) && $(nextElem.attr("href")).offset().top >= (document.documentElement.scrollTop + 200))
            : $(navElem.attr("href")).offset().top <= (document.documentElement.scrollTop + 200)) {
            navElem.parent().addClass('page-active');
            $('.menu-list a[href="' + navElem.attr('href') + '"]').parent().addClass('page-active-mobile');
        } else {
            navElem.parent().removeClass('page-active');
            $('.menu-list a[href="' + navElem.attr('href') + '"]').parent().removeClass('page-active-mobile');
        }
    }
}

function navbarScroll(scroll) {
    if (scroll > 50) {
        $('#navbar').addClass('bg-navbar');
    }
    else {
        $('#navbar').removeClass('bg-navbar');
    }

    if ($('#work').offset().top > scroll + 66) {
        $('.project').each(function (index) {
            $('#navbar').removeClass('bg-' + $(this).data('name'));
        });
    }
    else {
        $('.project').each(function (index) {
            if ($('#work').hasClass('bg-navbar-' + $(this).data('name'))) {
                $('#navbar').addClass('bg-' + $(this).data('name'));
            }
        });
    }
}

