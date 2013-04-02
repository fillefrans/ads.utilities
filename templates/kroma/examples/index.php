<!--
  ==========================================================================
.................................  www.kroma.no   ..............................
................................................................................
                                                                                 
DDDD    DDDD    DDDDDDDDDDDD     DDDDDDDDDDDDD  .DDDDDDDDDDDDDD.  DDDDDDDDDDDDD.
DDDD    DDDD    DDDDDDDDDDDD     DDDDDDDDDDDDD  .DDDDDDDDDDDDDD.  DDDDDDDDDDDDD.
DDDD    DDDD    DDDD    DDDD     DDDD..... DDD  .DDD=.DDDN.ZDDD.  DDDD     DDDD.
DDDDDDDDDDDDDD..DDDDDDDDDDDDDDI. DDDN..... DDD ..DDD=.DDDD.ZDDD.. DDDDDDDDDDDDD.
DDDDDDDDDDDDDD..DDDDDDDDDDDDDDI. DDDN..... DDD ..DDD=.DDDD.ZDDD.. DDDDDDDDDDDDD.
DDDD      DDDD  DDDD.......DDDI. DDDN.     DDD  .DDD= DDDD ZDDD.  DDDN     DDDD.
DDDD     .DDDD  DDDD       DDDI. DDDDDDDDDDDDD  .DDD= DDDD ZDDD.  DDDD     NDDD.
DDDD     .DDDD  DDDD       DDDI  DDDDDDDDDDDDD  .DDD= DDDD ZDDD. .DDDD     NDDD.
                                                                                
................................................................................
.................................  www.kroma.no   ..............................

   Kroma Mobile Pages rev1
   This page is done with best practice, using Mobile Boilerplate as base.
   Author: Eduardo, ed(a)kroma.no
   Version 0.9
   2012-04-09
   
   Licence: Do what ever you want, just give some cred if you feel for that.
   
   LINKS:
   - Roles settings: http://www.w3.org/1999/xhtml/vocab/#XHTMLRoleVocabulary
   - Theming JQuery buttons: http://jquerymobile.com/themeroller/
   
  ==========================================================================
-->

<?php

//TOPP
  if(isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = "main";

  }
include('views/top.php');

//MAIN
  switch ($page) {
  
    case "form":
      include('views/form.php');
      break;
    case "formadexample":
      include('views/form_adexmple.php');
      break;
    case "video":
      include('views/video.php');
      break;
    case "audio":
      include('views/audio.php');
      break;
    case "simpleslider":
      include('views/simpleslider.php');
      break;
    case "advancedslider":
      include('views/advancedslider.php');
      break;
    case "about":
      include('views/about.php');
      break;
    case "main":
      include('views/main.php');
      break;
    case "stastics":
      include('views/statistics.php');
      break;
    case "geolocation":
      include('views/geolocation.php');
      break;
      
    default:
      break;
  
  }

//BOTTOM
include('views/bottom.php');

?>
