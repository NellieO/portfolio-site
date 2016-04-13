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
</script>

<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
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
            <a href="yir.php"><span class="icon-angle-left"></span></a>
            <a href="sweet-bean.php"><span class="icon-angle-right"></span></a>
                <article id="project">
                    <h1>Tales of the Jazz &nbsp;</h1><h1 class="light">| &nbsp;Branding</h1>

                    <p>Due to the sudden interest in 1920s culture, this exhibit brings the roaring ‘20s back to life with a close look at the life of the iconic writer of the time, F. Scott Fitzgerald. Decked out in the glamour of art deco, the exhibit would feature music, clothing, and entertainment from the life of Fitzgerald and give museum-goers the inside scoop on the troubled writers life. Visitors can then take a piece of the exhibit home with limited edition gifts from the Fitzgerald pop-up shop. Can’t get enough 1920s? The museum’s iPad app keeps the party going, even after museum hours.</p>

                    <img src="images/fitz-logo.jpg">
                    <img src="images/fitz-line.jpg">
                    <img src="images/fitz-detail.jpg">
                    <img src="images/fitz-ipad.jpg">

                </article>
        </section>

        <?php include 'footer.php'; ?>
    </div>

</body>
</html>
