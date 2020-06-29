$(document).ready(function () {
  $("#registro").click(function (e) {
    e.preventDefault();
    $("#collapseExample").removeClass("show");
    $(".modal-header").css({
      background: "red",
      color: "white",
    });
    $(".modal-title").text("Regístrate");
  });

  $("#iniciar").click(function (e) {
    e.preventDefault();
    $(".modal-title").text("Iniciar Sesión");
    $(".modal-header").css({
      background: "blue",
      color: "white",
    });
  });

  $("#login").click(function (e) {
    e.preventDefault();
    $("#collapseExample2").removeClass("show");
    $(".modal-header").css({
      background: "blue",
      color: "white",
    });
  });
});
