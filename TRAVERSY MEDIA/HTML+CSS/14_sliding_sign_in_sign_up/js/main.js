const signUpButton = document.querySelector('#signUp'),
  signInButton = document.querySelector('#signIn'),
  container = document.querySelector('#container');

signUpButton.addEventListener('click', () => container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () => container.classList.remove('right-panel-active'));
