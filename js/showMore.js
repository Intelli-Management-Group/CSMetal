document.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".show-more-button").addEventListener("click", function () {
    var hiddenContent = document.querySelector(".hidden-content");
    if (hiddenContent.style.display === "none") {
      hiddenContent.style.display = "flex";
      this.style.display = "none";
    }
  });
});
