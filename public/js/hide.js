$(document).ready(function () {

    var scroll = $(window).scrollTop();
    hide(scroll, "fade");
    hide(scroll, "fade-top");
    hide(scroll, "fade-right");
    hide(scroll, "fade-left");

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        hide(scroll, "fade");
        hide(scroll, "fade-top");
        hide(scroll, "fade-right");
        hide(scroll, "fade-left");
    });
});

function hide(scroll, effect) {
    $('.hide.' + effect).each(function () {
        $this = $(this);
        vh = $(window).height() / 100;
        if ($this.offset().top <= scroll + (60 * vh)) {
            $this.removeClass(effect);
        }
    });
}
