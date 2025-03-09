document.querySelector('#zipForm').addEventListener('submit', getLocationInfo);

function getLocationInfo(e) {
  e.preventDefault();
  const zip = e.target[0].value;
  const output = document.querySelector('#output');
  output.innerHTML = '';

  fetch(`http://api.zippopotam.us/RU/${zip}`)
    .then(response => {
      if (!response.ok) {
        showIcon('remove');
        output.innerHTML = `
        <article class="message is-danger">
          <div class="message-body">Неправильный индекс. Пожалуйста, попробуйте снова.</div>
        </article>
        `;
        throw Error(response.statusText);
      }
      showIcon('check');
      return response.json();
    })
    .then(data => {
      let out = '';
      for (place of data.places) {
        out += `
        <article class="message is-primary">
          <div class="message-header">
            <p>Информация</p>
            <button class="delete"></button>
          </div>
          <div class="message-body">
            <ul>
              <li><strong>Город: </strong>${place['place name']}</li>
              <li><strong>Область: </strong>${place['state']}</li>
              <li><strong>Широта: </strong>${place['latitude']}</li>
              <li><strong>Долгота: </strong>${place['longitude']}</li>
            </ul>
          </div>
        </article>
        `;
      }
      output.innerHTML = out;
      document.querySelector('button.delete').addEventListener('click', messageClose);
    });
};

function hideIcon() {
  document.querySelector('.icon-check').style.display = "none";
  document.querySelector('.icon-remove').style.display = "none";
}

function showIcon(icon) {
  hideIcon();
  document.querySelector(`.icon-${icon}`).style.display = "inline-flex";
}

function messageClose() {
  document.querySelector('article.message.is-primary').remove();
  document.querySelector('input.zip').value = '';
  hideIcon();
}
