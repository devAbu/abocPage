//SMOOTH SCROLLING
// Select all links with hashes
$('a[href*="#"]')
    .click(function(event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });

var delay = 350,
    setTimeoutConst, zrtva;
$(".teamMember").on('mouseenter', function() {
    zrtva = $(this);
    setTimeoutConst = setTimeout(function() {
        zrtva.children("p").slideDown();
    }, delay);
}).mouseleave(function() {
    clearTimeout(setTimeoutConst);
    zrtva.children("p").slideUp();
});