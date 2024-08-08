export function globalMenu() {
  const menu = document.querySelector(".js-globalMenu");
  const button = document.querySelector(".js-globalMenuButton");

  button.addEventListener("click", () => {
    button.classList.toggle("is-active");
    menu.classList.toggle("is-active");
  });
}
