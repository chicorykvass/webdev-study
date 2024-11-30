$(document).ready(() => {
  // $('#result').load('test.html', (responseTxt, statusTxt, xhr) => {
  //   if (statusTxt == "success") {
  //     alert('It went fine');
  //   } else if (statusTxt == "error") {
  //     alert(`Error: ${xhr.statusText}`);
  //   }
  // });
  // $.get('test.html', data => $('#result').html(data));
  // $.getJSON('users.json', users => {
  // $('#result').html(users.map(user => `
  //     <div class="card">
  //       <h4 class="username">${user.firstName} ${user.lastName}</h4>
  //       <h5 class="email">${user.email}</h5>
  //     </div>
  //   `).join(''));
  // });
  // $.ajax({
  //   method: 'GET',
  //   url: 'https://jsonplaceholder.typicode.com/posts',
  //   dataType: 'json'
  // }).done(data => {
  //   $('#result').html(data.map(post => `
  //     <div class="post">
  //       <h4 class="postTitle">${post.title}</h4>
  //       <p class="postBody">${post.body}</p>
  //     </div>
  //   `).join(''));
  // });
  $('#postForm').submit(function (e) {
    e.preventDefault();

    const title = $('#title').val();
    const body = $('#body').val();
    const url = $(this).attr('action');

    $.post(url, { 'title': title, 'body': body }).done(data => console.log(data));
  });
});
