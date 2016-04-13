<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello Nellie | Print and Web Design</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Nellie Ortiz is a UI/UX Designer currently residing in Bethlehem, PA.">
<meta name="author" content="Nellie Ortiz">

<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="fontello/css/fontello.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="style.css" rel="stylesheet" type="text/css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="bxslider/jquery.bxslider.min.js"></script>

<link href="bxslider/jquery.bxslider.css" rel="stylesheet" />
<link rel="shortcut icon" href="images/logo.ico" />
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

<script>
$(function() {
  $('a.back-to-top').click(function() {
    $('html,body').animate({
      scrollTop:0
    }, 1000);
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
</script>
</head>

<body id="home">

	<div id="container" id="top">
    	<?php include 'navigation.php'; ?>
        <header class="test-header">
            <article id="intro">
                <h2>nellie ortiz</h2>

                <ul class="bxslider">
                  <li><h2 class="secondary"> is a UI/UX Designer.</h2></li>
                  <li><h2 class="secondary"> is a bookworm.</h2></li>
                  <li><h2 class="secondary"> is a Kutztown University Graduate.</h2></li>
                  <li><h2 class="secondary"> is a tea enthusiast.</h2></li>
                  <li><h2 class="secondary"> is passionate about user experience.</h2></li>
				</ul>

            </article>

        </header>


        <article id="portfolio">
        	<h1 id="portfoliosection">Work</h1>

					<a href="yir.php"><div class="port-item yir-thumb">
						<div class="caption">
							<span>KDG Annual Review</span><br/>
							<span class="tags">editorial design</span>
						</div>
		</div>
					</a>


            <a href="fitz.php"><div class="port-item fitz-thumb">
							<div class="caption">
            		<span>Tales of the Jazz Age</span><br/>
								<span class="tags">branding</span>
							</div>
			</div>
            </a>

            <a href="sweet-bean.php"><div class="port-item sb-thumb">
							<div class="caption">
            		<span>Sweet Bean Packaging</span><br/>
								<span class="tags">package design</span>
							</div>
			</div>
            </a>


            <a href="sibylline-scribblers.php"><div class="port-item ss-thumb">
							<div class="caption">
            		<span>Sibylline Scribbler's</span><br/>
								<span class="tags">branding</span>
							</div>
			</div>
            </a>

						<a href="chrysalis.php"><div class="port-item chrysalis-thumb">
							<div class="caption">
								<span>Crysalis Web App</span><br/>
								<span class="tags">interface design</span>
							</div>
			</div>
						</a>


            <a href="kucd.php"><div class="port-item kucd-thumb">
							<div class="caption">
            		<span>KUCD Site Redesign</span><br/>
								<span class="tags">interface design</span>
							</div>
			</div>
            </a>

            <a href="jai-faim.php"><div class="port-item jf-thumb">
							<div class="caption">
            		<span>J'ai Faim</span> <br>
								<span class="tags">interface design</span>
							</div>
            </div>
            </a>

            <a href="meet-warby.php"><div class="port-item mw-thumb">
							<div class="caption">
            		<span>Meet Warby Parker</span><br/>
								<span class="tags">editorial design</span>
							</div>
			</div>
            </a>

            <div class="clear"></div>
        </article>


        <article id="about">
        	<h1 id="aboutsection">About</h1>

            <aside id="photo">
            	<img src="images/nellie_ortiz.png">
            </aside>

           <aside id="aboutme">
            	<p>I am a user interface designer living in the little town of Bethlehem, PA. I enjoy many aspects of my design career, especially illustration and user interface design, and I am always looking to learn new things. Aside from design, I enjoy good books, just about any fashion magazine I can get my hands on, and sweet cups of tea.</p>
            </aside>

           <div class="clear"></div>
        </article>


        <article id="contact">
        	<h1 id="contactsection">Say Hello</h1>
        	<p>Drop me a line, I'd love to hear from you at <a href="mailto:nellie@hello-nellie.com">nellie@hello-nellie.com</a>! Resume and references are available upon request.</p>
        </article>

        <?php include 'footer.php'; ?>

    </div>

</body>
</html>
