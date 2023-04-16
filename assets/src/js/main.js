(function($) {
  $(window).on('scroll', function() {    
    let scroll = $(window).scrollTop();

    if (scroll >= 100) {
      $('header').addClass('scrolled');
    } else {
      $('header').removeClass('scrolled');
    }
  });

  // init carousel
  $('.pg-brands-carousel').owlCarousel({
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 3,
        margin: 32,
        dots: true,
        loop: true,
        rewind: true,
      },
      1200: {
        items: 6,
        margin: 64,
        dots: true,
        loop: true,
      },
    }
  })

  // init carousel
  $('.pg-testimonials-carousel').owlCarousel({
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    dots: true,
    loop: true,
    stagePadding: 16,
    responsive: {
      0: {
        items: 1,
        margin: 32,
        dots: true,
        loop: true,
        rewind: true,
      },
      1200: {
        items: 2,
        margin: 32,
        dots: true,
        loop: true,
      },
    }
  })

  $('.pg-blog__sortby').click(function (e) {
    $('.pg-blog__sortby').prop('checked', false);
    $(e.target).prop('checked', true);

    $('.pg-blog__filterby').data('order', $(this).data('order'));

    $.ajax({
      type: 'POST',
      url: window.location.origin + '/wp-admin/admin-ajax.php',
      dataType: 'html',
      data: {
        action: 'filter_posts',
        order: $(this).data('order'),
        category: $(this).data('category'),
      },
      success: function(res) {
        $('.load_html').html(res);
      }
    })
  })

  $('.pg-blog__filter-menu .pg-blog__filterby').click(function (e) {

    let filterChecks = $('.pg-blog__filter-menu .pg-blog__filterby');
    let filterCategories = '';
    let filterChosenFlag = false;

    for (i = 0; i < filterChecks.length; i++) {
      if (filterChecks[i].checked) {
        filterChosenFlag = true;
      }
    }

    if (!filterChosenFlag) {
      filterChecks[0].checked = true;
    } else if ($(this).data('category') == '') {
      $('.pg-blog__filterby').prop('checked', false);
      $(e.target).prop('checked', true);
    } else {
      for (i = 0; i < filterChecks.length; i++) {
        filterChecks[0].checked = false;
      }
    }

    for (i = 0; i < filterChecks.length; i++) {
      if (filterChecks[i].checked)
      {
        if (i == 0) {
          filterCategories = filterChecks[i].dataset.category;
        } else {
          filterCategories += ',' + filterChecks[i].dataset.category;
        }
      }
    }

    $('.pg-blog__sortby').data('category', filterCategories);

    $.ajax({
      type: 'POST',
      url: window.location.origin + '/wp-admin/admin-ajax.php',
      dataType: 'html',
      data: {
        action: 'filter_posts',
        order: $(this).data('order'),
        category: filterCategories,
      },
      success: function(res) {
        $('.load_html').html(res);
      }
    })
  })

  $('.pg-blog__filter-menu--mobile .pg-blog__filterby').click(function (e) {

    let filterChecks = $('.pg-blog__filter-menu--mobile .pg-blog__filterby');
    let filterCategories = '';
    let filterChosenFlag = false;

    for (i = 0; i < filterChecks.length; i++) {
      if (filterChecks[i].checked) {
        filterChosenFlag = true;
      }
    }

    if (!filterChosenFlag) {
      filterChecks[0].checked = true;
    } else if ($(this).data('category') == '') {
      $('.pg-blog__filterby').prop('checked', false);
      $(e.target).prop('checked', true);
    } else {
      for (i = 0; i < filterChecks.length; i++) {
        filterChecks[0].checked = false;
      }
    }

    for (i = 0; i < filterChecks.length; i++) {
      if (filterChecks[i].checked)
      {
        if (i == 0) {
          filterCategories = filterChecks[i].dataset.category;
        } else {
          filterCategories += ',' + filterChecks[i].dataset.category;
        }
      }
    }

    $('.pg-blog__sortby').data('category', filterCategories);

    $.ajax({
      type: 'POST',
      url: window.location.origin + '/wp-admin/admin-ajax.php',
      dataType: 'html',
      data: {
        action: 'filter_posts',
        order: $(this).data('order'),
        category: filterCategories,
      },
      success: function(res) {
        $('.load_html').html(res);
      }
    })
  })

  magnifyVideos('.js-video__popup-link');

})(jQuery);

// magnific video play 
function magnifyVideos(className) {
  $(document).find(className).magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-with-zoom',
    gallery: {
      enabled:true
    },
    zoom: {
      enabled: true,
      duration: 300, 
      easing: 'ease-in-out',
      opener: function(openerElement) {
        return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    }
  });
}
