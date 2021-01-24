let navbar = $(".navbar");
$(window).scroll(function () {
    let top = $(".cards").offset().top - window.innerHeight;
    if($(window).scrollTop() > top) {
        navbar.addClass("sticky");
    }else {
        navbar.removeClass("sticky");
    }
})