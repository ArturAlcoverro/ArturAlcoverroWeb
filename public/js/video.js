$(document).ready(function () {
    var video = document.getElementById('video-artio');
    var pause = false;
    var start_video;
    var end_video;

    $('.video-buttons button').click(function () {
        start_video = $(this).data('time'); //tiempo en el que empieza la funcionalidad seleccionada
        end_video = $(this).data('end'); //tiempo en el que finaliza la funcionalidad seleccionada
        pause = true;
        video.currentTime = start_video;
        video.play()
    });

    video.ontimeupdate = function () {
        if (pause) {
            var current = Math.floor(video.currentTime);

            //Comprueba si el video esta en la funcionalidad seleccionada
            if (current <= end_video && current >= start_video) {
                console.log(current);
                if (current == end_video) { //Si el video llega al final de la funcionalidad seleccionada se para
                    video.pause();
                    pause = false;
                }
            }
            /*Si no, significa que el usuario se ha movido a otra funconalidad manualmente
              y se cancela la pausa automatica.*/
            else {
                pause = false;
            }
        }
    }
});
