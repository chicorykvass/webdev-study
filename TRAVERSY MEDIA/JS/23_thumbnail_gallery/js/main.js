const curImg = document.querySelector("#current");
const imgs = document.querySelectorAll(".imgs img");
const opacity = 0.6;

imgs.forEach(img => {
  img.addEventListener('click', showAsCurrent);
});

function showAsCurrent(e) {
  curImg.src = e.target.src;
  curImg.classList.remove("fade-in");
  void (curImg.offsetWidth);
  curImg.classList.add("fade-in");
  for (let img of imgs) {
    img.style.opacity = 1;
  };
  e.target.style.opacity = opacity;
}
