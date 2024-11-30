// EXAMINE THE DOCUMENT OBJECT //

// console.dir(document);
// console.log(document.domain);
// console.log(document.URL);
// console.log(document.title);
// document.title = 123;
// console.log(document.doctype);
// console.log(document.head);
// console.log(document.body);
// console.log(document.all);
// console.log(document.all[10]);
// console.log(document.forms);
// console.log(document.links);
// console.log(document.images);

// GET ELEMENT BY ID //
// console.log(document.getElementById("header-title"));
// let headerTitle = document.getElementById("header-title");
// let header = document.getElementById("main-header");
// headerTitle.textContent = "Hello";
// headerTitle.innerText = "Goodbye";
// console.log(headerTitle.textContent);
// console.log(headerTitle.innerText);
// headerTitle.innerHTML = "<h3>Hello</h3>";
// header.style.borderBottom = "3px solid #000";

// GET ELEMENTS BY CLASS NAME //
// let items = document.getElementsByClassName('list-group-item');
// console.log(items);
// console.log(items[1]);
// items[1].textContent = 'Hello 2';
// items[1].style.fontWeight = 'bold';
// items[1].style.background = '#ccc';
// for(let element of items) {
//     element.style.background = '#f4f4f4';
// };

// GET ELEMENTS BY TAG NAME //
// let li = document.getElementsByTagName('li');
// console.log(li);
// for (let element of li) {
//     element.style.background = '#f4f4f4';
// };

// QUERY SELECTOR //
// let header = document.querySelector('#main-header');
// header.style.borderBottom = '4px solid #ccc';
// let input = document.querySelector('input');
// input.value = 'New';
// let submit = document.querySelector('input[type = "submit"]');
// submit.value = 'SEND';
// let item = document.querySelector('.list-group-item');
// item.style.color = 'red';
// let lastItem = document.querySelector('.list-group-item:last-child');
// lastItem.style.color = 'green';
// let secondItem = document.querySelector('.list-group-item:nth-child(2)');
// secondItem.style.color = 'blue';

// QUERY SELECTOR ALL //
// let titles = document.querySelectorAll('.title');
// console.log(titles);
// titles[0].textContent = 'Hello';

// let odd = document.querySelectorAll('.list-group-item:nth-child(odd)');
// let even = document.querySelectorAll('.list-group-item:nth-child(even)');
// console.log(odd);
// odd.forEach((it) => {
//     it.style.background = '#f4f4f4';
// });
// even.forEach((it) => {
//     it.style.background = '#ccc';
// });

// TRAVERSING THE DOM //
// let itemList = document.querySelector('#items');

// parentnode
// console.log(itemList.parentNode);
// itemList.parentNode.style.background = '#f4f4f4';

// parentElement
// console.log(itemList.parentElement);
// itemList.parentElement.style.background = '#f4f4f4';

// childnodes
// console.log(itemList.childNodes);

// children
// console.log(itemList.children);
// console.log(itemList.children[1]);
// itemList.children[1].textContent = 'Hello 2';

// firstChild
// console.log(itemList.firstChild);

// firstElementChild
// console.log(itemList.firstElementChild);
// itemList.firstElementChild.textContent = 'Hello 1';

// lastChild
// console.log(itemList.lastChild);

// lastElementChild
// console.log(itemList.lastElementChild);
// itemList.lastElementChild.textContent = 'Hello 4';

// nextSibling
// console.log(itemList.firstElementChild.nextSibling);

// nextElementSibling
// console.log(itemList.firstElementChild.nextElementSibling);

// previousElementSibling
// console.log(itemList.lastElementChild.previousElementSibling);

// createElement
// let newDiv = document.createElement('div');
// newDiv.className = 'hello';
// newDiv.id = 'hello1';
// newDiv.setAttribute('title', 'Hello Div');
// let newDivText = document.createTextNode('Hello World');
// newDiv.appendChild(newDivText);
// let container = document.querySelector('header .container');
// let h1 = document.querySelector('header h1');
// console.log(newDiv);
// container.insertBefore(newDiv, h1);
// let container = document.querySelector('body > .container');
// let main = document.querySelector('#main');
// container.insertBefore(newDiv, main);
// newDiv.style.fontSize = '30px';

// EVENTS //

// document.getElementById('button').addEventListener('click', buttonClick);

// function buttonClick(e) {
    // document.getElementById('header-title').textContent = 'Changed';
    // document.querySelector('#main').style.backgroundColor = '#f4f4f4';
    // console.log(e);
    // console.log(e.target);
    // console.log(e.target.id);
    // console.log(e.target.className);
    // console.log(e.target.classList);
    // document.getElementById('output').innerHTML = `<h3>${e.target.id}</h3>`;
    // console.log(e.type);
    // console.log(e.clientX);
    // console.log(e.clientY);
    // console.log(e.offsetX);
    // console.log(e.offsetY);
    // console.log(e.altKey);
    // console.log(e.ctrlKey);
    // console.log(e.shiftKey);
// }

// let button = document.getElementById('button');
// let box = document.getElementById('box');
// let output = document.getElementById('output');
// button.addEventListener('click', runEvent);
// button.addEventListener('dblclick', runEvent);
// button.addEventListener('mousedown', runEvent);
// button.addEventListener('mouseup', runEvent);

// box.addEventListener('mouseenter', runEvent);
// box.addEventListener('mouseleave', runEvent);
// box.addEventListener('mouseover', runEvent);
// box.addEventListener('mouseout', runEvent);
// box.addEventListener('mousemove', runEvent);

// let itemInput = document.querySelector('input[type = "text"]');
// let form = document.querySelector('.form-inline');
// let select = document.querySelector('select');

// itemInput.addEventListener('keydown', runEvent);
// itemInput.addEventListener('keyup', runEvent);
// itemInput.addEventListener('keypress', runEvent);

// itemInput.addEventListener('focus', runEvent);
// itemInput.addEventListener('blur', runEvent);

// itemInput.addEventListener('cut', runEvent);
// itemInput.addEventListener('paste', runEvent);

// itemInput.addEventListener('input', runEvent);

// select.addEventListener('change', runEvent);
// select.addEventListener('input', runEvent);

// form.addEventListener('submit', runEvent);

// function runEvent(e) {
//     e.preventDefault();
//     console.log(`EVENT TYPE: ${e.type}`);

    // console.log(e.target.value);

    // output.innerHTML = `<h3>${e.target.value}</h3>`;

    // output.innerHTML = `<h3>MouseX: ${e.offsetX}</h3><h3><h3>MouseY: ${e.offsetY}</h3>`;

    // document.body.style.backgroundColor = `rgb(${e.offsetX}, ${e.offsetY}, 40)`;
// }

let form = document.querySelector('#addForm');
let itemList = document.querySelector('#items');
let filter = document.querySelector('#filter');

// Form submit event
form.addEventListener('submit', addItem);

// Delete event
itemList.addEventListener('click', removeItem);

// Filter Event
filter.addEventListener('keyup', filterItems);

// Add item
function addItem(e) {
    e.preventDefault();

    // Get input value
    let newItem = document.getElementById('item');

    // Create new li element
    let li = document.createElement('li');
    // Add class
    li.className = 'list-group-item';
    // Add text node with input value
    li.appendChild(document.createTextNode(newItem.value));

    // Create delete button ellement
    let delete_b = document.createElement('button');
    delete_b.className = 'btn btn-danger btn-sm float-right delete';
    delete_b.appendChild(document.createTextNode('X'));
    li.appendChild(delete_b);

    itemList.appendChild(li);
}

// Remove Item
function removeItem(e) {
    if (e.target.classList.contains('delete')) {
        if (confirm('Are You Sure?')) {
            e.target.parentElement.remove();
        }
    }
}

// Filter Items
function filterItems(e) {
    // convert text to lowercase
    let text = e.target.value.toLowerCase();
    // Get lis
    let items = itemList.getElementsByTagName('li');
    for (let item of items) {
        if (item.firstChild.textContent.toLowerCase().indexOf(text) != -1) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    }
}