$(document).ready(function(){
    $('.project').hover(function(){
        var $parent = $(this).parent().parent();
        var color =  $(this).data('color')
        $parent.addClass('bg-navbar-' + $(this).data('name'));
        $(this).parent().children().children().addClass('opacity-0');
        $(this).parent().children().addClass('bg-transparent');
        $(this).children().removeClass('opacity-0');
        $(this).removeClass('bg-transparent');

        if($('#work').offset().top <= (document.documentElement.scrollTop + 66)){
            $('#navbar').addClass('bg-navbar-' + $(this).data('name'));
        }
    },function(){
        var $parent = $(this).parent().parent();
        $parent.removeClass('bg-navbar-' + $(this).data('name'));
        $(this).parent().children().children().removeClass('opacity-0');
        $(this).parent().children().removeClass('bg-transparent');
        $('#navbar').removeClass('bg-navbar-' + $(this).data('name'));
    })
});