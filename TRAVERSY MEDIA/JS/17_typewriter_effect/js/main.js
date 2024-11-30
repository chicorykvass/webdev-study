class TypeWriter {
  constructor(txtElement, words, wait = 3000) {
    this.txtElement = txtElement;
    this.words = words;
    this.txt = '';
    this.wordIndex = 0;
    this.wait = parseInt(wait, 10);
    this.type();
    this.isDeleting = false;
  }

  // Type Method
  type() {
    // Current index of word
    const curIdx = this.wordIndex % this.words.length;
    const curWord = this.words[curIdx];
    const cursor = document.querySelector('.cursor');
    cursor.classList.remove('blink');

    // Check if deleting
    if (this.isDeleting) {
      // Remove char
      this.txt = curWord.substring(0, this.txt.length - 1);
    } else {
      // Add char
      this.txt = curWord.substring(0, this.txt.length + 1);
    }

    this.txtElement.innerHTML = this.txt;

    // Initial Type Speed
    let typeSpeed = 300;
    if (this.isDeleting) {
      typeSpeed /= 2;
    }

    if (this.txt === curWord) {
      this.isDeleting = true;
      typeSpeed = this.wait;
      cursor.classList.add('blink');
    }
    if (this.txt.length === 0) {
      this.isDeleting = false;
      ++(this.wordIndex);
      typeSpeed = 500;
      cursor.classList.add('blink');
    }

    setTimeout(() => this.type(), typeSpeed);
  }
}

// Init On DOM Load
document.addEventListener('DOMContentLoaded', init);

// Init App
function init() {
  const txtElement = document.querySelector('.txt-type');
  const words = JSON.parse(txtElement.getAttribute('data-words'));
  const wait = txtElement.getAttribute('data-wait');
  // Init TypeWriter
  new TypeWriter(txtElement, words, wait);
}
