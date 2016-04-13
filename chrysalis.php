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
            <a href="sibylline-scribblers.php"><span class="icon-angle-left"></span></a>
            <a href="kucd.php"><span class="icon-angle-right"></span></a>
                <article id="project">
                    <h1>Chrysalis Web App&nbsp;</h1><h1 class="light">| &nbsp;UI/UX</h1>

                    <p>One of the most universal problems plaguing projects everywhere is scope creep. Chrysalis is a web app seeking to tame scope creep and give the control back to the client and their providers. The software enables all sides to keep track of a project from a broad scope all the way down to the minute details, notifying the team of proposed changes. Communication is the key to any successful relationship and Chrysalis clears the way for a more collaborative and stress-free client/provider relationship.</p>


                    <img src="images/chrysalis-responsive.jpg"/>

                </article>
        </section>

        <?php include 'footer.php'; ?>
    </div>

</body>
</html>
