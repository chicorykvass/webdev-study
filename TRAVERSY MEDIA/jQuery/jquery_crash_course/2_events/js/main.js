$(document).ready(() => {
  // $('#btn1').click(() => alert('Button Clicked'));
  // $('#btn1').on('click', () => alert('Button Clicked.'));
  // $('#btn1').on('click', () => $('.para1').toggle());
  // $('#btn1').dblclick(() => $('.para1').toggle());
  // $('#btn1').hover(() => $('.para1').toggle());
  // $('#btn1').on('mouseenter', () => $('.para1').toggle());
  // $('#btn1').on('mouseleave', () => $('.para1').toggle());
  // $('#btn1').on('mousemove', () => $('.para1').toggle());
  // $('#btn1').on('mouseup', () => $('.para1').toggle());
  // $('#btn1').on('mousedown', () => $('.para1').toggle());
  // $('#btn1').click(e => console.log(e.currentTarget.outerHTML));
  // $(document).on('mousemove', e => $('#coords').html(`Coords: ${e.screenX}x${e.screenY}`));
  // $('input').focus(e => $(e.currentTarget).css('background', 'pink'));
  // $('input').blur(e => $(e.currentTarget).css('background', '#fff'));
  // $('input').keyup(e => console.log(e.key));
  // $('select#gender').change(() => alert('Changed'));
  $('#form').submit(e => {
    e.preventDefault();
    console.log($('#name').val());
  });
});
