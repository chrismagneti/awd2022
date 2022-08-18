jQuery(document).ready(function ($) {
  // add spans to nav parent items so that I can get a click event, also handle that click event on mobile
  $(function () {
    var menuLinks = $("#header li.menu-item-has-children >a");
    menuLinks.append(
      '<span class="drop-icon"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"></path></svg></span>'
    );

    if ($(window).width() < 768) {
      $("body").on("click", "li.menu-item-has-children a", function (evt) {
        evt.preventDefault();

        var theMenu = $(this).parent().find(">.sub-menu");

        if (theMenu.is(":visible")) {
          theMenu.stop().slideUp(150);
        } else {
          theMenu.stop().slideDown(150);
        }
      });
    } else {
      $("li.menu-item-has-children").hover(
        function () {
          $(this).addClass("active");
          $(this).find(">.sub-menu").stop().slideDown(150);
        },
        function () {
          $(this).removeClass("active");
          $(this).find(">.sub-menu").stop().slideUp(150);
        }
      );
    }
  });

  // mobile nav functionality
  $(function () {
    var navTrigger = $("#nav-trigger"),
      mainNav = $("#primary-navigation-wrap"),
      speed = 150;

    navTrigger.on("click", function () {
      if ($(this).hasClass("open")) {
        $(this).removeClass("open");
        mainNav.removeClass("shown");
        $("body").removeClass("lock-scrolling");
      } else {
        $(this).addClass("open");
        mainNav.addClass("shown");
        $("body").addClass("lock-scrolling");
      }
    });
  });

  // awd-accordion functionality
  $(function () {
    var trigger = $(".awd-accordion-toggle");

    trigger.on("click", function (e) {
      e.preventDefault();
      if ($(this).hasClass("open")) {
        $(this).removeClass("open");
      } else {
        $(this).addClass("open");
      }
      $(this)
        .closest(".awd-accordion")
        .find(".awd-accordion-content")
        .slideToggle();
    });
  });

  // fixed nav scroll
  $(document).ready(function () {
    $(document).scroll(function () {
      if ($(document).scrollTop() >= 25) {
        $("#header").addClass("js-scrolling");
      } else {
        $("#header").removeClass("js-scrolling");
      }
    });
  });

  // if there is a carousel, activate it
  $(".template-carousel-wrapper").slick({
    slide: ".a-slide",
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    fade: false,
    focusOnSelect: true,
    centerMode: false,
    infinite: false,
    autoplay: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  if ($(window).width() > 767) {
    // services slider
    $(".services-support-slider-inner").slick({
      slide: ".slide",
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: true,
      fade: true,
      focusOnSelect: true,
      centerMode: false,
      infinite: false,
      autoplay: false,
      adaptiveHeight: true,
      responsive: [
        {
          breakpoint: 767,
          settings: "unslick",
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ],
    });

    $(".services-support-slider-inner").on(
      "beforeChange",
      function (event, slick, currentSlide, nextSlide) {
        $(".a-pin").removeClass("active");
        $(".a-pin-" + (nextSlide + 1)).addClass("active");
      }
    );

    $("div[data-slide]").click(function (e) {
      e.preventDefault();
      var slideno = $(this).data("slide");
      $(".services-support-slider-inner").slick("slickGoTo", slideno - 1);
    });
  } else {
    // mobile click to expand services
    $(function () {
      var showMoreService = $(
        ".services-support-slider-inner .mobile-trigger .icon"
      );

      showMoreService.on("click", function (evt) {
        evt.preventDefault();

        var openIcon = $(this);
        var bottomPart = $(this).parent().parent().find(".mobile-expand");

        if (bottomPart.is(":visible")) {
          bottomPart.stop().slideUp(200);
          openIcon.removeClass("open");
        } else {
          bottomPart.stop().slideDown(200);
          openIcon.addClass("open");
        }
      });
    });
  }

  // faq expand
  $(function () {
    var showFAQ = $(".template-faq-expand-wrapper .q-part");

    showFAQ.on("click", function (evt) {
      evt.preventDefault();

      var clickedPart = $(this);
      var aPart = $(this).parent().find(".a-part");

      if (aPart.is(":visible")) {
        aPart.stop().slideUp(200);
        clickedPart.removeClass("open");
      } else {
        aPart.stop().slideDown(200);
        clickedPart.addClass("open");
      }
    });
  });

  $(window).on("scroll", function () {
    $(".compass-animate-wrap").each(function () {
      if (isScrolledIntoView($(this))) {
        $(this).addClass("show");
      }
    });
  });

  function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return elemBottom <= docViewBottom && elemTop >= docViewTop;
  }

  $(".class-carousel").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    fade: true,
    focusOnSelect: true,
    centerMode: false,
    infinite: false,
    autoplay: false,
    adaptiveHeight: true,
    // responsive: [
    //   {
    //     breakpoint: 767,
    //     settings: "unslick",
    //   },
    //   // You can unslick at a given breakpoint now by adding:
    //   // settings: "unslick"
    //   // instead of a settings object
    // ],
  });

  $(".blog-carousel").slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    dots: true,
    arrows: true,
    // fade: true,
    focusOnSelect: true,
    centerMode: false,
    infinite: true,
    autoplay: false,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      //   // You can unslick at a given breakpoint now by adding:
      //   // settings: "unslick"
      //   // instead of a settings object
    ],
  });
});
