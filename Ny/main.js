//Selectors
let header = document.querySelector('.header');
let hamburgerMenu = document.querySelector('.hamburger-menu');

hamburgerMenu.addEventListener('click', function() {
    header.classList.toggle('menu-open');
})

// radio search
$(document).ready(function() {
    $('.radio-group .radio').click(function() {
        $('.selected .fa').removeClass('fa-check');
        $('.radio').removeClass('selected');
        $(this).addClass('selected');
    });
});