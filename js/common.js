// load header and footer section
document.addEventListener("DOMContentLoaded", () => {
  fetch("header.html")
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("header").innerHTML = data;
    });
  fetch("footer.html")
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("footer").innerHTML = data;
    });
});

// Go to top button - starts
const scrollToTop = () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
};
const scrollToBottom = () => {
  window.scrollTo({ top: document.body.scrollHeight, behavior: "smooth" });
};

document
  .getElementById("btnScrollToTop")
  .addEventListener("click", scrollToTop);
