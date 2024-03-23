let link = document.querySelector(".link");
let pink = document.querySelector(".color");

let hoverTL = gsap.timeline();
hoverTL.pause();

// from, to, fromTo Tweens
hoverTL.to(pink, {
  width: "calc(100% + 1.3em)",
  ease: "Elastic.easeOut(0.25)",
  duration: 0.4
});
hoverTL.to(pink, {
  width: "2em",
  left: "calc(100% - 1.45em)",
  ease: "Elastic.easeOut(0.4)",
  duration: 0.6
});

link.addEventListener("mouseenter", () => {
  hoverTL.play();
});

link.addEventListener("mouseleave", () => {
  hoverTL.reverse();
});


window.addEventListener('scroll', function() {
    scrollheader();
});
scrollheader();
function scrollheader(){
	var scroll = window.pageYOffset || document.documentElement.scrollTop;
    var header = document.querySelector('header');
    if (scroll >= 100) {
        header.classList.add('colored');
    } else {
        header.classList.remove('colored');
    }
}
















const swiper = new Swiper(".swiper", {
	// Optional parameters
	direction: "horizontal",
	loop: true,
	autoHeight: false,
	centeredSlides:true,
	slidesPerView: 1,
  // Responsive breakpoints
  breakpoints: {
		640: {
      slidesPerView:2,
			  spaceBetween: 40,
    },
    992: {
      slidesPerView: 3,
			  spaceBetween: 40,
    }
  },

	// If we need pagination
	pagination: {
		el: ".swiper-pagination"
	},

	// Navigation arrows
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev"
	}

	// And if we need scrollbar
	/*scrollbar: {
    el: '.swiper-scrollbar',
  },*/
});









///////////////////////////////////////////
// Resizing Slider

const inputs = document.querySelectorAll("input");
const div = document.querySelector("li");

function handleInputChange() {
  const units = this.dataset.units || "";

  document.documentElement.style.setProperty(
    `--${this.name}`,
    this.value + units
  );
}

inputs.forEach((input) => input.addEventListener("input", handleInputChange));
var range = $("input#range"),
  value = $(".range-value");
value.html(range.attr("value"));
range.on("input", function () {
  value.html(this.value);
});





$(".nav ul li a").on('click', function(event){
	if (window.matchMedia('(max-width: 767px)').matches) {
		$('.nav ul').removeClass('addgrid');
	}
});

var a = '1';
function openmenu(){
	if(a === '1'){
		$('.nav ul').addClass('addgrid');
		a = '2';
	}else{
		$('.nav ul').removeClass('addgrid');
		a = '1';
	}
}
