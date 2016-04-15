/**
 *JS fun for hello-nellie.com
 */
 <!---menu animation-->
 $(document).ready(function(){
 	$('.icon-menu').click(function(){
 		$( "#mobile-nav" ).animate({
 			down: "+=50",
 			height: "toggle"
 		  }, 480, function() {
 			// Animation complete.
 		  });
 	});
 });

 <!---smooth scroll--->
 $(function() {
   $('a[href*=#]:not([href=#])').click(function() {
     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
       var target = $(this.hash);
       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
       if (target.length) {
         $('html,body').animate({
           scrollTop: target.offset().top-111
         }, 1000);
         return false;
       }
     }
   });
 });


 $(function() {
   $('a.back-to-top').click(function() {
     $('html,body').animate({
       scrollTop:0
     }, 1000);
   });
 });


 <!---header slider-->
 $(document).ready(function(){
   $('.bxslider').bxSlider({
 	  mode:'fade',
 	  speed:500,
 	  pause:5000,
 	  controls:false,
 	  pager:false,
 	  auto:true,

   });

   <!---navigation shenanigans-->
   $(window).scroll(function() {
     var height = $(window).scrollTop();

     if(height < 310) {
         $('#home #navigation').css('background-color','transparent');
 				$('#home #navigation').css('border-bottom','none');
 				$('#home #navigation h5 a').css('color','#999999');
 				$('a.back-to-top').css('display','none');

     }

 	else{
 		$('#home #navigation').css('background-color','rgba(255,255,255,.98)');
 		$('#home #navigation').css('border-bottom','5px solid #BFD775');
 		$('#home #navigation h5 a').css('color','#999999');
 		$('a.back-to-top').css('display','block');

 	}

 });


 });
