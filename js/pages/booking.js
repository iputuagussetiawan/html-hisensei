

$(document).ready(function() {
  $('.select2Default').select2({dropdownAutoWidth : true})
    $('.select2-nosearch').select2({
      minimumResultsForSearch: -1
  });

  fetch("js/data/phoneGlobal.json")
  .then(res => res.json())
  .then(data => {
    var results = $.map(data, function (obj) {
      obj.id = obj.id || obj.dial_code; // replace pk with your identifier
      obj.text = obj.text || obj.dial_code + ' | ' +  obj.name; // replace name with the property used for the text
      return obj;
    });
    $('.select2Phone').select2({
      dropdownAutoWidth : true,
      data: results
    });
  })
    //pageTransitionBooking()
  cardBookingAnimation()
});

function pageTransitionBooking(){
    var tlPageTransition=gsap.timeline();
    tlPageTransition.to('ul.transition li',{duration:.5, scaleY:1,transformOrigin:'bottom left', stagger:.2})
    tlPageTransition.to('ul.transition li',{duration:.5, scaleY:0,transformOrigin:'bottom left', stagger:.1, delay:.1,onComplete: cardBookingAnimation})
  }

function cardBookingAnimation(){
    var tlCardBooking = gsap.timeline({duration: 0.75});
    tlCardBooking.to(".card-form", {duration: 0.75, opacity: 1});
}