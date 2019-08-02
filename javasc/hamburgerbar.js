$('.hamburger_menu_buttonu').click(function () {
    $('.hamburgerMenuArea').animate({ width: 'toggle' }, 10);
    $('.pagesArea').toggle(100);
    $('.hamburgerblackarea').css('display', 'block');
    $('.hamburgerblackarea').animate({ opacity: '0.85' }, 0);
    $('.hammenu').toggleClass('hamburgerMenuIcon2');
    $('.hamburgerMenuIcon2').removeClass('hammenu');
});


$('.hamburgerblackarea').click(function () {
    $('.pagesArea').toggle(100);
    $('.hamburgerMenuArea').animate({ width: 'toggle' }, 0);
    $('.hamburgerblackarea').css('display', 'none');
    $('.hamburgerblackarea').animate({ opacity: '0' }, 0);
    $('.hamburgerMenuIcon2').toggleClass('hammenu');
    $('.hammenu').removeClass('hamburgerMenuIcon2');
});