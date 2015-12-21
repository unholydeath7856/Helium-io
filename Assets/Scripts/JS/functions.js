$(".nav-button").click(function () {
  $(".nav-button").slideUp(300, function () {
    $(".navbar-pop").slideDown(200);
    $(".navbar-container").slideDown(200);
  });
});

$(".navbar-pop").click(function (e) {
  if (e.target.id != 'target-nav') {
    $(".navbar-container").slideUp(200);
    $(".navbar-pop").slideUp(200, function () {
      $(".nav-button").slideDown(300);
    });
  }
});

$(".nav-item").click(function() {
  $(this).siblings('li').removeClass('active');
  $(this).addClass('active');
});
