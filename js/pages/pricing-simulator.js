$(document).ready(function() {
    console.log('pricing simulator page')
    $('.select2').select2({dropdownAutoWidth : true})
    //pageTransitionBooking();
    $('.spinner .btn-spiner').click(function () {
        console.log('test')
        var $input = $(this).parents('.spinner').find('input.spinner__input');
        console.log($input);
        if($(this).hasClass('minus')) {
            var count = parseFloat($input.val()) - 1;
            count = count < 1 ? 1 : count;
            if (count < 2) {
                $(this).addClass('dis');
            }
            else {
                $(this).removeClass('dis');
            }
            $input.val(count);
        }else {
            var count = parseFloat($input.val()) + 1
            $input.val(count);
            if (count > 1) {
                $(this).parents('.spinner').find(('.minus')).removeClass('dis');
            }
        }
        $input.change();
        return false;
    });

    contentAnimation();
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
//     onComplete: contentAnimation,
// });

function contentAnimation(){
    var tlpricingSimulator = gsap.timeline({duration: 1});
    tlpricingSimulator.to(".section-title-wrapper", {y: 0, duration: 0.75, opacity: 1});
    //tlpricingSimulator.to(".section-title__description", {y: 0, duration: 0.75, opacity: 1});
    tlpricingSimulator.to(".card-simulator", {y: 0, duration: 0.75, opacity: 1});
    tlpricingSimulator.to(".card-sidebar", {y: 0, duration: 0.75, opacity: 1});
}

let btnAddSchedule=document.querySelector('.btn-add-schedule');
btnAddSchedule.addEventListener("click", new_link);

var ct = 1;
function new_link()
{
	ct++;
	var div1 = document.createElement('div');
	div1.id = ct;
	// link to delete extended form elements
    var scheduleForm = '';
     scheduleForm+='<div class="row mb-2 g-1 align-items-center scheduleForm__item">';
     scheduleForm+='<div class="col-3 d-sm-none">';
    scheduleForm+='<div class="row g-2 scheduleForm__label-container">';
    scheduleForm+='<label class="scheduleForm__label"> Subject</label>';
    scheduleForm+='<label class="scheduleForm__label"> Time</label>';
    scheduleForm+='</div>';
     scheduleForm+='</div>';

     scheduleForm+='<div class="col-7 col-sm-11 mb-2 mb-sm-0">';
     scheduleForm+='<div class="row g-2">';
     scheduleForm+='<div class="col-12 col-sm-6 mb-2 mb-sm-0">';
     scheduleForm+='<select name="scheduleSubject" id="scheduleSubject'+ct+'" class="form-control select2" required>';
     scheduleForm+='<option selected>Select Subject</option>';
     scheduleForm+='<option >English</option>';
     scheduleForm+='<option>Mathematics</option>';
     scheduleForm+='<option>Science</option>';
     scheduleForm+='</select>';
     scheduleForm+='</div>';

     scheduleForm+='<div class="col-12 col-sm-6 mb-2 mb-sm-0">';
     scheduleForm+='<select name="scheduleTime" id="scheduleTime'+ct+'" class="form-control select2" required>';
     scheduleForm+='<option selected>Select Time</option>';
     scheduleForm+='<option >13:00-14:30</option>';
     scheduleForm+='<option>14:30-16:00</option>';
     scheduleForm+='</select>';
     scheduleForm+='</div>';
     scheduleForm+='</div>';
     scheduleForm+='</div>';

     
     scheduleForm+='<div class="col-2 col-sm-1 text-end mb-2">';
     scheduleForm+='<a href="javascript:delIt('+ ct +')" class="btn btn-delete mb-2"><i class="far fa-trash-alt"></i></a>';
     scheduleForm+='</div>';
     scheduleForm+='</div>';
     scheduleForm+='</div>';
     
	div1.innerHTML =scheduleForm;
	document.getElementById('scheduleForm').appendChild(div1);
    $('.select2').select2({dropdownAutoWidth : true})
}
// function to delete the newly added set of elements
function delIt(eleId)
{
	d = document;
	var ele = d.getElementById(eleId);
	var parentEle = d.getElementById('scheduleForm');
	parentEle.removeChild(ele);
}


var acc = document.getElementsByClassName("accordion-act");
var i;

function removeClassAcct()
  {
   var allElements = document.querySelectorAll(".accordion-act");
   var allPanel = document.querySelectorAll(".panel");
   for(i=0; i<allElements.length; i++)
   { 
    allElements[i].classList.remove('active');
   }

   for(i=0; i<allPanel.length; i++)
   { 
    allPanel[i].style.maxHeight = null;
   }
  }

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    removeClassAcct();
    //this.classList.add("active");

    if(this.classList.contains("active")){
        this.classList.remove("active");
    }else{
        this.classList.add("active");
    }
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}