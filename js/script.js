$(document).ready(function() {
   $('#humb').click(function (event) {
      $('#humb,#menu').toggleClass('active');
   });
});

$(document).ready(function () {
   $('.slider').slick({
      // arrows: true,
      // dots: true,
      // // adaptiveHeight: true,
      // slidesToShow: 3,
      // // slidesToScroll: 3,
      // speed: 300,
      // // easing: 'ease',
      // // infinite: false,  //бесконечное прокручивание
      // initialSlide: 1,
      // autoplay: false,
      // // autoplaySpeed: 2000,
      // pauseOnFocus: true,  //пауза при фокусе
      // pauseOnHover: true,  //пауза при наведении
      // pauseDotsHover: true,   //пауза при наведении на точки
      // draggable: false,
      // swipe: true,
      // // touchThreshold: 10,
      // touchMove: true,
      // waitforAnimatee: false,
      // centerMode: true,


      arrows: true,
      infinite: true,
      // centerMode: true,
      // centerPadding: '60px',
      slidesToShow: 1,
      slidesToScroll: 1,
      // variableWidth: true,
      draggable: false,
      speed: 500,
      adaptiveHeight: true,
      // appendArrows:$('.arrow')
      // responsive: [
      //    {
      //       breakpoint: 768,
      //       settings: {
      //          arrows: false,
      //          centerMode: true,
      //          centerPadding: '40px',
      //          slidesToShow: 3
      //       }
      //    },
      //    {
      //       breakpoint: 480,
      //       settings: {
      //          arrows: false,
      //          centerMode: true,
      //          centerPadding: '40px',
      //          slidesToShow: 1
      //       }
      //    }
      // ]
   });
});

const popupLinks = document.querySelectorAll('.popup-link');
const body = document.querySelector('.body');
const lockPadding = document.querySelectorAll(".lock-padding");

let unlock = true;

const timeout = 500;

if (popupLinks.length > 0) {
   for (let index = 0; index < popupLinks.length; index++) {
      const popupLink = popupLinks[index];
      popupLink.addEventListener("click", function (e) {
         const popupName = popupLink.getAttribute('href').replace('#', '');
         const curentPopup = getElemenById(popupName);
         popupOpen(curentPopup);
         e.preventDefault();
      })
   }
}

const popupCloseIcon = document.querySelectorAll('.close-popup');
if (popupCloseIcon.length > 0) {
   for (let index = 0; index < popupCloseIcon.length; index++) {
      const el = popupCloseIcon[index];
      el.addEventListener('click', function (e) {
         popupClose(el.closest('.popup'));
         e.preventDefault();
      })
   }
}

function popupOpen(curentPopup) {
   if (curentPopup && unlock) {
      const popupActive = document.querySelector('.popup.open'); 
      if (popupActive) {
         popupClose(popupActive, false);
      } else {
         bodyLock();
      }
      curentPopup.classList.add('open');
      curentPopup.addEventListener("click", function (e) {
         if (!e.target.closest('.popup__content')) {
            popupClose(e.target.closest('.popup'));
         }
      });
   }
}
function popupClose(popupActive, doUnlock = true) {
   if (unlock) {
      popupActive.classList.remove('open');
      if (doUnlock) {
         bodyUnlock();
      }
   }
}


















// const humb = document.querySelector('.humb__field');
// // const popup = document.querySelector('#popup');
// const menu = document.querySelector('.menu__list');


// humb.addEventListener('click',  humbHandler);

// function humbHandler(e) {
//    e.preventDefault();
//    humb.classList.toggle('active');
//    // renderPopup();
// }

// function renderPopup() {
//    popup.appendChild(menu);
// }


// const humb = document.querySelector('#humb');
// const popup = document.querySelector('#popup');
// const menu = document.querySelector('#menu').cloneNode(1);


// humb.addEventListener('click',  humbHandler);

// function humbHandler(e) {
//    e.preventDefault();
//    popup.classList.toggle('open');
//    // renderPopup();
// }

// function renderPopup() {
//    popup.appendChild(menu);
// }