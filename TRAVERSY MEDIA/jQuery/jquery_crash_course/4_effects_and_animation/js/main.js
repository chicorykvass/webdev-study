$(document).ready(() => {
  // $('#btnFadeOut').click(() => $('#box').fadeOut('fast'));
  // $('#btnFadeIn').click(() => $('#box').fadeIn('slow'));
  // $('#btnFadeToggle').click(() => $('#box').fadeToggle(3000, () => $('#btnFadeToggle').text('Click Me!')));
  // $('#btnSlideDown').click(() => $('#box').slideDown(3000));
  // $('#btnSlideUp').click(() => $('#box').slideUp(3000));
  // $('#btnSlideToggle').click(() => $('#box').slideToggle(3000));
  // $('#btnStop').click(() => $('#box').stop());
  $('#moveRight').click(() => $('#box2').animate({
    left: 500,
    height: '300px',
    width: '300px',
    opacity: '0.5'
  }));
  $('#moveLeft').click(() => $('#box2').animate({
    left: 0,
    height: '100px',
    width: '100px',
    opacity: '1'
  }));
  $('#moveAround').click(() => {
    let box = $('#box2');
    box.animate({ left: 300 });
    box.animate({ top: 300 });
    box.animate({
      left: 0,
      top: 300
    });
    box.animate({
      left: 0,
      top: 0
    });
  });
});
