jQuery(document).ready(function () {
  const toggleHeaderNav = () => {
    const $headerNav = $(".header-nav");
    const $navToggle = $(".nav-toggle");
    const $bgBlack = $(".bg-black");
    const $navItem = $(".nav-item");

    const navOpen = () => {
      $navToggle.toggleClass("is-open");
      $headerNav.toggleClass("is-open");
      $bgBlack.toggleClass("is-open");
      $("body").toggleClass("scroll-prevent");
    };

    const navClose = () => {
      $navToggle.removeClass("is-open");
      $headerNav.removeClass("is-open");
      $bgBlack.removeClass("is-open");
      $("body").removeClass("scroll-prevent");
    };

    const handleClick = () => {
      $navToggle.on("click", navOpen);
      $bgBlack.on("click", navClose);
      $navItem.on("click", navClose);
    };

    handleClick();
  };

  const animateWithScroll = () => {
    $(window).on("load scroll", () => {
      const elem = $(".animated");
      elem.css("opacity", "0");

      const fadeInAction = function () {
        const isAnimate = $(this).data("animate");
        const elemOffset = $(this).offset().top;
        const scrollPos = $(window).scrollTop();
        const windowHeight = $(window).height();

        if (scrollPos > elemOffset - windowHeight + windowHeight / 3) {
          $(this).addClass(isAnimate);
        }
      };

      elem.each(fadeInAction);
    });
  };

  const init = () => {
    toggleHeaderNav();
    animateWithScroll();
  };

  init();
});
