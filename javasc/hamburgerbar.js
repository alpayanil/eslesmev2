$('.hamburger_menu_buttonu').click(function () {
    $('.hamburgerMenuArea').animate({ width: 'toggle' }, 250);
    $('.pagesArea').toggle(250);
    $('.hamburgerblackarea').css('display', 'block');
    $('.hamburgerblackarea').animate({ opacity: '0.85' }, 250);
    $('.hammenu').toggleClass('hamburgerMenuIcon2');
    $('.hamburgerMenuIcon2').removeClass('hammenu');
});


$('.hamburgerblackarea').click(function () {
    $('.pagesArea').toggle(250);
    $('.hamburgerMenuArea').animate({ width: 'toggle' }, 350);
    $('.hamburgerblackarea').css('display', 'none');
    $('.hamburgerblackarea').animate({ opacity: '0' }, 250);
    $('.hamburgerMenuIcon2').toggleClass('hammenu');
    $('.hammenu').removeClass('hamburgerMenuIcon2');
});