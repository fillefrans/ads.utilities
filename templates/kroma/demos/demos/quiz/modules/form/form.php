<!--
==========================================================================
  FORUM PAGE
==========================================================================
-->
  <div id="form" data-role="page">
  
  	<?php include('inc/header.html'); ?>
    
    <div class="maincontent">
      <div class="inner">
        <article data-role="content" class="content">
          <h1>Bestill NKI studiekatalog her</h1>
      	  <p>Vi sender deg katalogen i posten i l&oslash;pet av noen f&aring; dager.</p>
      	    
      	  <span style="color:red;">
      	      <?php
      	        print $themessage;
      	      ?>
      	  </span>
      	  
      	  <form action="index.php" method="post" data-ajax="false">
      	  
	      	  <input type="hidden" name="sent" value="true">
	      	  
	      	  <label for="basic">Navn</label>
	      	  <input type="text" name="name" value="<?php if(!empty($_POST['name'])) { print $_POST['name']; } ?>" id="basic" placeholder="Fornavn Etternavn" />
	      	  <label for="basic">Adresse</label>
	      	  <input type="text" name="address" value="<?php if(!empty($_POST['name'])) { print $_POST['address']; } ?>" id="basic" placeholder="Gatenavn 1, 0195 Oslo" />
	      	  <label for="basic">Telefon</label>
	      	  <input type="tel" name="telephone" value="<?php if(!empty($_POST['name'])) { print $_POST['telephone']; } ?>" id="basic" placeholder="00-00-00-00" />
	      	  <label for="basic">E-post</label>
	      	  <input type="email" name="email" value="<?php if(!empty($_POST['name'])) { print $_POST['email']; } ?>" id="basic" placeholder="eksempel@gmail.com" />
	      	  <input type="submit" name="Send" value="Bestill katalog" data-theme="a" />
      	  
      	  </form>
      	  
        </article>
      </div>
    </div>
    
    <?php include('inc/footer.html'); ?>
    
  </div>
<!-- end forum page -->


<!-- Support php code 
     for after submitting the form to validate 
     the input to and sending it to the correct address and database -->
<?php
  include('serverscripts/sendFormMail.php');
?>

<!-- Support javascript code 
     for after submitting the form to redirect 
     the user to the correct page -->
<script type="text/javascript">
var sentForm = <?php echo $sentForm; ?>;
//jQuery mobile doc ready, the right way
$('#mainpage').bind('pageinit', function(){
	if(sentForm) {
		$.mobile.changePage('#form','slide',false,true);
	}
});
</script>