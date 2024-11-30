// Listen for form submit
document.getElementById('myForm').addEventListener('submit', saveBookmark);

function saveBookmark(e) {
  e.preventDefault();

  // Get form values
  let siteName = document.getElementById('siteName').value;
  let siteUrl = document.getElementById('siteUrl').value;

  document.getElementById('myForm').reset();

  if (!siteName || !siteUrl) {
    alert('Please fill in the form');
    return;
  }

  let valid = new RegExp(/^(http|https):\/\/[^ "]+$/);
  if (!valid.test(siteUrl)) {
    alert('Please enter valid URL');
    return;
  }

  let bookmark = { name: siteName, url: siteUrl };

  siteName.value = "";
  siteUrl.value = "";

  // Local Storage test
  // localStorage.setItem('test', 'Hello World');
  // console.log(localStorage.getItem('test'));
  // localStorage.removeItem('test');
  // console.log(localStorage.getItem('test'));

  let bookmarks = [];

  if (localStorage.getItem('bookmarks') !== null) {
    bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
  }

  bookmarks.push(bookmark);

  localStorage.setItem('bookmarks', JSON.stringify(bookmarks));

  fetchBookmarks();
}

function deleteBookmark(url) {
  let bookmarks = JSON.parse(localStorage.getItem('bookmarks'));

  bookmarks = bookmarks.filter(bookmark => bookmark.url !== url);

  localStorage.setItem('bookmarks', JSON.stringify(bookmarks));

  fetchBookmarks();
}

function fetchBookmarks() {
  let bookmarks = JSON.parse(localStorage.getItem('bookmarks'));

  if (bookmarks !== null) {
    let bookmarksResults = document.getElementById('bookmarksResults');

    bookmarksResults.innerHTML = bookmarks.map(bookmark => `<div class="well">
      <h3>${bookmark.name}</h3>
      <a class="btn btn-default" target="_blank" href="${bookmark.url}">Visit</a>
      <a onclick="deleteBookmark('${bookmark.url}')" class="btn btn-danger" href="#">Delete</a>
    </div>`).join('');
  }
}
