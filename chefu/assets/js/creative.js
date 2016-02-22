/*!
 * Start Bootstrap - Creative Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

(function($) {
    "use strict"; // Start of use strict
//    if ($(window).scrollTop() <= 120) {
//        alert("top");
//    }
    // jQuery for page scrolling feature - requires jQuery Easing plugin
//    $(window).scroll(function() {
//    if (document.documentElement.clientHeight + $(document).scrollTop() >= document.body.offsetHeight ){ 
//                    // Display alert or whatever you want to do when you're 
//                    //   at the bottom of the page. 
//                    document.getElementById("main_1").style.display = "none";
//            document.getElementById('about_1').style.display = "block";
//            document.getElementById("features_1").style.display = "none";
//            document.getElementById("cat_1").style.display = "none";
//            document.getElementById("chef_1").style.display = "none";
//            document.getElementById("book_1").style.display = "none";
//            document.getElementById("contact_1").style.display = "none";
//            document.getElementById("learner_1").style.display = "none";
//                }
//                if($(this).scrollTop()>=$('#features_1').position().top){
//                    alert("jack");
//                }
//            });


    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Fit Text Plugin for Main Header
    $("h1").fitText(
        1.2, {
            minFontSize: '35px',
            maxFontSize: '65px'
        }
    );

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Initialize WOW.js Scrolling Animations
    new WOW().init();

})(jQuery); // End of use strict
