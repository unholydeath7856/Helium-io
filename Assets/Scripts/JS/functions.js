var prevSelect = 0;
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

$(".select-container").click(function (event) {
  $(".custom-dropdown").slideToggle(200);
  var listItemClicked = event.target.id;
  if (listItemClicked != "")
  {
    var itemValue = $('#'+listItemClicked).text();
    $('.state option').eq(listItemClicked).attr('selected',true);
    $('.state option').eq(prevSelect).attr('selected',false);
    prevSelect = listItemClicked;
    $(".current").text(itemValue);
  }
});

$(".close").click(function () {
  $(".navbar-container").slideUp(200);
})

function smoothScool (duration) {
    $('a[href^="#"]').on('click', function(event) {

        var target = $( $(this).attr('href') );

        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, duration);
        }
    });
}

$(document).ready(function () {
  smoothScool(1000);
});
