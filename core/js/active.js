$(document).ready(function () {
  // Función para activar enlaces en el sidebar
  $(".caja-btn").on("click", function (e) {
    e.preventDefault();
    $(".caja-btn").removeClass("active");
    $(this).addClass("active");
  });
});
