import { slider } from "./module/slider";
import { tab } from "./module/tab";
import { hamburgerMenu } from "./module/hamburger-menu";
import { headerLink } from "./module/header-link";
import { accordion } from "./module/accordion";
import { viewportFix, viewportSize } from "./utility/viewport";

// modules
hamburgerMenu();
headerLink();
slider();
tab();
accordion();

window.addEventListener("resize", () => {
  viewportSize();
  viewportFix();
});
