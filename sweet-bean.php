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
$(function() {
  $('a.back-to-top').click(function() {
    $('html,body').animate({
      scrollTop:0
    }, 1000);
  });
});
</script>

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
            <a href="fitz.php"><span class="icon-angle-left"></span></a>
            <a href="sibylline-scribblers.php"><span class="icon-angle-right"></span></a>
                <article id="project">
                    <h1>Sweet Bean &nbsp;</h1><h1 class="light">| &nbsp;Package Design</h1>

                    <p>Ever wonder if the products you use on your body are actually good for you? Sweet Bean aims to create unique products that are literally good enough to eat by using only all natural and organic ingredients like the cocoa bean. Each of these delectable concoctions is packaged in materials that are as natural and earth-friendly as the stuff they’re made of. Bright pops of color emphasize key ingredients like exfoliating brown sugar, refreshing mint, soothing lavender, and fresh strawberries, making
Sweet Bean products as good-looking as they are good for you.</p>


                    <img src="images/sb-line.jpg">
                    <img src="images/sb-detail.jpg">

                </article>
        </section>

        <?php include 'footer.php'; ?>
    </div>

</body>
</html>
