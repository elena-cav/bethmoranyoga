class MobileMenu {
  constructor() {
    this.menu = document.querySelector(".site-header__menu");
    this.openButton = document.querySelector(".site-header__menu-trigger");
    this.html = document.querySelector("html");
    this.events();
  }

  events() {
    this.openButton.addEventListener("click", () => this.openMenu());
  }

  openMenu() {
    this.openButton.classList.toggle("fa-bars");
    this.openButton.classList.toggle("fa-times");
    this.html.classList.toggle("is--open");
    this.menu.classList.toggle("site-header__menu--active");
  }
}

export default MobileMenu;
