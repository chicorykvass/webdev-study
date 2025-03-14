const slides = document.querySelectorAll('.slide');
let current = 0;

function chSlide(x = 0) {
  for (let i = 0; i < slides.length; ++i) {
    if (i === current) {
      slides[i].style.display = "block";
      switch (x) {
        case 1:
          slides[i].style.animation = "animateleft 0.5s";
          break;
        case -1:
          slides[i].style.animation = "animateright 0.5s";
          break;
        default:
          slides[i].style.animation = "none";
      }
    } else {
      slides[i].style.display = "none";
    }
  }
}

function leftArrow() {
  current = current ? current - 1 : slides.length - 1;
  chSlide(1);
}

function rightArrow() {
  current = current === slides.length - 1 ? 0 : current + 1;
  chSlide(-1);
}

chSlide();
document.querySelector('#arrow-left').addEventListener('click', leftArrow);
document.querySelector('#arrow-right').addEventListener('click', rightArrow);
