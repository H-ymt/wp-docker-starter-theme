export function internalScroll() {
  document.addEventListener("DOMContentLoaded", () => {
    const handleInternalLink = (e) => {
      e.preventDefault();
      const targetId = e.currentTarget.getAttribute("href").slice(1);
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        const headerHeight = document.querySelector("header")?.offsetHeight || 0;
        const scrollToPosition = targetElement.offsetTop - headerHeight;
        window.scrollTo({
          top: scrollToPosition,
          behavior: "smooth",
        });
      }
    };

    document
      .querySelectorAll("a[href^='#']")
      .forEach((link) => link.addEventListener("click", handleInternalLink));
  });
}
