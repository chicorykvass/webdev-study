// Get input element
let filterInput = document.getElementById('filterInput');
// Add event listener
filterInput.addEventListener('keyup', filterNames);

function filterNames() {
  // Get value of input
  let filterValue = filterInput.value.toUpperCase();
  let ul = document.getElementById('names');
  let li = ul.querySelectorAll('li.collection-item');

  // Loop through collection item lis
  for(let item of li) {
    let a = item.getElementsByTagName('a')[0];
    if (a.textContent.toUpperCase().indexOf(filterValue) > -1) {
      item.style.display = '';
    } else {
      item.style.display = 'none';
    }
  }
}