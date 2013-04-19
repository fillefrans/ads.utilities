<?php

	// Report all PHP errors (see changelog)
//	error_reporting(E_ALL);

	/* Get url from main demo page */
	if (!isset($client)) {
		$client = 'kroma'; // Default demo page
	} else {
		$client = $client;
	}
	
	setcookie('Kromaclient', $client, time()+7200, "/", "mobil.kroma.no");  /* expire in 2 hour */
?>