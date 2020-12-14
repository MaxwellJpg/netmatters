
//IE check
if (window.document.documentMode) {
    //alert('Please consider using a different browser');
    $('.hd-wrapper').addClass('ie-hd-style');
    $('.Divider').addClass('divider');
    $('.service-list').addClass('ie-service-grid');
    $('.news').addClass('ie-news-grid');
}

//hover for sponsor image to toggle greyscale
$('.list .item').hover(
    function(){
        $(this).children().toggleClass('grayscale-off');
    }
);

//Scroll locks
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

//Sticky header
let position = $(window).scrollTop();
$(document).ready(function() {
    const $header = $("header"),
        $clone = $header.before($header.clone().addClass("clone")); 
        
    let position = $(window).scrollTop();

    $(window).on("scroll", function() {
        let fromTop = $(window).scrollTop();

        if(fromTop > position && fromTop > 200) { //down
            $("body").removeClass("down");
        } else { //up
            $("body").addClass("down");
        }
        position = fromTop;
    });
});
//sticky header end

//nav links
$('.contact').click(function(){
    document.location.href ='contact-us.php';
 });

 //contact-us
 $('.accordion').click(function(){
    $('.out-of-hours').toggleClass("active");
    $('.accordion i').toggleClass("rotate");
 });