<?php
	session_start();
	function validateDir() {
  	if(!isset($_SESSION['id'])) {
  		
  		throw new Exception(header('Location: ../../index.php'));
  }
  return true;   // Retuna verdadeiro se o User estiver autenticado
}


try {
  validateDir();  //  Testa a Funçao 
  
  //echo 'Ola seja bem vindo a Plataforma';
}

catch(Exception $e) { // exibe a menssagem se tudo estiver ok
  echo 'Message: ' .$e->getMessage();
}
?> 
<!DOCTYPE html>
<html lang="pt">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</head>
  
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">



<?php 
  include_once("navbarAdmin.php");

?>
<p>
<br><br>
</body>
</html>



