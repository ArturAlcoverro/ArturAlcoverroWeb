$(document).ready(function(){
    var video = document.getElementById('video-artio');
    $('.video-buttons button').click(function(){
        video.currentTime = $(this).data('time');
        video.play()
    });
});
