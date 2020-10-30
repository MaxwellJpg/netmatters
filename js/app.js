Mmenu.configs.offCanvas.page.selector = ".wrapper";
new Mmenu( "#side-nav", {
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
// document.addEventListener(
//     "DOMContentLoaded", () => {
//         new Mmenu( "#side-nav", {
//             // options
//             "slidingSubmenus": false,
//             "navbars": [{
//                 "use": "false",
//             }],
//             "extensions": [
//                "pagedim-black",
//                "position-right",
//             ]
//         });
//     }
// );

$('.sub').prepend('<i class="fa fa-angle-double-right" aria-hidden="true"></i>');