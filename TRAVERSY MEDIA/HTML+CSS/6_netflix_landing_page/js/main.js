const tabItems = document.querySelectorAll('.tab-item');
const tabContentItems = document.querySelectorAll('.tab-content-item');

function removeBorder() {
  tabItems.forEach(item => item.classList.remove('tab-border'));
}

function hideContent() {
  tabContentItems.forEach(item => item.classList.remove('show'));
}

// Select tab content item
function selectItem(e) {
  removeBorder();
  hideContent();
  this.classList.add('tab-border');
  document.getElementById(`${this.id}-content`).classList.add('show');
}

// Listen for tab click
tabItems.forEach(item => item.addEventListener('click', selectItem));