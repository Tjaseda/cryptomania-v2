class DropLang {
  constructor() {
    this.showButton = document.getElementsByClassName('dropdown')[0];
    this.content = document.getElementsByClassName('dropdown-content')[0];
    this.events();
  }

  events() {
    this.showButton.addEventListener('click', this.toggleDropdown.bind(this));
  }

  toggleDropdown() {
    this.content.classList.toggle('dropdown-content--is-visible');
  }
}

export default DropLang;
