$(document).ready(function() {
    //pageTransitionThankYou();
    cardThankYouAnimation();
});

// let loader = gsap.timeline();
// loader
//   .to(".loader__circle-container", {
//     duration: 0.5,
//     scale: 0,
//     ease: "expo.out",
//   })
//   .to(".loader__icon-container", {
//     duration: 0.5,
//     scale: 0,
//     ease: "expo.inOut",
//   })
//   .to(".loader", {
//     duration: 1.75,
//     yPercent: -100,
//     ease: "expo.inOut",
//     onComplete: cardThankYouAnimation,
//   });

function cardThankYouAnimation(){
    var tlCardBooking = gsap.timeline({duration: 0.75});
    tlCardBooking.to(".card-thankyou", {y: 0, duration: 0.75, opacity: 1});
}