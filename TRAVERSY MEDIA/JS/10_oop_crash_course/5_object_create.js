// Object Of Protos
const bookProtos = {
  getSummary: function () {
    return `${this.title} was written by ${this.author} in ${this.year}`;
  },
  getAge: function () {
    const years = new Date().getFullYear() - this.year;
    return `${this.title} is ${years} years old`;
  },
  revise: function (newYear) {
    this.year = newYear;
    this.revised = true;
  }
};

// function Book(title, author, year) {
//   this.title = title;
//   this.author = author;
//   this.year = year;
// }

// Book.prototype = Object.create(bookProtos);

// const book1 = new Book('Book One', 'John Doe', '2013');
// const book2 = new Book('Book Two', 'Jane Doe', '2016');

const book1 = Object.create(bookProtos, {
  title: { value: 'Book One' },
  author: { value: 'John Doe' },
  year: { value: '2013' }
});

console.log(book1.getSummary());
