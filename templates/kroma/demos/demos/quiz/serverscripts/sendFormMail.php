<?php

error_reporting(E_ALL);

$test = 'Test';

//Feedback settings
$error_message = "";
$themessage = "";

//Client settings
$kunde = "Nki";
$produkt = "Nki kurs katalog";

//Mail settings
$email_to = 'rk@kroma.no';
$tillbakemelding = "Takk, din informasjon er sendt!";
$mail_template = "mobil.kroma.no/nki";
$email_subject = "Katalog ordre - Bestil Nki kurs katalog";

//Server settings, DB, etc.
$hidden_root="/home/drift/hosts/kroma/common_include";
require("$hidden_root/mysql_connect_kroma_write.php");

//Others
$ip = $_SERVER['REMOTE_ADDR'];

$sentForm = "false";


if(isset($_POST['sent'])) {
	
	$sentForm = "true";
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['address']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone'])) {
        //died('We are sorry, but there appears to be a problem with the form you submitted.');
        $themessage = 'We are sorry, but there appears to be a problem with the form you submitted. Fill in all the details.';
    }

    else {
     
      $name = $_POST['name']; // required
      $address = $_POST['address']; // required
      $email_from = $_POST['email']; // required
      $telephone = $_POST['telephone']; // required
    
          $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
          
          $string_exp = "/^[A-Za-z .'-]+$/";
          
          if(!preg_match($string_exp,$name)) {
            $error_message .= 'Navn er ufullstendig.<br />';
          }
          
          if(!preg_match($string_exp,$address)) {
            $error_message .= 'Adressen er ikke gyldig.<br />';
          }

          if(!preg_match($email_exp,$email_from)) {
            $error_message .= 'E-post adressen er ikke gyldig.<br />';
          }

          if(!is_numeric($telephone)) {
            $error_message .= 'Telefonnummeret er ikke gyldig.<br />';
          }
          
            if(strlen($telephone) < 8) {
              $error_message .= 'Telefonnummeret er for kort.<br />';
            }

          if(strlen($error_message) > 0) {
            $themessage = $error_message;
          }

          else {

                $email_message = "Form details below.\n\n";
                 
                $email_message .= "Name: ".clean_string($name)."\n";
                $email_message .= "Address: ".clean_string($address)."\n";
                $email_message .= "Email: ".clean_string($email_from)."\n";
                $email_message .= "Telephone: ".clean_string($telephone)."\n";
                 
                  // create email headers
                  $headers = 'From: '.$email_from."\r\n".
                  'Reply-To: '.$email_from."\r\n" .
                  'X-Mailer: PHP/' . phpversion();

                    if(mail($email_to, $email_subject, $email_message, $headers)) {
                      //display message
                      $themessage = '<h1 style="color:green;">'.$tillbakemelding.'</h1>';
                      //blob for db
                      $blob = 'fornavn="'.$name.'"&gateadresse="'.$address.'"&epost="'.$email_from.'"&telefon="'.$telephone.'"';
                      //connect db
                      //connect();
                      //send to db
                     
                      newKatalogRegister($kunde, $produkt, $blob, $ip);

                    } else {
                      $themessage = "SEND MAIL FAILED";
                    }
            }

        }
}

function died($error) {
    // your error code can go here
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br /><br />";
    echo $error."<br /><br />";
    echo "Please go back and fix these errors.<br /><br />";
    die();
}

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}


/*
function connect() {

  $connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
    
    if (!$connection)
    {
      die('Could not connect: ' . mysql_error());
    }
  
  $db_select = mysql_select_db(DB_NAME, $connection);
  
  if (!$db_select)
  {
    die("Database selection faild: " . mysql_error());
  } else {
    //test only
    //print "conntected to db";
  }
}
*/

function newKatalogRegister($kunde, $produkt, $blob, $ip) {

  $kunde = "Nki";
  $produkt = "Nki kurs katalog ordre";

  $query = "INSERT into kroma_forms (id, kunde, produkt, text, ip) VALUES('','$kunde','$produkt','$blob','$ip');";

  $result = mysql_query($query);
  checkDBquery($result);
  //print 'STORED TO DATABASE';   
}

function checkDBquery($result) {
  if (!$result) {
      $message  = 'Invalid query: ' . mysql_error() . "\n";
      $message .= 'Whole query: ' . 'ENABLE QUERY VARIABLE';
      die($message);
  }
}



?>
 



