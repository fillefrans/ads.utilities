

<?php

$location = $_GET["location"];

?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="initial-scale=1.0" />
	<script type="text/javascript" 
					src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js">
	</script>

	<script type="text/javascript" 
	        src="http://maps.google.com/maps/api/js?libraries=geometry&sensor=true">
	</script>

	<script type="text/javascript" src="<?php print $location; ?>.js"></script>
	    
	<style type="text/css">
	  #spinner {text-align: center;}
	  html, body {width: 100%; height: 100%;}
	  body {margin:0; background-color: #E5E3DF;}
	  #map_canvas {width: 100%; height:100%;}
	</style>


</head>
<body>
	<img src="ajax-loader.gif" id="spinner">
	<div id="map_canvas"></div>

</body>
</html>

    

