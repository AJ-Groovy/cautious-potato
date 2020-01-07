$(document).ready(function () {
    let $headerHeight;

    $('.hero__slider').slick();

    $headerHeight = $('.header').outerHeight(true);

    document.documentElement.style.setProperty('--header-height', $headerHeight);
});

