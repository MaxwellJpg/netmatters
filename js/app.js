
//IE check
if (window.document.documentMode) {
    //alert('Please consider using a different browser');
    $('.hd-wrapper').addClass('ie-hd-style');
    $('.Divider').addClass('divider');
    $('.service-list').addClass('ie-service-grid');
    $('.news').addClass('ie-news-grid');
}

$('.list .item').hover(
    function(){
        $(this).children().toggleClass('grayscale-off');
    }
);

function disableScroll() {
    document.body.style.overflow = 'hidden';
    document.querySelector('html').scrollTop = window.scrollY;
}
    
function enableScroll() {
    document.body.style.overflow = null;
}

/*
*   SIDE MENU
*/
Mmenu.configs.offCanvas.page.selector = ".wrapper";

document.addEventListener(
    "DOMContentLoaded", function () {
        new Mmenu("#side-nav", {
            // options
            "slidingSubmenus": false,
            "navbars": [{
                "use": "false",
            }],
            "extensions": [
                "pagedim-black",
                "position-right",
            ]
        });
    }
);

$('.sub').prepend('<i class="fa fa-angle-double-right" aria-hidden="true"></i>');

// CAROUSEL
$(function () {
    $('.carousel').square1({
        theme: 'light',
        animation: 'slide',
        gestures: true,
        keyboard: false,
        background: 'linear-gradient(270deg, transparent 25%, #000)'
    });
});

// COOKIE POPUP 
const popWrap = $('#cookie-consent');

function PopUp(hideOrshow) {
    if (hideOrshow == 'hide') {
        popWrap.css('display', 'none');
        enableScroll();
    }
    else if (!localStorage.getItem("popupWasShown")) {
        localStorage.setItem("popupWasShown", 1);
        popWrap.removeAttr("style");
        disableScroll();
    }
}
window.onload = function () {
    setTimeout(function () {
        PopUp('show');
    }, 0);
}

$("#accept-cookies").on('click', function () {
    PopUp('hide')
});