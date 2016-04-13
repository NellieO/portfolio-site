<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello Nellie | Portfolio</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="fontello/css/fontello.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link href="style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/logo.ico" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
<!---back to top hide/show-->
$(window).scroll(function() {
	var height = $(window).scrollTop();

	if(height < 310) {
		$('a.back-to-top').css('display','none');
	}

	else{
		$('a.back-to-top').css('display','block');
	}

	if(height < 10) {
		$('#navigation').css('border-bottom','none');
	}

	else{
		$('#navigation').css('border-bottom','5px solid #BFD775');
	}

});
</script>
<!--Share Button Styles-->
<style>
#share-buttons img {
	width: 25px;
	padding: 5px;
	border: 0;
	display: inline;
	margin:0px;
	opacity: .8;
}
#share-buttons img:hover {
	width: 25px;
	padding: 5px;
	border: 0;
	display: inline;
	margin:0px;
	opacity: 1;
}
</style>
</head>

<body>

	<div id="container">
    	<?php include 'navigation.php'; ?>

        <section id="proj-body">
            <a href="sweet-bean.php"><span class="icon-angle-left"></span></a>
            <a href="sibylline-scribblers.php"><span class="icon-angle-right"></span></a>
                <article id="project">
                    <h1>Mama Nina &nbsp;</h1><h1 class="light">| &nbsp;Site Redesign</h1>

                    <p>Mama Nina’s Foccacheria is an authentic Italian restaurant located in historic downtown Bethlehem, PA complete with beautiful Italian décor and an atmosphere that takes you straight to an Italian piazza. Their previous website lacked many of the important tidbits that people look for when searching for a place to eat, such as a menu and hours. This site redesign features a modern Italian design aesthetic as well as all the essential information for prospective customers such as hours of operation, contact information, the full lunch and dinner menu, and directions. The website is also responsive to keep customers on-the-go in mind. Check it out <a href="http://kucdinteractive.com/nortiz/restaurant/">here.</a></p>

										<div id="share-buttons">
											<!-- Facebook -->
											<a href="http://www.facebook.com/sharer.php?u=http://hello-nellie.com/mama-nina.php" target="_blank"><img src="images/somacro/facebook.png" alt="Facebook" /></a>

											<!-- Twitter -->
											<a href="http://twitter.com/share?url=http://hello-nellie.com/mama-nina.php" target="_blank"><img src="images/somacro/twitter.png" alt="Twitter" /></a>

											<!-- Pinterest -->
											<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><img src="images/somacro/pinterest.png" alt="Pinterest" /></a>
										</div>

                    <img src="images/mama-imac.jpg">
                    <img class="ipad" src="images/mama-ipad.jpg">
                    <img class="iphone"src="images/mama-phone.jpg">

                </article>
        </section>

        <?php include 'footer.php'; ?>
    </div>

</body>
</html>
