$(document).ready(() => {
  // $('p.para1').css({ "color": "purple", "font-weight": "bold" });
  // $('p.para2').addClass('myClass');
  // $('p.para2').removeClass('myClass');
  // $('#btn1').click(() => $('p.para2').toggleClass('myClass'));
  // $('#myDiv').text('Hello World');
  // $('#myDiv').html('<h3>Hello World</h3>');
  // alert($('#myDiv').text());
  // $('ul').prepend('<li>Prepended List Item</li>');
  // $('ul').append('<li>Appended List Item</li>');
  // $('.para1').appendTo('ul');
  // $('.para2').prependTo('.para1');
  // $('ul').before('<h4>Hello</h4>');
  // $('ul').after('<h4>Goodbye</h4>');
  // $('ul').empty();
  // $('ul').detach();
  // $('a').attr('target', '_blank');
  // $('a').removeAttr('target');
  // alert($('a').attr('href'));
  // $('p').wrap('<i>');
  // $('p').wrapAll('<i>');
  // $('#newItem').keyup(e => {
  //   if (e.which == 13) {
  //     e.preventDefault();
  //     $('ul').append(`<li>${e.target.value}</li>`);
  //   }
  // });
  const myArr = ['apple', 'orange', 'banana', 'apricot'];
  $.each(myArr, (i, val) => $('ul').append(`<li>${i + 1}: ${val}</li>`));
  const newArr = $('ul li').toArray();
  // $.each(newArr, (i, val) => console.log($(val).text()));
  console.log(newArr);
});
