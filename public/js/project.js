$(document).ready(function(){
    $('.project').hover(function(){
        var $parent = $(this).parent().parent();
        var name = $(this).data('name');
        var color =  $(this).data('color')
        $parent.addClass('bg-navbar-' + name);
        setTimeout(() => {
            $('.animation-'+name).addClass('animation-'+name+'-on');
        }, 100);
        $(this).parent().children().children().addClass('opacity-0');
        $(this).parent().children().addClass('bg-transparent');
        $(this).children().removeClass('opacity-0');
        $(this).removeClass('bg-transparent');

        if($('#work').offset().top <= (document.documentElement.scrollTop + 66)){
            $('#navbar').addClass('bg-navbar-' + name);
        }
    },function(){
        var $parent = $(this).parent().parent();
        var name = $(this).data('name');
        $parent.removeClass('bg-navbar-' + name);
        $('.animation-'+name).removeClass('animation-'+name+'-on');
        $(this).parent().children().children().removeClass('opacity-0');
        $(this).parent().children().removeClass('bg-transparent');
        $('#navbar').removeClass('bg-navbar-' + name);
    })
});
