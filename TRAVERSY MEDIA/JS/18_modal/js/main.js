// Get modal element
let modal = document.querySelector('#simpleModal');
// Get modal button
let modalBtn = document.querySelector('#modalBtn');
// Get close button
let closeBtn = document.querySelector('.closeBtn');

// Listen for open click
modalBtn.addEventListener('click', openModal);

// Listen for close click
closeBtn.addEventListener('click', closeModal);

// Listen for outside click
window.addEventListener('click', e => outsideClick(e));

// Function to open modal
function openModal() {
  modal.style.display = 'block';
}

// Function to close modal
function closeModal() {
  modal.style.display = 'none';
}

// Function to close modal in case of outside click
function outsideClick(e) {
  if (e.target === modal) { closeModal(); }
}
