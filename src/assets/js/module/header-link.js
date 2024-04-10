export const headerLink = () => {
  const headerLinks = document.querySelectorAll(".js-header-link");
  const currentPagePath = window.location.pathname;
  const subpath = window.location.pathname.split("/")[1];

  headerLinks.forEach((headerLink) => {
    const linkPath = new URL(headerLink.href).pathname;
    if (
      linkPath === currentPagePath ||
      linkPath === `/${subpath}` ||
      linkPath.startsWith(`/${subpath}/`)
    ) {
      headerLink.classList.add("is-current");
      headerLink.setAttribute("aria-current", "page");
    } else {
      headerLink.classList.remove("is-current");
      headerLink.removeAttribute("aria-current");
    }
  });
};
