
$(function () {
  $('#vt-toggle').on("click", function () {
    if ($('#ra-content').is(':visible')) {
      $('#ra-content').toggle('linear');
    }
    $('#vt-content').toggle('swing');
  })
});

$(function () {
  $('#ra-toggle').on('click', function () {
    if ($('#vt-content').is(':visible')) {
      $('#vt-content').toggle('linear');
    }
    $('#ra-content').toggle('swing');
  })
});

$(function () {
  $('#ab-easy').on("click", function () {



    if ($('#ab-medium-content').is(':visible')) {
      $('#ab-medium-content').toggle('linear');

      if ($('#ab-medium').hasClass('underline')) {
        $('#ab-medium').removeClass('underline font-bold');
      }
    }

    if ($('#ab-hard-content').is(':visible')) {
      $('#ab-hard-content').toggle('linear');

      if ($('#ab-hard').hasClass('underline')) {
        $('#ab-hard').removeClass('underline font-bold');
      }
    }

    if ($('#ab-easy').hasClass('underline')) {
      $('#ab-easy').removeClass('underline font-bold');
      $('#ab-easy-content').toggle('swing');

    } else {
      $('#ab-easy-content').toggle('swing');
      $('#ab-easy').addClass('underline font-bold')
    }

  })
});

$(function () {
  $('#ab-medium').on("click", function () {
    console.log('medium');
    if ($('#ab-easy-content').is(':visible')) {
      $('#ab-easy-content').toggle('linear');

      if ($('#ab-easy').hasClass('underline')) {
        $('#ab-easy').removeClass('underline font-bold');
      }
    }

    if ($('#ab-hard-content').is(':visible')) {
      $('#ab-hard-content').toggle('linear');

      if ($('#ab-hard').hasClass('underline')) {
        $('#ab-hard').removeClass('underline font-bold');
      }
    }

    if ($('#ab-medium').hasClass('underline')) {
      $('#ab-medium').removeClass('underline font-bold');
      $('#ab-medium-content').toggle('swing');

    } else {
      $('#ab-medium-content').toggle('swing');
      $('#ab-medium').addClass('underline font-bold')
    }
  })
});

$('#ab-hard').on("click", function () {
  if ($('#ab-easy-content').is(':visible')) {
    $('#ab-easy-content').toggle('linear');

    if ($('#ab-easy').hasClass('underline')) {
      $('#ab-easy').removeClass('underline font-bold');
    }
  }

  if ($('#ab-medium-content').is(':visible')) {
    $('#ab-medium-content').toggle('linear');

    if ($('#ab-medium').hasClass('underline')) {
      $('#ab-medium').removeClass('underline font-bold');
    }
  }

  if ($('#ab-hard').hasClass('underline')) {
    $('#ab-hard').removeClass('underline font-bold');
    $('#ab-hard-content').toggle('swing');

  } else {
    $('#ab-hard-content').toggle('swing');
    $('#ab-hard').addClass('underline font-bold')
  }
});