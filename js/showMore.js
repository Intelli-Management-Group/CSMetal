document.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".show-more-button").addEventListener("click", function () {
    var hiddenContents = document.querySelectorAll(".hidden-content");
    hiddenContents.forEach(function (hiddenContent) {
      if (hiddenContent.style.display === "none") {
        hiddenContent.style.display = "flex";
      }
    });
    this.style.display = "none";
  });
});
