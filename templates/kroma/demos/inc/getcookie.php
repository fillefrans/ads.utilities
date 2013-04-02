<?php
	/* Get url from main demo page */
	if (!isset($_COOKIE['Kromaclient'])) {
//		$url = ''; // Default page
	?>
	
	<!--<div class="tilbake" data-role="content">
	    <div class="inner">
	    	<footer data-role="content" class="small">
	    	<a href="http://mobil.kroma.no/demos/index<?php print $url; ?>.php" data-role="button" data-theme="c" rel="external">Tilbake</a>
	    	</footer>
	    </div>
	</div>-->
		
	<?php
	} elseif ($_COOKIE['Kromaclient'] == 'kroma') {
	?>
	
	<div class="tilbake" data-role="content">
	    <div class="inner">
	    	<footer data-role="content" class="small">
	    	<a href="http://mobil.kroma.no/demos/index.php" data-role="button" data-theme="c" rel="external">Tilbake</a>
	    	</footer>
	    </div>
	</div>
		
	<?php
	} else {
		$url = '_'.$_COOKIE['Kromaclient'];
	?>
	
	<div class="tilbake" data-role="content">
	    <div class="inner">
	    	<footer data-role="content" class="small">
	    	<a href="http://mobil.kroma.no/demos/index<?php print $url; ?>.php" data-role="button" data-theme="c" rel="external">Tilbake</a>
	    	</footer>
	    </div>
	</div>
	
<?php
	}
?>