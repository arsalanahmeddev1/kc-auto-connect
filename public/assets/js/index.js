

// const tabsNextBtn = document.querySelectorAll('.tabs-next-btn');
// const navLink = document.querySelectorAll('.nav-link');
// const tabs = document.querySelectorAll('.tab-pane')
// tabsNextBtn.forEach((btn, index) => {
//     btn.addEventListener('click', function (e) {
//         tabs.forEach(link => {
//             link.style.display = 'none';
//         });
//         tabs[index].style.display = 'block'
//     });
// });


// tabs form end


$('.service-cards').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});
$('.testimonial-slider').slick({
    dots: false,
    infinite: true,
    arrows: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {

                slidesToScroll: 1,
                dots: false,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
$('.reason-cards').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    arrows: false,
    responsive: [

        {
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        },

        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});
function openNav() {
    let openBtn = document.getElementById("mySidenav");
    openBtn.style.width = "350px";
    openBtn.style.transition = "1s";


}

function closeNav() {
    let closeBtn = document.getElementById("mySidenav");
    closeBtn.style.width = "0"
    closeBtn.style.transition = '0.3s'
}
let navs = document.querySelector('.navbar-nav')
let menuIcon = document.querySelectorAll('.menu-toggle')
console.log(navs, menuIcon);
menuIcon.forEach(function (e) {
    e.addEventListener('click', function () {
        navs.classList.toggle('active');
    });
});


let shouldExecuteCode = true;
if (shouldExecuteCode) {
    const passFields = document.querySelectorAll('.pass-field')
    const passBtn = document.querySelectorAll('.show-pass')
    console.log(passBtn);
    console.log(passBtn);
    passBtn.forEach((btn, index) => {
        passFields[index].type = 'password'
        btn.addEventListener('click', function (e) {
            // alert('hellow')
            e.preventDefault();
            if (passFields[index].type === 'password') {
                passFields[index].type = 'text'
                btn.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passFields[index].type = 'password'
                btn.classList.replace('fa-eye-slash', 'fa-eye');
            }
        })
    })
}


// icon change
function changeIcon(x) {
    if (x.textContent === "+") {
        x.textContent = "−";
    } else {
        x.textContent = "+";
    }
}
// icon change end


const tabsNextBtn1 = document.querySelector('#next-tabs-btn-1')
const tabsNextBtn2 = document.querySelector('#next-tabs-btn-2')
const tabsNextBtn3 = document.querySelector('#next-tabs-btn-3')
const tabsPrevBtn1 = document.querySelector('#prev-tabs-btn-1')
const tabsPrevBtn2 = document.querySelector('#prev-tabs-btn-2')
const tabForm1 = document.querySelector('.tab-form-1')
const tabForm2 = document.querySelector('.tab-form-2')
const tabForm3 = document.querySelector('.tab-form-3')
const progressBar = document.querySelectorAll('.step-indicators');
// let currentStep = 0;
// progressBar[currentStep].classList.add('active')
const tabNextPrevBtnFunc = (nextPrevBtn, tabStep1, tabStep2,value,value2) => {
    if (nextPrevBtn) {
        nextPrevBtn.onclick = function () {
            tabStep1.style.left = value;
            tabStep2.style.left = value2;
        }
    }
}
function progressFunc(nextButton, addRemove, number) {
    nextButton.addEventListener('click', () => {
        progressBar.forEach((btn, index) => {
            if (index === number) {
                if(addRemove === 'add') {
                    btn.classList.add('active')
                } else {
                    btn.classList.remove('active')
                }
            }
        });
    })
}
progressFunc(tabsNextBtn1, 'add', 1)
progressFunc(tabsNextBtn2, 'add', 2)
progressFunc(tabsPrevBtn1, 'remove', 1)
progressFunc(tabsPrevBtn2, 'remove', 2)
tabNextPrevBtnFunc(tabsNextBtn1, tabForm1, tabForm2, '-112rem', '0');
tabNextPrevBtnFunc(tabsNextBtn2, tabForm2, tabForm3, '-112rem', '0');
tabNextPrevBtnFunc(tabsPrevBtn1, tabForm1, tabForm2 , '0', '112rem');
tabNextPrevBtnFunc(tabsPrevBtn2, tabForm2, tabForm3 , '0', '112rem');   


// Image uploaderjs
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});








