var opensidebar = false;
$( document ).ready(function() {
    $('#arrow-open').click(function() {
        opensidebar = true;
        $('.sidebar').stop().animate({

            left:'0'
        }, 'fast'
        );
    });
    $('#arrow-close').click(function() {
        opensidebar = false;
        $('.sidebar').stop().animate({
                left:'-260px'
            }, 'fast'
        );
    });
});

var onresize = function(e) {
    //note i need to pass the event as an argument to the function
    width = e.target.outerWidth;
    if (width >= 1024 && !opensidebar) {
        $('.sidebar').stop().animate({
                left:'0'
            }, 'fast'
        );
    }
    else if (width < 1024) {
        $('.sidebar').stop().animate({
                left:'-260px'
            }, 'fast'
        );
    }

}
window.addEventListener("resize", onresize);

$(".image-input").on("change", function () {
    console.log($(this));
});