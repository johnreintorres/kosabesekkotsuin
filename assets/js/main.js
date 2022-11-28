

$(document).ready(function(){


    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    });
    $('.scroll-top').click(function(){
        $('html, body').animate({scrollTop : 0});
        return false;
    });

    $showvar = false;
    $('.show-trigger').hover(function(){
        if(!$showvar){
        $('.show-field').addClass('show');
        $showvar = true;
        } 
    })
    $('.show-field').mouseleave(function(){
        $('.show-field').removeClass('show');
        $showvar = false;
    });
    $('.nav-area').mouseenter(function(){
        $('.show-field').removeClass('show');
        $showvar = false;
    });
    $('.nav-anchor').mouseenter(function(){
        $('.show-field').removeClass('show');
        $showvar = false;
    });

    $('.show-field-sp').hide();
    $('.link-trigger').on('click', function(){
        $('.trigger-container').toggleClass('padding');
        $('.show-field-sp').slideToggle();
        $('.link-trigger').toggleClass('change');
        $('.trigger-svg').toggleClass('rotate');
    })

    $('.answer').hide();
$('.ans-1').show();
 $('#trigger-1, #trigger-2, #trigger-3, #trigger-4, #trigger-5, #trigger-6, #trigger-7, #trigger-8, #trigger-9').on('click', function(){
    if(this.id == "trigger-1"){
            $('.ans-1').slideToggle();
            $('.trig-1').toggleClass('rotate');
            console.log('test')
    } else if( this.id == "trigger-2"){
            $('.ans-2').slideToggle();
            $('.trig-2').toggleClass('rotate');
            // $('.ar-2').toggleClass('rotate');
    } else if( this.id == "trigger-3"){
        $('.ans-3').slideToggle();
        $('.trig-3').toggleClass('rotate');
        // $('.ar-3').toggleClass('rotate');
    }  else if( this.id == "trigger-4"){
        $('.ans-4').slideToggle();
        $('.trig-4').toggleClass('rotate');
        // $('.ar-4').toggleClass('rotate');
    }  else if( this.id == "trigger-5"){
        $('.ans-5').slideToggle();
        $('.trig-5').toggleClass('rotate');
        // $('.ar-4').toggleClass('rotate');
    }  else if( this.id == "trigger-6"){
        $('.ans-6').slideToggle();
        $('.trig-6').toggleClass('rotate');
        // $('.ar-4').toggleClass('rotate');
    }  else if( this.id == "trigger-7"){
        $('.ans-7').slideToggle();
        $('.trig-7').toggleClass('rotate');
        // $('.ar-4').toggleClass('rotate');
    }  else if( this.id == "trigger-8"){
        $('.ans-8').slideToggle();
        $('.trig-8').toggleClass('rotate');
        // $('.ar-4').toggleClass('rotate');
    }  else if( this.id == "trigger-9"){
        $('.ans-9').slideToggle();
        $('.trig-9').toggleClass('rotate');
        // $('.ar-4').toggleClass('rotate');
    }
 })

 $('#voices-owl').owlCarousel({
    nav: true,
    margin: 15,
    items: 3, 
    dots: true,
    loop: true,
      responsive : {
        // breakpoint from 0 up
        0 : {
            items: 1, 
            margin: 20

        },
        700 : {
            items: 2, 
            margin: 20

        },
        1000 : {
            items: 3, 
            margin: 20

        }
    }
});

$('#lp-owl').owlCarousel({
    margin: 30,
    items: 1, 
    loop:true,
    autoplay:true,
    dots: true,
    animateIn: 'fadeIn', // add this
    animateOut: 'fadeOut', // and this
    mouseDrag: false
});

$showMenu = false;
$('.menu-btn').on('click', function(){
   if(!$showMenu){
       $('.menu-btn-burger').addClass('open');
       $('.navigation').addClass('open');
       $('.menu-nav').addClass('open');
       $('.nav-sp').addClass('open');
       $('.nav-num').addClass('open');
    //    $('.menu-nav-item').each(function(){
    //        $(this).addClass('open');
    //    });
       $showMenu = true;
   } else {
       $('.menu-btn-burger').removeClass('open');
       $('.menu-nav').removeClass('open');
       $('.navigation').removeClass('open');
       $('.nav-sp').removeClass('open');
       $('.nav-num').removeClass('open');
    //    $('.menu-nav-item').each(function(){
    //        $(this).removeClass('open');
    //    });
       $showMenu = false;
   }
});

$('.menu-closing').on('click', function(){
        $('.menu-btn-burger').removeClass('open');
        $('.menu-nav').removeClass('open');
        $('.navigation').removeClass('open');
        $('.nav-sp').removeClass('open');
        $('.nav-num').removeClass('open');
 });
    //  $('.lp-concept .content .images .container img::after').height($('.lp-concept .content .images .container img').height());
    //  var sectionHeight = $('.lp-concept .content .images .container img').height();
    //  console.log(sectionHeight)
    //  $('<style>.lp-concept .content .images .container img::after {height: ' + sectionHeight + 'px;}</style>').appendTo('head');
})

