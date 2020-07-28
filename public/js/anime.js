$(window).scroll(function(){
    var windowY = window.pageYOffset; 
    var width = window.innerWidth;
    if(windowY>width*0.5){
       $('.header-menu').addClass('show');
    }else{
        $('.header-menu').removeClass('show');
    }
});

$('.fv-content').fadeIn(600);

ScrollReveal().reveal('h2',{duration:600});

console.log(windowH);