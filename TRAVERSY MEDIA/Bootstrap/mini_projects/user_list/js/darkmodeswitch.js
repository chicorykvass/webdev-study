const storageTheme = localStorage.getItem('bs_theme');
const buttons = document.querySelectorAll("button[data-bs-theme-value]");

const setTheme = mode => {
  document.querySelector("html").setAttribute('data-bs-theme', mode);
  localStorage.setItem('bs_theme', mode);
};

setTheme(storageTheme !== null ? storageTheme : 'light');

for (let button of buttons) {
  button.addEventListener('click', () => {
    setTheme(button.getAttribute('data-bs-theme-value'));
  });
};
