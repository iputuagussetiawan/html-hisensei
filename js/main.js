
let body = document.querySelector("body");
let burgerMenu = document.querySelector("#hamburger");
let navbarCollapse=document.querySelector(".navbar-collapse"); 
let navbarCustom=document.querySelector(".navbar-custom"); 
let isClosed = false;


! function($) {
    "use strict";
	var Hisensei = function() {};

    Hisensei.prototype.initStickyMenu = function() {
        $(window).scroll(function() {
            let scroll = $(window).scrollTop();
            if (scroll >= 50) {
                $(".navbar-custom").addClass("nav-sticky");
            } else {
                $(".navbar-custom").removeClass("nav-sticky");
                $(".navbar-custom").removeClass("soft-blue")
            }
        });
    },

    Hisensei.prototype.initSmoothLink = function() {
        $('.navbar-nav .nav-link-custom').on('click', function(event) {
            var $anchor = $(this);
            burgerMenu.classList.remove("open");
            burgerMenu.classList.add("closed");
            body.classList.remove('no-scroll');
            isClosed = false;
            navbarCollapse.classList.remove("show");
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 50
            }, 100, 'easeInOutSine');
            event.preventDefault();
        });
    },

    Hisensei.prototype.initBacktoTop = function() {
        $(window).scroll(function (event) {
            if ($(this).scrollTop() > 100) {
                $('.scroll-totop').fadeIn();
            } else {
                $('.scroll-totop').fadeOut();
            }
            let y = $(this).scrollTop();
            let windowHieght = $(window).height();
            let ctop = $(".footer").offset().top;
            let currentScroll = ctop - y;
            if (currentScroll <= windowHieght) {
                $(".scroll-totop").addClass("text-white");
            } else {
                $(".scroll-totop").removeClass("text-white");
            }
        });

        $('.scroll-totop').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 100);
            return false;
        });  
    },
    Hisensei.prototype.init = function() {
        this.initStickyMenu();
        this.initSmoothLink();
        this.initBacktoTop();
        //this.initAOS();
    },
    //init
    $.Hisensei = new Hisensei, $.Hisensei.Constructor = Hisensei
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.Hisensei.init();
    $('.scroll-totop').fadeOut();
}(window.jQuery);

//Native Js
if(burgerMenu){
    burgerMenu.onclick = function () {
        burgerTime();
    };
}
function burgerTime() {
    if(navbarCustom.classList.contains('nav-sticky')){
        navbarCustom.classList.remove("soft-blue");
    }else{
        navbarCustom.classList.add("soft-blue");
    }
	if (isClosed == true) {
		burgerMenu.classList.remove("open");
		burgerMenu.classList.add("closed");
        body.classList.remove('no-scroll');
		isClosed = false;
	} else {
		burgerMenu.classList.remove("closed");
		burgerMenu.classList.add("open");
        body.classList.add('no-scroll');
		isClosed = true;
	}
}

// function initSelect2(element){
//      $('#'+element).select2();
// }


