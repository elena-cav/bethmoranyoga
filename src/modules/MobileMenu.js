class MobileMenu {
  constructor() {
    this.menu = document.querySelector(".site-header__menu");
    this.openButton = document.querySelector(".site-header__menu-trigger");
    this.html = document.querySelector("html");
    this.topmenu = document.getElementById("has-sub-menu");
    this.submenu = document.getElementById("sub-menu");
    this.events();
  }

  events() {
    this.openButton.addEventListener("click", () => this.openMenu());
    this.topmenu.addEventListener("click", () => this.showmenu());
  }

  openMenu() {
    this.openButton.classList.toggle("fa-bars");
    this.openButton.classList.toggle("fa-times");
    this.html.classList.toggle("is--open");
    this.menu.classList.toggle("site-header__menu--active");
  }
  showmenu() {
    this.submenu.classList.toggle("show-sub");
  }
}

export default MobileMenu;
