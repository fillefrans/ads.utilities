<!doctype html>
<!-- Conditional comment for mobile ie7 blogs.msdn.com/b/iemobile/ -->
<!--[if IEMobile 7 ]>    <html class="no-js iem7" lang="en"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8">

  <title>KROMA MOBILE TEMPLATES ALL TYPES</title>
  <meta name="description" content="">

  <!-- Mobile viewport tags optimization h5bp.com/ad -->
  <!-- This tells the browser that this page is made for mobile, so mobile optimization of pages is turned off -->
  <!-- Viewport properties, you can use:
    width(divece-width or int representing pixels)
    height(device-height or int represnting pixels)
    initial-scale(sets initial scale default 1.0)
    maximum-scale(range from 0.1 to 10.0)
    minimum-scale(range from 0.1 to 10.0)
    user-scalable(boolean if page is alowed to scale)
  -->
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320"> <!-- Microsoft version, note the width size in px -->
  <meta name="viewport" content="width=device-width, user-scalable='false', width=device-width, initial-scale=1, maximum-scale=1"> <!-- viewport by apple, most used one -->

  <!-- Home screen icon  Mathias Bynens mathiasbynens.be/notes/touch-icons -->
  <!-- For iPhone 4 with high-resolution Retina display: -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/h/apple-touch-icon.png">
  <!-- For first-generation iPad: -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/m/apple-touch-icon.png">
  <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
  <link rel="apple-touch-icon-precomposed" href="img/l/apple-touch-icon-precomposed.png">
  <!-- For nokia devices: -->
  <link rel="shortcut icon" href="img/l/apple-touch-icon.png">
  
  <!-- Enable this to get full size page, like native app -->
  <!-- iOS web app, delete if not needed. https://github.com/h5bp/mobile-boilerplate/issues/94 -->
  <!-- <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black"> -->
  <!-- <script>(function(){var a;if(navigator.platform==="iPad"){a=window.orientation!==90||window.orientation===-90?"img/startup-tablet-landscape.png":"img/startup-tablet-portrait.png"}else{a=window.devicePixelRatio===2?"img/startup-retina.png":"img/startup.png"}document.write('<link rel="apple-touch-startup-image" href="'+a+'"/>')})()</script> -->
  
  <!-- The script prevents links from opening in mobile safari. https://gist.github.com/1042026 -->
  <!-- <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script> -->
  
  <!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
  <meta http-equiv="cleartype" content="on">

  <!-- more tags for your 'head' to consider h5bp.com/d/head-Tips -->

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
    
  

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
  
    <!-- JQuery Mobile Stylesheet and JS -->
    
  <script src="js/jquery-1.7.1.min.js"></script>
  <script src="js/jquery.mobile-1.1.0-rc.2.min.js"></script>
  <link rel="stylesheet" href="css/jquery.mobile-1.1.0-rc.2.css" />
  
  <?php
      /* print("<script type='text/javascript'> alert('" . $page. "'); </script>"); */
  ?>
  
  <!-- SIMPLE Image slider -->
  <!--
 <link rel="stylesheet" type="text/css" href="css/sliderstyle.css">
  <script type="text/javascript" src="js/jquery.sudoSlider.js"></script>
  <script type="text/javascript" src="js/jquery.touchSwipe-1.2.4.js"></script>
  <script type="text/javascript" src="js/goslider.js"></script>
  -->
  <!-- end SIMPLE Image slider -->
  
  
  
</head>

<body>

  <header>
    <?php
	if($page == "main") {
	  include("views/mainheader.php");
	}
	else {
	  include("views/backheader.php");
	}
    ?>
  </header>

  <div id="container">
    
    <!-- In header you can put the logo and main heading -->
    
    
    <!-- Main content -->
    <div id="main" role="main">