$(document).ready(function () {
  $(".caja-btn").on("click", function (e) {
    e.preventDefault();
    var url = $(this).attr("href");
    if (url !== "#") {
      window.location.href = url;
    }
  });
});