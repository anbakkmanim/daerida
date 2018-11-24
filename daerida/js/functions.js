$(window).load(function() {
  "use strict";
  $(".pulse").fadeOut();
  $("#preloader")
    .delay(10)
    .hide();
});
new WOW().init();
$(window).scroll(function() {
  "use strict";
  if ($(this).scrollTop() > 1) {
    $("header").addClass("sticky");
  } else {
    $("header").removeClass("sticky");
  }
});
jQuery(function($) {
  "use strict";
  function centerModal() {
    $(this).css("display", "block");
    var $dialog = $(this).find(".modal-dialog"),
      offset = ($(window).height() - $dialog.height()) / 2,
      bottomMargin = parseInt($dialog.css("marginBottom"), 10);
    if (offset < bottomMargin) offset = bottomMargin;
    $dialog.css("margin-top", offset);
  }

  $(".modal").on("show.bs.modal", centerModal);

  $(".modal-popup .close-link").click(function(event) {
    event.preventDefault();
    $(".modal").modal("hide");
  });

  $(window).on("resize", function() {
    $(".modal:visible").each(centerModal);
  });
});

$(function() {
  $('a[href="#tlogin"]').on("click", function(event) {
    event.preventDefault();
    $("#tlogin").show();
    $("#tlogin").addClass("open");
  });
  $("#tlogin .close").on("click", function(event) {
    $("#tlogin").removeClass("open");
    $(".tlogin_start").show();
    $("#tlogin_email").removeClass("email_login_on");
    $("#tlogin").hide();
  });
});

$(function() {
  $('a[href="#tlogin_email"]').on("click", function(event) {
    event.preventDefault();
    $("#tlogin_email").addClass("email_login_on");
    $(".tlogin_start").hide();
  });
});

$(function() {
  "use strict";
  $(".video_pop").magnificPopup({ type: "iframe" });
  $(".magnific-gallery").each(function() {
    $(this).magnificPopup({
      delegate: "a",
      type: "image",
      gallery: { enabled: true },
      image: {
        titleSrc: function(item) {
          return (
            item.el.attr("title") +
            ' &middot; <a class="image-source-link" href="' +
            item.el.attr("data-source") +
            '" target="_blank">관련 링크 바로가기</a>'
          );
        }
      },
      removalDelay: 500,
      callbacks: {
        beforeOpen: function() {
          this.st.image.markup = this.st.image.markup.replace(
            "mfp-figure",
            "mfp-figure mfp-with-anim"
          );
          this.st.mainClass = this.st.el.attr("data-effect");
        }
      },
      closeOnContentClick: true,
      midClick: true
    });
  });
});

$(document).ready(function() {
  "use strict";
  $("#quote-carousel").carousel({
    pause: true,
    interval: 6000
  });
});

$(".tooltip-1").tooltip({ html: true });

$(function() {
  $('[data-toggle="tooltip"]').tooltip();
});

function toggleChevron(e) {
  "use strict";
  $(e.target)
    .prev(".panel-heading")
    .find("i.indicator")
    .toggleClass("icon_plus_alt2 icon_minus_alt2");
}
$("#accordion").on("hidden.bs.collapse shown.bs.collapse", toggleChevron);

$(document).ready(function($) {
  if (!device.tablet() && !device.mobile()) {
  } else {
    $(".header-video").addClass("mobile_no_video");
  }
});
