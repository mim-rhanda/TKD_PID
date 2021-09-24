// ---------- cv
$(window).scroll(function () {
  if($(window).scrollTop() > 100) {
    $('#cv').addClass('fixed');
    $('#cv').fadeIn('fast');
  } else {
    $('#cv').removeClass('fixed');
  }
});

// ---------- sp_cv
$(window).scroll(function () {
  if($(window).scrollTop() > 100) {
    $('#sp_cv').addClass('fixed');
    $('#sp_cv').fadeIn('fast');
  } else {
    $('#sp_cv').removeClass('fixed');
  }
});

