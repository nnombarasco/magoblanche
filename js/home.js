function goToSection(section){
    window.location.href=section;
    $(".navbar-collapse").removeClass("show");
}
function recaptchaCallback(){
    $('emailError').remove();
}
$(window).scroll(function () {
    if ($(this).scrollTop() > 300) { 
        $("#js_up").slideDown(300); 
    } else { 
        $("#js_up").slideUp(300);
    }
});

$("#js_up i").on('click', function (e) {
    e.preventDefault(); 
    $("body,html").animate({
        scrollTop: 0 
    }, 700); 
    return false;
});