let slidesPricing = document.querySelectorAll(".swiper-slide-pricing");
let siperPricingBtnPrev=document.querySelector(".swiper-pricing-btn-prev");
let siperPricingBtnNext=document.querySelector(".swiper-pricing-btn-next");
let slideCountPricing = slidesPricing.length;
function initAOS(){
  AOS.init({    
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 900, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: true, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
  });
}

function bannerAnimation()
{
  if (window.innerWidth >= 991.98) {
    bannerAnimationDesktop();
  } else {
    bannerAnimationMobile();
  }
}

function bannerAnimationDesktop(){
    var tl = gsap.timeline({duration: 1});
    tl.to(".banner__left", {duration: 0.75, opacity: 1});
    tl.to('.banner__image-wrapper',{duration: 0.75, opacity: 1});
    // tl.to('.banner__decor',{duration:.5, y:0, opacity: 1})
}

function bannerAnimationMobile(){
  var tl = gsap.timeline({duration: 1});
  tl.to('.banner__image-wrapper',{duration: 0.75, opacity: 1});
  // tl.to('.banner__decor',{duration:.5, y:0, opacity: 1})
  tl.to('.banner__left',{duration: 1, opacity: 1});
}



const lightboxVideo = GLightbox({
  selector: ".glightboxVideo",
  touchNavigation: true,
  //loop: true,
  autoplayVideos: true,
});

$(window).resize(function () {
	if (window.innerWidth <= 767) {
		$("#FAQImageMobileHolder").append($(".faq__mascot-one-container"));
    $("#FAQImageMobileHolder").append($(".faq__mascot-two-container"));
	}else{
    $("#FAQInner").append($(".faq__mascot-one-container"));
    $("#FAQInner").append($(".faq__mascot-two-container"));
  }
});

$(document).ready(function () {
  bannerAnimation();
  if (window.innerWidth <= 767) {
		$("#FAQImageMobileHolder").append($(".faq__mascot-one-container"));
    $("#FAQImageMobileHolder").append($(".faq__mascot-two-container"));
  
	} else{
    $("#FAQInner").append($(".faq__mascot-one-container"));
    $("#FAQInner").append($(".faq__mascot-two-container"));
  }
  initAOS();

  var swiperTest = new Swiper('.swiper-pricing-new', {
    spaceBetween: 20,
    slidesPerView: 1,
    speed: 1000,
    grabCursor: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      575: {
        slidesPerView: 2,
  
      },

      767: {
        slidesPerView: 2,
  
      },
      991: {
        slidesPerView: 2,
  
      },
      1200: {
        slidesPerView: 4,
      
      },
    }
  });
});

