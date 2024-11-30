const search = document.querySelector('#search'),
  matchList = document.querySelector('#match-list');

// Search states.json
async function searchStates(searchText) {
  // searchText = searchText.toUpperCase();
  const res = await fetch('../data/state_capitals.json');
  const states = await res.json();
  // let output = '';

  // Get matches to current text input
  let matches = states.filter(state => {
    const regex = new RegExp(`^${searchText}`, 'gi');
    return (state.name.match(regex) || state.abbr.match(regex)) && searchText !== '';
  });

  outputHtml(matches);

  // states.forEach(state => {
  //   if (searchText !== ''
  //     && (state.abbr.startsWith(searchText)
  //       || state.name.toUpperCase().startsWith(searchText))) {
  //     output += `<ul>
  //       <li>${state.name}</li>
  //     </ul>`;
  //   }
  // });
  // document.querySelector('#match-list').innerHTML = output;
}

// Show results in HTML
function outputHtml(matches) {
  const matchList = document.querySelector('#match-list');
  if (matches.length > 0) {
    const html = matches.map(match => `
      <div class="card card-body mb-1">
        <h4>${match.name} (${match.abbr}) <span class="text-primary">${match.capital}</span></h4>
        <small>Lat: ${match.lat} / Long: ${match.long}</small>
      </div>
    `);
    matchList.innerHTML = html.join('');
  } else {
    matchList.innerHTML = '';
  }
}

search.addEventListener('input', () => searchStates(search.value));
