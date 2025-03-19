const countdown = document.querySelector('.countdown');

// Set Launch Date
const launchDate = new Date('Jan 1, 2026 13:00:00').getTime();

// Update Every Second
let now, distance, days, hours, minutes, seconds;
const intvl = setInterval(() => {
  // Get todays date and time
  now = new Date().getTime();
  distance = launchDate - now;
  days = Math.floor(distance / (1000 * 60 * 60 * 24));
  hours = Math.floor(distance / (1000 * 60 * 60)) % 24;
  minutes = Math.floor(distance / (1000 * 60)) % 60;
  seconds = Math.floor(distance / 1000) % 60;

  countdown.innerHTML = `
  <div>${days}<span>Days</span></div>
  <div>${hours}<span>Hours</span></div>
  <div>${minutes}<span>Minutes</span></div>
  <div>${seconds}<span>Seconds</span></div>
  `;

  // If launch date passed
  if (distance <= 0) {
    clearInterval(intvl);
    countdown.style.color = '#17a2b8';
    countdown.innerHTML = "It is launched!";
  }
}, 1000);
