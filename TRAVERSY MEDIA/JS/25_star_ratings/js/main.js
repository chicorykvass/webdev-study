// Initial Ratings
const ratings = {
  sony: 4.7,
  samsung: 3.4,
  vizio: 2.3,
  panasonic: 3.6,
  philips: 4.1
};

const totalStars = 5;

const productSelect = document.querySelector('#product-select');
const ratingControl = document.querySelector('#rating-control');
let product, initial = true;

// Run on DOM load
document.addEventListener('DOMContentLoaded', () => {
  getRatings();
  addOptions();

  productSelect.addEventListener('change', e => {
    // Enable rating control
    ratingControl.disabled = false;

    product = e.target.value;
    setInputValue();
  });

  ratingControl.addEventListener('blur', e => {
    const newRating = e.target.value;
    if (newRating < 0 || newRating > 5) {
      alert("Please enter number between 1 and 5.");
      setInputValue();
      return;
    }
    setRating(product, newRating);
  });
});

// Get Ratings
function getRatings() {
  for (let rating in ratings) {
    setRating(rating, ratings[rating]);
  }
  initial = false;
}

function addOptions() {
  for (let rating in ratings) {
    productSelect.innerHTML += `<option value = "${rating}">${document.querySelector(`.${rating}>td`).textContent}</option>`;
  }
}

function setRating(product, rating) {
  if (!initial) { ratings[product] = rating; }
  const starPercentage = rating / totalStars * 100;
  const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;
  document.querySelector(`.${product} .stars-inner`).style.width = starPercentageRounded;
  document.querySelector(`.${product} .number-rating`).textContent = rating;
}

function setInputValue() {
  ratingControl.value = document.querySelector(`.${product} .number-rating`).textContent;
}
