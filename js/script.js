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
        items: 2,
        loop: true,
        // autoplay: true,
        margin: 20,
        responsive: {
            0: {
                items: 1,
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
                items: 2,
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
$(function () {
    $('#datepicker').datepicker();
});
$(function () {
    $('#datepicker-2').datepicker();
});
$(function () {
    $('#datepicker-3').datepicker();
});
$(function () {
    $('#datepicker-4').datepicker();
});

// COUNTER
let counter = document.querySelectorAll(".counter");
let arr = Array.from(counter);

arr.map((item) => {
    let count = item.innerHTML;
    item.innerHTML = 0;
    let counterValue = 1;

    function counterUP() {
        item.innerHTML = counterValue++;

        if (counterValue > count) {
            clearInterval(counting);
        }
    }

    let counting = setInterval(() => {
        counterUP();
    }, item.dataset.speed / count);
});
// SELECT
var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /* For each element, create a new DIV that will act as the selected item: */
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /* For each element, create a new DIV that will contain the option list: */
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
        /* For each option in the original select element,
        create a new DIV that will act as an option item: */
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function (e) {
            /* When an item is clicked, update the original select box,
            and the selected item: */
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
        /* When the select box is clicked, close any other select boxes,
        and open/close the current select box: */
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}

function closeAllSelect(elmnt) {
    /* A function that will close all select boxes in the document,
    except the current select box: */
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);

// OFFCANVAS

(function ($) {
    $(document).ready(function () {

        $('#cssmenu li.active').addClass('open').children('ul').show();
        $('#cssmenu li.has-sub>a').on('click', function () {
            $(this).removeAttr('href');
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('li').removeClass('open');
                element.find('ul').slideUp(200);
            } else {
                element.addClass('open');
                element.children('ul').slideDown(200);
                element.siblings('li').children('ul').slideUp(200);
                element.siblings('li').removeClass('open');
                element.siblings('li').find('li').removeClass('open');
                element.siblings('li').find('ul').slideUp(200);
            }
        });

    });
})(jQuery);
