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
            <a href="chrysalis.php"><span class="icon-angle-left"></span></a>
            <a href="jai-faim.php"><span class="icon-angle-right"></span></a>
                <article id="project">
                    <h1>KUCD &nbsp;</h1><h1 class="light">| &nbsp;Site Redesign</h1>

                    <p>Nothing is more important than the image that we project of ourselves to the public, so when the Kutztown University Communication Design Department needed to revamp their website, we wanted to be sure to showcase just how much talent is housed in the Sharadin Arts Building. The site redesign carries the new branding system for the department with bright pops of color and black and white photography. The team of three students and two faculty members reevaluated the content of the website to make the department site even more resourceful for parents, prospective students, and current students alike, while using my design to communicate what KUCD is all about. </p>


                    <img src="images/kucd-imac.jpg">
                    <img class="ipad" src="images/kucd-ipad.jpg">
                    <img class="iphone" src="images/kucd-phone.jpg">

                    <h1>Development</h1>
                    <img src="images/kucd-dev1.jpg">
                    <img src="images/kucd-dev2.jpg">
                    <img src="images/kucd-dev3.jpg">
                    <img src="images/kucd-dev4.jpg">
                    <img src="images/kucd-dev5.jpg">

                </article>
        </section>

        <?php include 'footer.php'; ?>
    </div>

</body>
</html>
