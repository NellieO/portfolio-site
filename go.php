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
            <a href="sibylline-scribblers.php"><span class="icon-angle-left"></span></a>
            <a href="kucd.php"><span class="icon-angle-right"></span></a>
                <article id="project">
                    <h1>GO Magazine &nbsp;</h1><h1 class="light">| &nbsp;Editorial Design</h1>

                    <p>GO Magazine has everything you need to quench a thirst for adventure. Featuring all the essentials from packing lists to
must-see destinations, this quarterly publication features a different country in each issue and promises stunning photography to boot. GO was designed with usability in mind and the clean typography and layout showcase the true beauty of each featured location. Each article is a tribute to the unique cultures found across the globe.</p>

										<div id="share-buttons">
											<!-- Facebook -->
											<a href="http://www.facebook.com/sharer.php?u=http://hello-nellie.com/go.php" target="_blank"><img src="images/somacro/facebook.png" alt="Facebook" /></a>

											<!-- Twitter -->
											<a href="http://twitter.com/share?url=http://hello-nellie.com/go.php" target="_blank"><img src="images/somacro/twitter.png" alt="Twitter" /></a>

											<!-- Pinterest -->
											<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><img src="images/somacro/pinterest.png" alt="Pinterest" /></a>
										</div>

                    <img src="images/go.jpg">
                    <img src="images/go-1.jpg">
                    <img src="images/go-2.jpg">
                    <img src="images/go-3.jpg">
                    <img src="images/go-4.jpg">

                    <h1>Development</h1>

                    <img src="images/go-dev1.jpg">
                    <img src="images/go-dev2.jpg">
                    <img src="images/go-dev3.jpg">

                </article>
        </section>

        <?php include 'footer.php'; ?>
    </div>

</body>
</html>
