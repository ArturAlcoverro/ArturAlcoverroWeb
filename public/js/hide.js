$(window).on('load',function () {

    var scroll = $(window).scrollTop();
    var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();

    hide(scroll, scrollBottom, "fade");
    hide(scroll, scrollBottom, "fade-top");
    hide(scroll, scrollBottom, "fade-right");
    hide(scroll, scrollBottom, "fade-left");

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();

        hide(scroll, scrollBottom, "fade");
        hide(scroll, scrollBottom, "fade-top");
        hide(scroll, scrollBottom, "fade-right");
        hide(scroll, scrollBottom, "fade-left");
    });
});

function hide(scroll, scrollBottom, effect) {
    $('.' + effect).each(function () {
        var $this = $(this);
        var height = $this.height();
        var vh = $(window).height() / 100;

        if ($this.offset().top <= scroll + (70 * vh) || scrollBottom <= height) {
            $this.removeClass(effect);
        }
    });
}
