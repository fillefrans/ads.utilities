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

  <!-- Main Stylesheet -->
  <!-- To change the default Kroma themeroller style follow the below link -->
  <!-- http://jquerymobile.com/themeroller/?ver=1.1.1&style_id=20120803-50 -->
  <link rel="stylesheet" href="css/kroma.min.css">
  <link rel="stylesheet" href="css/style.css">
  
  <!-- Add 2 homescreen popup -->
  <link rel="stylesheet" href="css/add2home.css">
  <script type="text/javascript" src="js/add2home.js" charset="utf-8"></script>

</head>

<body>

<!-- Set Cookie for the back button -->
<?php include('inc/setcookie.php'); ?>

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
  					<img class="logo" src="img/gfx/logo.png" width="110.5" height="51.5" />
  				</a>
  			</header>
  		</div>
  	</div>

    <div class="maincontent">
      <div class="inner">
        <article data-role="content" class="content">
          <h1>Mobile landingsider</h1>
        	  <p>Mobilnettverket til Kroma gj&oslash;r det enkelt &aring; benytte en mobil plattform i mediemixen. Denne applikasjonen gir forslag til kreative og enkle produksjoner for mobil. Kontakt oss for et konkret tilbud p&aring; annonsering og produksjon.</p>
			<nav>
				<a href="demos/movie/index.php" data-role="button" data-theme="a" rel="external">Movie landingpage</a>
				<a href="demos/testdrive/index.php" data-role="button" data-theme="a" rel="external">Testdrive landingpage</a>
				<a href="demos/newstore/index.php" data-role="button" data-theme="a" rel="external">New store landingpage</a>
				<a href="demos/quiz/index.php" data-role="button" data-theme="a" rel="external">Quiz landingpage</a>
				<a href="demos/sale/index.php" data-role="button" data-theme="a" rel="external">Sale landingpage</a>
			</nav>
        </article>
      </div>
    </div>
    
    <div class="links">
    	<div class="inner">
	    	<section data-role="content" class="content">
	    	  <h1>Real casestudies</h1>
	    		  <p>Short intro text.</p>
	    		<nav>
	    			<a href="http://mobil.kroma.no/kollen/f/index.php" data-role="button" data-theme="b" rel="external">VIP invite Kollenfest (Friday)</a>
	    			<a href="http://mobil.kroma.no/kontiki/index.php" data-role="button" data-theme="b" rel="external">Kon Tiki quiz (Webapp)</a>
	    			<a href="http://mobil.kroma.no/vila/index.php" data-role="button" data-theme="b" rel="external">Vila coupon</a>
	    			<a href="http://mobil.kroma.no/nki/index.php" data-role="button" data-theme="b" rel="external">NKI netstudies</a>
	    			<a href="http://mobil.kroma.no/dollydimples/index.php" data-role="button" data-theme="b" rel="external">Dolly Dimple's</a>
	    			<a href="http://mobil.kroma.no/santamaria/index.php" data-role="button" data-theme="b" rel="external">Santa Maria</a>
	    		</nav>
	    	</section>
        </div>
    </div>
    
	<div class="footer" data-role="content">
		<div class="inner">
			<footer data-role="content" class="small">
			  <h1>For more information</h1>
			    <nav>
			      <a href="tel:+47 90 61 01 61" data-role="button" data-theme="c" class="left">Ring oss</a>
			      <a href="mailto:post@kroma.no?SUBJECT=Kontakt meg om mobil landingside" data-role="button" data-theme="c" class="left">Mail oss</a>   
			    </nav>
				<p class="clear">Kroma AS &copy; 2012</p>
			</footer>
		</div>
	</div>
    
  </div>
<!-- end Main page -->

	<script src="js/main.js"></script>
	<!-- Checks if there are high resulution images available with the "@2" Apple's selector -->
	<script src="js/retina.js"></script>

  <!-- Debugger - remove for production -->
  <!-- <script src="https://getfirebug.com/firebug-lite.js"></script> -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-34558003-5']);
    _gaq.push(['_trackPageview']);
  
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>

</body>
</html>