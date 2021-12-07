var slideControl = 0;
var menuSize = -200;//menu width
var menuSize2 = 200;//menu width

$(document).ready(function(){
	// MENU CODE 1
	// SHOW HEADER CODE
	$('.header').slideDown('slow');
  $('.menu').css({width: menuSize2});


// ABOUT PAGE CODE
  // ABOUT PAGE INTRO
  $('.a1').fadeIn(8000);
  $('.a2').fadeIn(8000);
  $('.intro_text').fadeIn(8000);
  $('.get-in-touch').fadeIn(8000);
  
  $('.a1').click(function(){
  	// $('.about_wrapper').fadeOut('slow'), $('.about_content').fadeIn('slow');
  	 $('html,body').animate({
      scrollTop: $(".about_content").offset().top
    },2000);
  });

// SMOONTH SCROL 
 // JS CODES TO SCROLL TO PAGE
  $('.pointer').click(function(){
    $('html,body').animate({
      scrollTop: $(".page").offset().top
    },2000);
  });

 // JS CODES TO SCROLL FOR SERVICES
  $('.service_link').click(function(){
  	$(".service_page").show();
    $('html,body').animate({
      scrollTop: $(".service_page").offset().top
    },2000);
     $(".service_page2").fadeOut('slow');
  });

 $('.service_link2').click(function(){
    $(".service_page2").show();
     $(".service_page").fadeOut('slow');
    $('html,body').animate({
      scrollTop: $(".service_page2").offset().top
    },2000);
    
  });

// JS CODE TO HIDE SERVES PAGE
$('.service_page .fa-close').click(function(){
	// alert('s');
	
	 $('html,body').animate({
      scrollTop: $(".content").offset().top
    },2000);
   $(".menu").hide();
   $(".service_page").fadeOut('slow');
    $(".service_page2").fadeOut('slow');
    // $(".menu").show();
});

$('.service_page2 .fa-close').click(function(){
  // alert('s');
  
   $('html,body').animate({
      scrollTop: $(".content").offset().top
    },2000);
   $(".menu").hide();
    $(".service_page").fadeOut('slow');
   $(".service_page2").fadeOut('slow');
    // $(".menu").show();
});

$('.about_company').owlCarousel({
   
     loop:true,
    autoplay: true,
    stagePadding: 7,
    margin: 20,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav: false,
    autoplayHoverPause: true,
    items: 4,
    navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
    responsive:{
      0:{
        items:1,
        nav:true
      },
      600:{
        items:3,
        nav:false
      },
      1000:{
        items:4,
        nav:true,
      }
    }

   
});

// $('.about_company').owlCarousel({
//       center: false,
//       items: 1,
//       loop: false,
//       stagePadding: 0,
//       margin: 20,
//       nav: true,
//       navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
//       responsive:{
//         600:{
//           margin: 20,
//           stagePadding: 10,
//           items: 2
//         },
//         1000:{
//           margin: 20,
//           stagePadding: 150,
//           items: 2
//         },
//         1200:{
//           margin: 20,
//           stagePadding: 150,
//           items: 3
//         }
//       }
//     });



});

// MENU CODE 2
$('.fa-bars').click( function(){
  $(".menu").show();
  if(slideControl < 1){
    $('.content').animate({left: menuSize});
    slideControl = 1;
  }else{
    $('.content').animate({left: 0});
    slideControl = 0;
  }




// SCRIPT FOR CONTACT
$( '.js-input' ).keyup(function() {
  if( $(this).val() ) {
     $(this).addClass('not-empty');
  } else {
     $(this).removeClass('not-empty');
  }
});
});




