$(function () {
  var accordions = $('.accd');
  var winTimer,
      ww = $(window).width();
  function getContent(t) {
    // アコーディオンの対象を取得する
    var content = t.next();
    if (content.length <= 0) {
      content = t.parent().find('.accd__content');
    }
    if (content.length <= 0) {
      return false;
    }
    return content;
  }
  $('.accd__switch').each(function () {
    var content = getContent($(this)),
        parent = $(this).parents('.accd');
    if (!content) return;
    if ((
    // 画面サイズ判定
    !parent.hasClass('accd--ignore--pc') && ww > 767 || !parent.hasClass('accd--ignore--sp') && ww <= 767 || !parent.hasClass('accd--ignore--pc') && !parent.hasClass('accd--ignore--sp')) && (
    // オープンなのに非表示 もしくは、クローズなのに表示
    parent.hasClass('accd--open') && content.is(':hidden') || parent.hasClass('accd--close') && content.is(':visible'))) {
      content.slideToggle(0);
    }
  });
  var pos = {};

  accordions.on('click', '.accd__switch', function () {
    var ww = $(window).width(),
        parent = $(this).parents('.accd');
    if (parent.hasClass('accd--ignore--pc')) {
      if (ww > 767) {
        return true;
      }
    }
    if (parent.hasClass('accd--ignore--sp')) {
      if (ww <= 767) {
        return true;
      }
    }
    var content = getContent($(this));
    var t = content.offset().top,
        scTop = $(window).scrollTop();
    if (content.is(':visible')) {
      if (t < scTop && pos[parent] !== undefined) {
        content.animate({ opacity: 0 }, 320);
        $('html,body').animate({
          scrollTop: pos[parent]
        }, {
          duration: 480,
          complete: function () {
            content.css({ opacity: 1 });
          }
        });
      }
    } else {
      pos[parent] = scTop;
    }
    content.slideToggle(480);
    $(this).toggleClass("active");
    parent.toggleClass("active");
  });
  $(window).on({
    resize: function () {
      winTimer = setTimeout(function () {
        clearTimeout(winTimer);
        var ww = $(window).width(),
            parent = $(this),
            child = $(this).find('.accd__switch');
        accordions.each(function () {
          var parent = $(this),
              child = $(this).find('.accd__switch');
          if ($(this).hasClass('accd--ignore--pc') && ww > 767 && child.next().is(':not(:visible)') || $(this).hasClass('accd--ignore--sp') && ww <= 767 && child.next().is(':not(:visible)')) {
            // アコーディオンしないときに見えていなければ開く
            var content = getContent(child);
            content.slideToggle();
            child.toggleClass("active");
            parent.toggleClass("active");
          }
        });
      }, 80);
    }
  });
});