<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello Nellie | Thanks a Bunch!</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="fontello/css/fontello.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="bxslider/jquery.bxslider.min.js"></script>

<link href="bxslider/jquery.bxslider.css" rel="stylesheet" />
<!---menu animation-->
<script>
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
</script>
<!---smooth scroll--->
<script>
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
</script>
<!---header slider-->
<script>
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

    if(height < 350) {
        $('#home #navigation').css('background-color','transparent');
    }

	else{
		$('#home #navigation').css('background-color','rgba(255,255,255,.98)');
	}

});

  <!---contact form-->
  $('#send').click( function(){

			//finds all the spans in the contact form and removes them//
			$('#name').css('background-color','transparent');
			$('#email').css('background-color','transparent');
			$('#message').css('background-color','transparent');
			$('#check').css('background-color','transparent');

			//Validate
			if ( $('#name').val() == ''){
				$('#name').focus();
				$('#name').css('background-color','#e8afaf');
				return false; //don't submit the form!
			}

			if ($('#email').val() ==''){
				$('#email').focus();
				$('#email').css('background-color','#e8afaf');
				return false;
			}

			if ($('#message').val() ==''){
				$('#message').focus();
				$('#message').css('background-color','#e8afaf');
				return false;
			}

			if ($('#check').val() != 4){
				$('#check').focus();
				$('#check').css('background-color','#e8afaf');
				return false;
			}

			else{
				$('#contact-form').submit();
				alert('Thanks, your message sent successfully!');
			}
		});

});
</script>
</head>

<body id="home">

	<div id="container" id="top">
    	<?php include 'navigation.php'; ?>

        <article id="thanks" style="width:80%; max-width: 580px; margin: 282px auto; text-align:center;">
        <h1>Thanks a Bunch</h1>
        <p>Thanks for getting in touch. I'll return the favor as soon as I can!</p>
       <a href="index.php" style="color:white; text-decoration:none;"><button style="max-width: 300px; margin-top: 20px;" class="send" id="go-home" name="go-home">Let's Go Back Home</button></a>
        </article>
                
    </div>

</body>
</html>
