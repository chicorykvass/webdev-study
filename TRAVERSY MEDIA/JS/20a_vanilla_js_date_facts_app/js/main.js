let fact = document.querySelector('#fact');
let factText = document.querySelector('#factText');
const monthInput = document.querySelector('#monthInput');
const dayInput = document.querySelector('#dayInput');

monthInput.addEventListener('input', factFetch);
dayInput.addEventListener('input', factFetch);

function factFetch() {
  const month = monthInput.value;
  const day = dayInput.value;

  if (month !== '' && day !== '') {
    fact.style.display = 'block';

    fetch(`http://numbersapi.com/${month}/${day}/date`)
      .then(res => res.text())
      .then(data => {
        factText.innerHTML = data;
      });
  } else {
    fact.style.display = 'none';
  }
}
