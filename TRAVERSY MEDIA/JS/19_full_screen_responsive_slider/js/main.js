const firstSlide = document.querySelector('.slide');
const lastSlide = document.querySelector('.slide:last-child');
const next = document.querySelector('button#next');
const prev = document.querySelector('button#prev');
const auto = true;
const intervaltime = 5000;
let intervalHandle;

const autocheck = () => {
  if (auto) {
    clearInterval(intervalHandle);
    intervalHandle = setInterval(nextSlide, intervaltime);
  }
};

const nextSlide = () => {
  autocheck();
  const current = document.querySelector('.slide.current');
  current.classList.remove('current');
  // Check for next sibling
  if (current.nextElementSibling !== null) {
    current.nextElementSibling.classList.add('current');
  } else {
    firstSlide.classList.add('current');
  }
};

const prevSlide = () => {
  autocheck();
  const current = document.querySelector('.slide.current');
  current.classList.remove('current');
  // Check for next sibling
  if (current.previousElementSibling !== null) {
    current.previousElementSibling.classList.add('current');
  } else {
    lastSlide.classList.add('current');
  }
};

prev.addEventListener('click', prevSlide);
next.addEventListener('click', nextSlide);

autocheck();
