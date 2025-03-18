function animateIcon(selector, time, ...classes) {
  const element = document.querySelector(`${selector}`);
  element.classList.remove(`${classes[classes.length - 1]}`);
  element.classList.add(`${classes[0]}`);
  classes.push(classes.shift());
  setTimeout(() => { animateIcon(selector, time, ...classes); }, time);
}

animateIcon('#chain', 1000, 'fa-chain', 'fa-chain-broken');

animateIcon('#battery', 1000, 'fa-battery-0', 'fa-battery-1', 'fa-battery-2', 'fa-battery-3', 'fa-battery-4');

animateIcon('#hourglass', 1000, 'fa-hourglass-start', 'fa-hourglass-half', 'fa-hourglass-end');
