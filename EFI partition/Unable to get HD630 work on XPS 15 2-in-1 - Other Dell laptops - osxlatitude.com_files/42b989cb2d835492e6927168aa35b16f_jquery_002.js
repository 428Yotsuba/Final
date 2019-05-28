/**
 * jquery.goTop 返回顶部插件 v0.1
 * 作者：nekoleamo
 */
;
(function ($, window, document) {
  $.fn.goTop = function (options) {
    var defaults = {
      scrollTop: 100, // 显示返回按钮时离顶部的距离（单位：px），默认100px
      scrollSpeed: 1000, // 点击按钮返回顶部的速度（单位：ms），默认1000ms
      fadeInSpeed: 1000, // 按钮缓动进入的速度（单位：ms），默认1000ms
      fadeOutSpeed: 500 // 按钮缓动消失的速度（单位：ms），默认500ms
    };
    var options = $.extend(defaults, options);
    var $this = $(this);
    $(window).on('scroll', function () {
      if ($(window).scrollTop() > options.scrollTop) {
        $this.fadeIn(options.fadeInSpeed);
      } else {
        $this.fadeOut(options.fadeOutSpeed);
      }
    })
    $this.on('click', function () {
      $('html,body').animate({
        'scrollTop': 0
      }, options.speed)
    })
  }
})(jQuery, window, document)