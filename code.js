$("#click").click(function () {
  $(this).fadeIn(200);
});

$(window).keyDown(function (e) {
  console.log(e.keyCode);
});
