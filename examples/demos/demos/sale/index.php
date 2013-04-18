<!doctype html>
<!-- Conditional comment for mobile ie7 blogs.msdn.com/b/iemobile/ -->
<!--[if IEMobile 7 ]>    <html class="no-js iem7" lang="en"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8">

  <title>Kroma demos</title>
  
  <!-- Metatags
  ================================================== -->
  <meta name="keywords" content="">
  <meta name="description" content="Mobile landingpage demos from Kroma">
  <meta name="author" content="Kroma AS">
  <meta name="web_author" content="Kroma AS">
  <meta name="copyright" content="Copyright 2012. All Rights Reserved.">
  
  <!-- Dublin Core Metadata -->
  <meta name="DC.title" content="Project Name">
  <meta name="DC.subject" content="What you're about.">
  <meta name="DC.creator" content="Kroma AS">

  <!-- Mobile viewport optimization h5bp.com/ad -->
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

  <!-- Home screen icon  Mathias Bynens mathiasbynens.be/notes/touch-icons -->
  <!-- For iPhone 4 with high-resolution Retina display: -->
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/h/apple-touch-icon.png">
  <!-- For first-generation iPad: -->
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/m/apple-touch-icon.png">
  <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
   <link rel="apple-touch-icon-precomposed" href="img/l/apple-touch-icon-precomposed.png">
  <!-- For nokia devices: -->
   <link rel="shortcut icon" href="img/l/apple-touch-icon.png">

  <!-- iOS web app, delete if not needed. https://github.com/h5bp/mobile-boilerplate/issues/94 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <script>(function(){var a;if(navigator.platform==="iPad"){a=window.orientation!==90||window.orientation===-90?"img/startup-tablet-landscape.png":"img/startup-tablet-portrait.png"}else{a=window.devicePixelRatio===2?"img/startup-retina.png":"img/startup.png"}document.write('<link rel="apple-touch-startup-image" href="'+a+'"/>')})()</script>
  
  <!-- The script prevents links from opening in mobile safari. https://gist.github.com/1042026 -->
  <!--<script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>-->
  
  <!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
  <meta http-equiv="cleartype" content="on">

  <!-- more tags for your 'head' to consider h5bp.com/d/head-Tips -->

  <!-- JavaScript -->

  <!-- Detect featured functions in browsers -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>

  <!-- jQuery mobile css, put first before jquery js files -->
  <link rel="stylesheet" href="css/jquery.mobile-1.1.0.css">
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->

  <script src="js/libs/jquery-1.7.1.min.js"></script>

  <!-- jQuery mobile, put the css above the usual jquery file -->
  <script src="js/libs/jquery.mobile-1.1.0.min.js"></script>

  <!-- scripts concatenated and minified via ant build script-->
  <!-- <script src="js/helper.js"></script> -->

  <!-- jquery live tester for auto refresh of page when developing -->
  <!-- NOTE! REMOVE ON PRDUCTION -->
  <!-- <script src="js/live.js" type="text/javascript"></script>-->

  <!-- end scripts-->

  <!-- Stuff for the counter -->
  <!-- Read about the counter at http://keith-wood.name/countdown.html -->
    <link rel="stylesheet" href="modules/counter/counter.css">
	<script type="text/javascript" src="modules/counter/jquery.countdown.js"></script>
	<script type="text/javascript" src="modules/counter/jquery.countdown-nb.js"></script>
	<script type="text/javascript">
		$(function () {
			var austDay = new Date();
			austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
			$('#defaultCountdown').countdown({until: austDay});
//			$('#year').text(austDay.getFullYear());
		});
	</script>

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/movie.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

<!--
==========================================================================
  MAIN PAGE
==========================================================================
-->
  <div id="mainpage" data-role="page">
  
  	<div class="header">
  		<div class="inner">
  			<header>
  				<a href="#mainpage" data-transition="slide" data-direction="reverse">
  					<img class="logo" src="img/gfx/logo.png" />
  				</a>
  			</header>
  		</div>
  	</div>

    <div class="maincontent">
      <div class="inner">
      	<div class="image">
  			<img src="img/gfx/photo@2x.jpg" alt="Photo" />
      	</div>
        <article data-role="content" class="content">
          <h1>Skydiving tilbud tilgjengelig</h1>
      	  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor est vitae ipsum elementum ac auctor dolor sagittis. Curabitur pellentesque fermentum leo a euismod.</p>
        </article>
        <div class="counter">
        	<div id="defaultCountdown"></div>
        </div>
      </div>
    </div>
    
    <div class="links">
    	<div class="inner">
            <nav>
              <a href="#" data-role="button" data-theme="a" class="left" rel="external">Kj&oslash;p billeter n&aring;</a>
              <a href="http://www.visitvoss.no" data-role="button" data-theme="a" class="left" rel="external">Visitvoss.no</a>
            </nav>
        </div>
    </div>
    
	<div class="footer" data-role="content">
		<div class="inner">
			<footer data-role="content" class="small">
				<p>Voss &copy; 2012 - <a href="#">Disclaimer</a></p>
			</footer>
		</div>
	</div>
	
	<!--  Go back to demo overview  -->
	<?php include('../../inc/getcookie.php'); ?>
    
  </div>
<!-- end Main page -->

	<!-- <script src="js/main.js"></script> -->
	<!-- Checks if there are high resulution images available with the "@2" Apple's selector -->
	<script src="js/retina.js"></script>

  <!-- Debugger - remove for production -->
  <!-- <script src="https://getfirebug.com/firebug-lite.js"></script> -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <!--<script>
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>-->

</body>
</html>