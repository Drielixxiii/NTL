var transparent = true;
var big_image;

var transparentDemo = true;
var fixedTop = false;

var navbar_initialized,
  backgroundOrange = false,
  toggle_initialized = false;

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.body.style.backgroundColor = "white";
}

$(document).ready(function () {
  window_width = $(window).width();
  var big_image;

  //  Activate the tooltips
  if ($('[data-toggle="tooltip"]').length != 0) {
    $('[data-toggle="tooltip"]').tooltip();
  }

  //  Activate regular switches
  if ($("[data-toggle='switch']").length != 0) {
    $("[data-toggle='switch']").bootstrapSwitch();
  }

  //  Append modals to <body>
  if ($(".modal").length != 0) {
    $(".modal").appendTo("body");
  }

  // Init noUiSlider
  pk.initSliders();

  // Init popovers
  pk.initPopovers();

  // Activate the image for the navbar-collapse
  pk.initNavbarImage();

  // Navbar color change on scroll
  if ($(".navbar[color-on-scroll]").length != 0) {
    $(window).on("scroll", pk.checkScrollForTransparentNavbar);
  }

  $(".navbar-collapse").click(function () {
    setTimeout(function () {
      if (pk.misc.navbar_menu_visible == 1) {
        $("html").removeClass("nav-open");
        pk.misc.navbar_menu_visible = 0;
        $("#bodyClick").remove();
        setTimeout(function () {
          $toggle.removeClass("toggled");
        }, 550);
      }
    }, 550);
  });

  // Change the collor of navbar collapse
  $("#navbarToggler")
    .on("show.bs.collapse", function () {
      if (
        $("nav").hasClass("navbar-transparent") &&
        $(document).scrollTop() < 50
      ) {
        $(".navbar").addClass("no-transition");
        $("nav").removeClass("navbar-transparent");
      }
    })
    .on("hidden.bs.collapse", function () {
      if ($(document).scrollTop() < 50) {
        $(".navbar").removeClass("no-transition");
        $("nav:first-of-type").addClass("navbar-transparent");
      }
    });

  $navbar = $(".navbar[color-on-scroll]");
  scroll_distance = $navbar.attr("color-on-scroll") || 500;

  // Check if we have the class "navbar-color-on-scroll" then add the function to remove the class "navbar-transparent" so it will transform to a plain color.

  if ($(".navbar[color-on-scroll]").length != 0) {
    pk.checkScrollForTransparentNavbar();
    $(window).on("scroll", pk.checkScroll);
  }

  $(".form-control")
    .on("focus", function () {
      $(this).parent(".input-group").addClass("input-group-focus");
    })
    .on("blur", function () {
      $(this).parent(".input-group").removeClass("input-group-focus");
    });

  if (window_width >= 768) {
    big_image = $('.page-header[data-parallax="true"]');

    if (big_image.length != 0) {
      $(window).on("scroll", pk.checkScrollForPresentationPage);
    }
  }
  // Activate Carousel
  $(".carousel").carousel({
    interval: 4000,
  });
});

$(document).on("click", ".navbar-toggler", function () {
  $toggle = $(this);

  if (pk.misc.navbar_menu_visible == 1) {
    $("html").removeClass("nav-open");
    pk.misc.navbar_menu_visible = 0;
    $("#bodyClick").remove();
    setTimeout(function () {
      $toggle.removeClass("toggled");
    }, 550);
  } else {
    setTimeout(function () {
      $toggle.addClass("toggled");
    }, 580);
    div = '<div id="bodyClick"></div>';
    $(div)
      .appendTo("body")
      .click(function () {
        $("html").removeClass("nav-open");
        pk.misc.navbar_menu_visible = 0;
        setTimeout(function () {
          $toggle.removeClass("toggled");
          $("#bodyClick").remove();
        }, 550);
      });

    $("html").addClass("nav-open");
    pk.misc.navbar_menu_visible = 1;
  }
});

pk = {
  misc: {
    navbar_menu_visible: 0,
  },

  checkScrollForTransparentNavbar: debounce(function () {
    if ($(document).scrollTop() > $(".navbar").attr("color-on-scroll")) {
      if (transparent) {
        transparent = false;
        $(".navbar[color-on-scroll]").removeClass("navbar-transparent");
      }
    } else {
      if (!transparent) {
        transparent = true;
        $(".navbar[color-on-scroll]").addClass("navbar-transparent");
      }
    }
  }, 17),

  initNavbarImage: function () {
    var $navbar = $(".navbar")
      .find(".navbar-translate")
      .siblings(".navbar-collapse");
    var background_image = $navbar.data("nav-image");

    if ($(window).width() < 991 || $("body").hasClass("burger-menu")) {
      if (background_image != undefined) {
        $navbar
          .css("background", "url('" + background_image + "')")
          .removeAttr("data-nav-image")
          .css("background-size", "cover")
          .addClass("has-image");
      }
    } else if (background_image != undefined) {
      $navbar
        .css("background", "")
        .attr("data-nav-image", "" + background_image + "")
        .css("background-size", "")
        .removeClass("has-image");
    }
  },

  initPopovers: function () {
    if ($('[data-toggle="popover"]').length != 0) {
      $("body").append('<div class="popover-filter"></div>');

      //    Activate Popovers
      $('[data-toggle="popover"]')
        .popover()
        .on("show.bs.popover", function () {
          $(".popover-filter").click(function () {
            $(this).removeClass("in");
            $('[data-toggle="popover"]').popover("hide");
          });
          $(".popover-filter").addClass("in");
        })
        .on("hide.bs.popover", function () {
          $(".popover-filter").removeClass("in");
        });
    }
  },

  initSliders: function () {
    // Sliders for demo purpose in refine cards section
    if ($("#sliderRegular").length != 0) {
      var rangeSlider = document.getElementById("sliderRegular");
      noUiSlider.create(rangeSlider, {
        start: [5000],
        range: {
          min: [2000],
          max: [10000],
        },
      });
    }
    if ($("#sliderDouble").length != 0) {
      var slider = document.getElementById("sliderDouble");
      noUiSlider.create(slider, {
        start: [20, 80],
        connect: true,
        range: {
          min: 0,
          max: 100,
        },
      });
    }
  },

  // Javascript for the parallax

  checkScroll: debounce(function () {
    big_image = $('.page-header[data-parallax="true"]');
    oVal = $(window).scrollTop() / 3;
    big_image.css({
      transform: "translate3d(0," + oVal + "px,0)",
      "-webkit-transform": "translate3d(0," + oVal + "px,0)",
      "-ms-transform": "translate3d(0," + oVal + "px,0)",
      "-o-transform": "translate3d(0," + oVal + "px,0)",
    });
  }, 4),
};

// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.

function debounce(func, wait, immediate) {
  var timeout;
  return function () {
    var context = this,
      args = arguments;
    clearTimeout(timeout);
    timeout = setTimeout(function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    }, wait);
    if (immediate && !timeout) func.apply(context, args);
  };
}

document.onmousedown = disableclick;
function disableclick(event) {
  if (event.button == 2) {
    return false;
  }
}

var message = "";
function clickIE() {
  if (document.all) {
    message;
    return false;
  }
}
function clickNS(e) {
  if (document.layers || (document.getElementById && !document.all)) {
    if (e.which == 2 || e.which == 3) {
      message;
      return false;
    }
  }
}
if (document.layers) {
  document.captureEvents(Event.MOUSEDOWN);
  document.onmousedown = clickNS;
} else {
  document.onmouseup = clickNS;
  document.oncontextmenu = clickIE;
}

document.oncontextmenu = new Function("return false");

//  F12
//==========

document.onkeypress = function (event) {
  if (e.ctrlKey && e.keyCode === 123) {
    // alert('not allowed');
    return false;
  }
};

//    CTRL + u
//==============

document.onkeydown = function (e) {
  if (e.ctrlKey && e.keyCode === 85) {
    // alert('not allowed');
    return false;
  }
};
