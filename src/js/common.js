(function () {

  /**
   * Header slider
   */
  $('.top-slider').slick({
    infinite: true,
    dots: false,
    arrows: true,
    appendArrows: $('.top-slider-controls'),
    prevArrow: $('.top-slider-controls .btn-prev'),
    nextArrow: $('.top-slider-controls .btn-next'),
    autoplay: true
  })

  /**
   * Testimonials
   */
  $('.testimonials').slick({
    infinite: true,
    dots: true,
    arrows: true,
    appendArrows: $('.testimonials-controls .col-md-3'),
    appendDots: $('.testimonials-controls .col-md-6'),
    prevArrow: $('.testimonials-controls .btn-prev'),
    nextArrow: $('.testimonials-controls .btn-next')
  })

  /**
   * Forms
   */
  $('.form-control').on('focus', function() {
    $(this).parent().addClass('is-focused');
  })

  $('.form-control').on('blur', function () {
    if ($(this).val() === '') {
      $(this).parent().removeClass('is-focused');
    }
  })

  /**
   * Link scroll
   */
  $('[href^="#"]').on('click', function (e) {
    const href = $(this).attr('href')
    const format = $(this).data('format');

    if (!!format) {
      $('[name="format"]').val(format);
    }

    e.preventDefault()

    if ($(href) && href.length > 1) {
      $('body, html').animate({
        scrollTop: $(href).offset().top
      })
    }
  })

})(jQuery)