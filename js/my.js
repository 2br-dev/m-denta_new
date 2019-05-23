$(document).ready(function() {
  $('#open-form').click(function() {
    $('#sign-up-form').removeClass('hide-form');
    $('#sign-up-form').addClass('show-form');
  });

  $('#close-form').click(function() {
    $('#sign-up-form').removeClass('show-form');
    $('#sign-up-form').addClass('hide-form');
  });

  if (navigator.userAgent.search(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i) != -1) {
    $('#phone1').html('<a href="tel:+79184403348">+7 918 440 33 48</a>');
    $('#phone2').html('<a href="tel:+78612980851">+7 861 298 08 51</a>');
  } else {
    $('#phone1').html('+7 918 440 33 48');
    $('#phone2').html('+7 861 298 08 51');
  }

  $('#share').mouseover(function() {
    $('#share-icon').attr('src', 'img/share-hover.svg');
  });
  $('#share').mouseout(function() {
    $('#share-icon').attr('src', 'img/share.svg');
  });

  $('#geo').mouseover(function() {
    $('#geo-icon').attr('src', 'img/geo-hover.svg');
  });
  $('#geo').mouseout(function() {
    $('#geo-icon').attr('src', 'img/geo.svg');
  });

  $('#file').mouseover(function() {
    $('#file-icon').attr('src', 'img/file-hover.svg');
  });
  $('#file').mouseout(function() {
    $('#file-icon').attr('src', 'img/file.svg');
  });
});