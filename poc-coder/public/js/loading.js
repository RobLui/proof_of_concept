$( document ).ready(function() {

    $('#checker').click(function(e){
       e.preventDefault();
       PlayAnimation();
       setTimeout(
           function() {
               $(this).form.submit()
           }, 2000);
    });

    function PlayAnimation() {
        var elem = document.getElementById("checker");
        var pos = 0;
        var id = setInterval(frame, 5);
        function frame() {
            if (pos == 350) {
                clearInterval(id);
            } else {
                pos++;
                elem.style.top = pos + 'px';
                elem.style.left = pos + 'px';
            }
        }
    }

});