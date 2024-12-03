document.querySelector('#input-px').addEventListener('input', convertRem);

function convertRem() {
  const px = document.querySelector('#input-px').value;
  let output = document.querySelector('#output');

  // if (isNumeric(px)) {
  output.innerHTML = `<h2>${parseFloat(px) / 16}rem</h2>`;
  // } else if (px === "") {
  //   output.innerHTML = '';
  // } else {
  //   output.innerHTML = '<h2>Enter valid number!</h2>';
  // }
}

// function isNumeric(str) {
//   if (typeof str != "string") return false;
//   const regex = new RegExp(/^([0-9]*[.])?[0-9]+(?:px)?$/);
//   return regex.test(str);
// }
