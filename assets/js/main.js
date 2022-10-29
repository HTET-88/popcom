


//sticky navbar
var nav = document.querySelector('nav');
var bar = document.querySelector('.navbar-nav');

window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
        nav.classList.add('nav-dark', 'shadow');

    } else {
        nav.classList.remove('nav-dark', 'shadow');
    }
});

// button focus
// $('info_tab_header').on('click', function(){
//     // $('button').removeClass('selected');
//     $(this).addClass('selected');
// });

//read more button
function toggleText() {
  
    // Get 3 dots
    var points = document.getElementById("points");
    //show more text
    var showMoreText =document.getElementById("moreText");
    //read more button
    var buttonText =document.getElementById("textButton");
    //two related section
    // var two = document.getElementById("#two");
    if (points.style.display === "none") {
        showMoreText.style.display = "none";
        points.style.display = "inline";
        buttonText.innerHTML = "Read More";
    }
    else {

        showMoreText.style.display = "inline";
        points.style.display = "none";
        buttonText.innerHTML = "Read Less";
        // two.style.marginTop = "2000px";
    }
}

// youtube


