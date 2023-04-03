app.DEBUG = true;
var gnav = $('.globalnav, .gnav');
gnav.on('click', '.globalnav__button, .gnav__button', function (e) {
  e.preventDefault();
  if (gnav.hasClass('open')) {
    gnav.removeClass('open');
  } else {
    gnav.addClass('open');
  }
});

var accordion = gnav.find('.globalnav__accordion, .gnav__accordion'),
    accordion_flag = false;
accordion.find('> ul').animate({ height: 'toggle' }, 0);
accordion.find('> a').attr({ 'role': 'button' });
accordion.on('click', ' > a', function (event) {
  event.preventDefault();
  var parent = $(this).parent(),
      ul = $(this).find(' ~ ul');
  if (parent.hasClass('open')) {
    parent.removeClass('open');
  } else {
    parent.addClass('open');
  }
  ul.animate({ height: 'toggle' }, 240);
  return false;
});

var myUI__dropdown = $('.myUI__dropdown__ui select');
myUI__dropdown.on('change', function () {
  var selected = $(this).find('option:selected'),
      parent = $(this).parents('.myUI__dropdown__ui'),
      label = parent.attr('data-label'),
      assist = selected.attr('data-assist');
  if (label !== undefined && label !== '') {
    if (selected.index() > 0) {
      parent.addClass('selected');
    } else {
      parent.removeClass('selected');
    }
  }
  if (assist !== undefined && assist !== '') {
    $('#' + assist + ':hidden').animate({ height: 'toggle', opacity: 1 });
  } else {
    $(this).find('option[data-assist]').each(function () {
      var assist = $(this).attr('data-assist');
      if (assist !== undefined && assist !== '') {
        $('#' + assist + ':visible').animate({ height: 'toggle', opacity: 0 });
      }
    });
  }
});
$(function () {
  myUI__dropdown.each(function () {
    var selected = $(this).find('option:selected'),
        parent = $(this).parents('.myUI__dropdown__ui'),
        label = parent.attr('data-label');
    if (label !== undefined && label !== '') {
      if (selected.index() > 0) {
        parent.addClass('selected');
      }
    }

    $(this).find('option[data-assist]').each(function () {
      var assist = $(this).attr('data-assist');
      if (assist !== undefined && assist !== '') {
        $('#' + assist).hide();
      }
    });
    var assist = selected.attr('data-assist');
    if (assist !== undefined && assist !== '') {
      $('#' + assist).show();
    }
  });
});