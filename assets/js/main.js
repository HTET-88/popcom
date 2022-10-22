


//sticky navbar
var nav = document.querySelector('nav');

window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow');
    } else {
        nav.classList.remove('bg-dark', 'shadow');
    }
});

// button focus
$('info_tab_header').on('click', function(){
    // $('button').removeClass('selected');
    $(this).addClass('selected');
});