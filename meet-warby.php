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
</style></head>

<body>

	<div id="container">
    	<?php include 'navigation.php'; ?>

        <section id="proj-body">
            <a href="jai-faim.php"><span class="icon-angle-left"></span></a>
                <article id="project">
                    <h1>Meet Warby Parker &nbsp;</h1><h1 class="light">| &nbsp;Corporate Publication</h1>

                    <p>As a company that does so much good in the world, Warby Parker Eyewear is always looking to spread the word that you can be a part of change, even if it is as simple as buying new glasses. This set of educational booklets helps vision centers get to know the company behind the eyeglasses. The package contains booklets about the company, their global impact, and their process for creating exceptional and affordable frames. Customers can also take away bookmarks to remind them of the frames that are the right fit for them. As an added bonus, each folder comes with a sneak peak of the current season’s line up of eyeglass frames that are sure to be the focus of any eyewear distributor’s showroom.</p>

                    <img src="images/wp-line.jpg">
                    <img src="images/wp-bookmarks.jpg">

                </article>
        </section>

        <?php include 'footer.php'; ?>
    </div>

</body>
</html>
