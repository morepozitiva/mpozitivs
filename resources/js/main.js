$(document).ready(function(){
  $('body').append('<a href="#" id="go-top" title="Вверх">Вверх</a>');
  $('[data-toggle="tooltip"]').tooltip({html:true, trigger:"hover click"}); 
});
$(function() {
 $.fn.scrollToTop = function() {
  $(this).hide().removeAttr("href");
  if ($(window).scrollTop() >= "250") $(this).fadeIn("slow")
  var scrollDiv = $(this);
  $(window).scroll(function() {
   if ($(window).scrollTop() <= "250") $(scrollDiv).fadeOut("slow")
   else $(scrollDiv).fadeIn("slow")
  });
  $(this).click(function() {
   $("html, body").animate({scrollTop: 0}, "slow")
  })
 }
});
$(function() {
 $("#go-top").scrollToTop();
});
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip({html:true, trigger:"hover click"});

});

// 
$(document).ready(function() {
new WOW({
            mobile: false
        }).init();
    });
// 
// naviki
    $(document).ready(function() {
        $('.skillbar').each(function() {
            $(this).find('.skillbar-bar').animate({
                width: $(this).attr('data-percent')
            }, 6000);
        });
    });

    $('.Count').each(function() {
        var $this = $(this);
        $({ Counter: 0 }).animate({ Counter: $this.text() }, {
            duration: 6000,
            easing: 'swing',
            step: function() {
                $this.text(Math.ceil(this.Counter));
            }
        });
    });
    // naviki end
    // 
    // 
    /*
    ==========   Smooth Scroll To Section   ==========
    */
    $(document).ready(function() {
        var links = $(".nav-link a");
        var mobileLinks = $(".nav-link a");
        // var singleButton = $(".choose-jalousie");

        var doScroll = function(e) {
            var goToClass = "." + e.target.dataset.goTo;
            $('html, body').animate({
                scrollTop: $(goToClass).offset().top
            }, 500);
        };
        links.click(function(e) {
            e.preventDefault();
            doScroll(e);
        });
        // mobileLinks.click(function(e){
        //     e.preventDefault();
        //     doScroll(e);
        //     $(".mobile-navigation__links").removeClass('mobile-navigation__links--visible');
        // });
        // singleButton.click(function(e){
        //    e.preventDefault();
        //    doScroll(e);
        // });

    });
    // 
    // 