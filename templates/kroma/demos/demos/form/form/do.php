<?php
$phone=$_GET['mobile'];
$score=$_GET['score'];
$request = "http://annonse.kroma.no/modules/send_form.php?kunde=kontiki&produkt_navn=kontiki-mobile&score=".$score."&mobilenr=".$phone;
       /* I prefer using CURL */
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$request);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

    echo  $response = curl_exec($ch);
	 curl_close ($ch); 
	 
?>