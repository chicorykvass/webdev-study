// Book Class: Represents a Book
class Book {
    constructor(title, author, isbn) {
        this.title = title;
        this.author = author;
        this.isbn = isbn;
    }
}

// UI Class: Handle UI Tasks
class UI {
    static displayBooks() {
        const books = Store.getBooks();
        document.querySelector('#book-list').innerHTML = '';
        for (let book of books) { UI.addBookToList(book); };
    }
    static addBookToList(book) {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${book.title}</td>
            <td>${book.author}</td>
            <td>${book.isbn}</td>
            <td><a href = "#" class = "btn btn-danger btn-sm delete">X</a></td>
        `;
        document.querySelector('#book-list').appendChild(row);
    }
    static formAddBook() {
        const title = document.querySelector('#title');
        const author = document.querySelector('#author');
        const isbn = document.querySelector('#isbn');

        // Validate
        if (title.value === '' || author.value === '' || isbn.value === '') {
            // alert('Please fill in all fields');
            this.showAlert('Please fill in all fields', 'danger', 'wrng-error');
            return;
        }

        Store.addBook(new Book(title.value, author.value, isbn.value));
        this.displayBooks();

        // Clear fields
        title.value = '';
        author.value = '';
        isbn.value = '';
    }
    static deleteBook(isbn) {
        Store.removeBook(isbn);
        this.displayBooks();
        this.showAlert('Book removed successfully', 'success', 'wrng-remove');
    }
    static showAlert(message, className, type) {
        if (document.querySelector(`.${type}`) === null) {
            const div = document.createElement('div');
            div.className = `alert alert-${className} ${type}`;
            div.appendChild(document.createTextNode(message));
            document.querySelector('.container').insertBefore(div, document.querySelector('#book-form'));
            setTimeout(() => document.querySelector(`.${type}`).remove(), 3000);
        }
    }
}

// Store Class: Handles Storage
class Store {
    static getBooks() {
        let books;
        if (localStorage.getItem('books') === null) {
            books = [];
        } else {
            books = JSON.parse(localStorage.getItem('books'));
        }
        return books;
    }
    static addBook(book) {
        const books = this.getBooks();
        if(books.findIndex((_book) => { return _book.isbn === book.isbn; }) === -1) {
            books.push(book);
            this.writeChanges(books);

            // Show Success message
            UI.showAlert('Book added successfully', 'success', 'wrng-success');
        } else {
            UI.showAlert('Book already added', 'danger', 'wrng-existing');
        }
    }
    static removeBook(_isbn) {
        const books = this.getBooks();
        books.splice(books.findIndex((book) => { return book.isbn === _isbn; }), 1);
        this.writeChanges(books);
    }
    static writeChanges(books) {
        localStorage.setItem('books', JSON.stringify(books));
    }
}

// Event: Display Books
document.addEventListener('DOMContentLoaded', () => {
    UI.displayBooks();
    // UI.displayBooks();

    // Event: Add a book
    document.querySelector('#book-form').addEventListener('submit', (e) => {
        // Get form values
        e.preventDefault();
        UI.formAddBook();
    });

    // Event: Remove a book
    document.querySelector('#book-list').addEventListener('click', (e) => {
        if (e.target.classList.contains('delete')) {
            UI.deleteBook(e.target.parentElement.previousElementSibling.textContent);
        }
    });
});