var opensidebar = false;
$( document ).ready(function() {
    $('#arrow-open').click(function() {
        opensidebar = true;
        $('.sidebar').animate({

            left:'0',
            zIndex:'1'
        }, 1000
        );
    });
    $('#arrow-close').click(function() {
        opensidebar = false;
        $('.sidebar').animate({
                left:'-260px',
                zIndex:'1'
            }, 1000
        );
    });
});

var onresize = function(e) {
    //note i need to pass the event as an argument to the function
    width = e.target.outerWidth;
    if (width >= 1024 && !opensidebar) {
        $('.sidebar').animate({
                left:'0',
                zIndex:'1'
            }, 1000
        );
    }
    else if (width < 1024) {
        $('.sidebar').animate({
                left:'-260px',
                zIndex:'1'
            }, 1000
        );
    }

}
window.addEventListener("resize", onresize);