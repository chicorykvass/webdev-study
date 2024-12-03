let fact = document.querySelector('#fact');
let factText = document.querySelector('#factText');
const numInput = document.querySelector('#numberInput');

numInput.addEventListener('input', factFetch);

function factFetch() {
  const number = numInput.value;

  if (number !== '') {
    fact.style.display = 'block';

    // let xhr = new XMLHttpRequest();
    // xhr.open('GET', `http://numbersapi.com/${number}`, true);

    // xhr.onload = function () {
    //   if (this.status == 200) {
    //     factText.innerHTML = this.responseText;
    //   }
    // };

    // xhr.send();

    fetch(`http://numbersapi.com/${number}`)
      .then(res => res.text())
      .then(data => {
        factText.innerHTML = data;
      });
  } else {
    fact.style.display = 'none';
  }
}
