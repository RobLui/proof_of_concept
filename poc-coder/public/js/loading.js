$( document ).ready(function() {
    var time = 7000;

    $('#checker').click(function(e){

        e.preventDefault();
        PlayAnimation();
        $('#load_animation').removeClass('hidden');
        $('.remove-on-check').addClass('hidden');
        $('.t').addClass('loading-text');

        // rebind the event to the form :) werkend! (na x seconden)
        setTimeout(function () {
            console.log("test")
            $('#checker').unbind('click').click();
        }, time);
    });

    function PlayAnimation() {
        var elem = document.getElementById("checker");
        var pos = 0;
        var id = setInterval(frame, 0.1);
        function frame() {
            if (pos == 1000) {
                clearInterval(id);
            } else {
                pos++;
                elem.style.top = pos + 'px';
                elem.style.bottom = pos + 'px';
            }
        }
    }
});