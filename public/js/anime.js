$(window).scroll(function(){
    var windowY = window.pageYOffset; 
    var width = window.innerWidth;
    if (window.matchMedia( "(min-width: 480px)" ).matches){
        if(windowY>width*0.5){
        $('.header-menu').addClass('show');
        }else{
            $('.header-menu').removeClass('show');
        }
    }
});

$('.fadein').fadeIn(800);
$('.fv-content').fadeIn(800)

if (window.matchMedia( "(max-width: 480px)" ).matches){
    $('.fv-content').css('display','flex');
}

window.sr = ScrollReveal();
sr.reveal('.appear',{duration:800});
sr.reveal('.fadeup',{duration:1200,origin:'bottom',distance:'80px',delay:200});
sr.reveal('.fadeup2',{duration:1000,origin:'bottom',distance:'80px'});
sr.reveal('.items',{duration:1000,origin:'bottom',distance:'80px'});
sr.reveal('.menu-image',{duration:1000,origin:'bottom',distance:'80px',delay:200});