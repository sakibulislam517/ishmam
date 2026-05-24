$(function () {
  var slideIndex = 0;
  var $slides = $(".hero-slide");

  function showSlide(index) {
    if (!$slides.length) return;
    slideIndex = (index + $slides.length) % $slides.length;
    $slides.removeClass("active").eq(slideIndex).addClass("active");
    $(".slider-dot").removeClass("bg-red-600").addClass("bg-red-200");
    $(".slider-dot").eq(slideIndex).removeClass("bg-red-200").addClass("bg-red-600");
  }

  showSlide(0);
  setInterval(function () {
    showSlide(slideIndex + 1);
  }, 5200);

  $(".slider-next").on("click", function () {
    showSlide(slideIndex + 1);
  });

  $(".slider-prev").on("click", function () {
    showSlide(slideIndex - 1);
  });

  $(".slider-dot").on("click", function () {
    showSlide($(this).index());
  });

  $(".mobile-toggle").on("click", function () {
    $(".mobile-menu").slideToggle(180).toggleClass("active");
  });

  $(".dropdown-toggle").on("click", function (event) {
    event.stopPropagation();
    $(this).siblings(".dropdown-panel").toggleClass("active");
  });

  $(document).on("click", function () {
    $(".dropdown-panel").removeClass("active");
  });

  $(".search-input").on("focus input", function () {
    $(".search-panel").addClass("active");
  });

  $(".search-input").on("keydown", function (event) {
    if (event.key === "Escape") {
      $(".search-panel").removeClass("active");
      $(this).blur();
    }
  });

  $(".thumb").on("click", function () {
    var src = $(this).find("img").attr("src");
    $(".main-product-image").attr("src", src);
    $(".thumb").removeClass("active");
    $(this).addClass("active");
  });

  $(".tab-button").on("click", function () {
    var target = $(this).data("tab");
    $(".tab-button").removeClass("active");
    $(this).addClass("active");
    $(".tab-pane").removeClass("active");
    $("#" + target).addClass("active");
  });

  $(".qty-plus").on("click", function () {
    var $input = $(this).siblings(".qty-input");
    $input.val(parseInt($input.val(), 10) + 1);
  });

  $(".qty-minus").on("click", function () {
    var $input = $(this).siblings(".qty-input");
    var next = Math.max(1, parseInt($input.val(), 10) - 1);
    $input.val(next);
  });

  $(".open-modal").on("click", function () {
    $(".modal-backdrop").fadeIn(160).addClass("active");
  });

  $(".close-modal, .modal-backdrop").on("click", function (event) {
    if ($(event.target).hasClass("modal-backdrop") || $(this).hasClass("close-modal")) {
      $(".modal-backdrop").fadeOut(160).removeClass("active");
    }
  });

  $(".add-toast").on("click", function () {
    var $toast = $(".toast");
    $toast.fadeIn(160).addClass("active");
    setTimeout(function () {
      $toast.fadeOut(180).removeClass("active");
    }, 2600);
  });
});
