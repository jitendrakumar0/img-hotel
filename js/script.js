// STICKY HEADER

window.onscroll = function () {
    myFunction()
};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}
// OWL-CAROUSEL HOME
$(document).ready(function () {
    $('.owl-carousel-home').owlCarousel({
        items: 1,
        loop: true,
        // autoplay: true,
        margin: 20,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            550: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: true,
                loop: true
            },
            1200: {
                items: 1,
                loop: true,
            }
        }
    });
})
// OWL-CAROUSEL PP
$(document).ready(function () {
    $('.owl-carousel-pp').owlCarousel({
        items:2,
        loop: true,
        // autoplay: true,
        margin: 20,
        responsive: {
            0: {
                items: 2,
                nav: true
            },
            500: {
                items: 2,
                nav: false
            },
            800: {
                items: 2,
                nav: true,
                loop: true
            },
            1000: {
                items:2,
                nav: true,
                loop: true
            }
        }
    });
})
// OWL-CAROUSEL CT
$(document).ready(function () {
    $('.owl-carousel-ct').owlCarousel({
        items: 2,
        loop: true,
        autoplay: true,
        margin: 20,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            700: {
                items: 2,
                nav: false
            },
            1000: {
                items: 2,
                nav: true,
                loop: true,
                margin: 10
            }
        }
    });
})
// CHECK IN CHECK OUT
$(function(){
    $('#datepicker').datepicker();
  });
$(function(){
    $('#datepicker-2').datepicker();
  });

