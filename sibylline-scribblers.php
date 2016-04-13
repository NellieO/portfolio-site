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
            <a href="sweet-bean.php"><span class="icon-angle-left"></span></a>
            <a href="chrysalis.php"><span class="icon-angle-right"></span></a>
                <article id="project">
                    <h1>Sibylline Scribblers &nbsp;</h1><h1 class="light">| &nbsp;Letterhead</h1>

                    <p>Fueled by an endless demand for Chinese takeout, and the ensuing disappointment of a stale fortune cookie, Sibylline Scribblers revamps the fortune writing industry with enlightening and quirky divinations. Their letterhead system reflects their unconventional, albeit creative approach to writing as well as their appreciation for all things Zen. Keeping design clean and
neat leaves more room for what really matters–what’s in the cookie. With so much room to communicate, any correspondence from this fortune writing collective is sure to be an enlightening one.</p>


                    <img class="ss" src="images/scribblers-logo.jpg">
                    <img src="images/scribblers-letterhead.jpg">

                    <h1>Development</h1>

                    <img src="images/scribblers-dev.jpg">
                    <img src="images/scribblers-dev2.jpg">
                    <img src="images/scribbler-dev3.jpg">
                    <img src="images/scribblers-dev4.jpg">
                    <img src="images/scribblers-dev5.jpg">

                </article>
        </section>

        <?php include 'footer.php'; ?>
    </div>

</body>
</html>
