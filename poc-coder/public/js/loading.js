$( document ).ready(function() {

    $('#checker').click(function(e){
       PlayAnimation();
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