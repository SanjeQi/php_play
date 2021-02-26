$('#findMyWeather').click(function (event) {
  event.preventDefault();
  if ($('#city').val() != '') {
    $.get('scraper.php?city=' + $('#city').val(), function (data) {
      if (data == '') {
        $('#success').fadeOut();
        $('#fail').fadeIn();
      } else {
        $('#fail').fadeOut();
        $('#success').html(data).fadeIn();
      }
    });
  } else {
    $('#success').fadeOut();
    $('#fail').fadeOut();
    $('#noCity').fadeIn();
  }
});
