<!DOCTYPE html>
<html lang="pt">
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Codesistem</title>
  <meta charset="utf-8">
  <meta NAME="DESCRIPTION" CONTENT="Mardonis Alves Bezerra Analista e Desenvovlvedor web Desenvolvimento de sistemas para web, sistemas Responsivos.">
  <meta NAME="ABSTRACT" CONTENT="">
  <meta name="Robots" content="INDEX,FOLLOW"> 
  <meta NAME="KEYWORDS" CONTENT="Codsitem,Mardonis,Alves,Bezerra ,codsytem.com.br,Responsividade,otimização,qualidade,sistemas,web,moveis,dispositivos">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
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
  
<body ng-app="" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<div ng-include="'./template/navbar.html'"></div>
<div ng-include="'./template/caroucel.html'"></div>
<div ng-include="'./template/section_barnd.html'"></div>
<div ng-include="'./template/servico.html'"></div>
<div ng-include="'./template/tour.html'"></div>
<div ng-include="'./template/contact.html'"></div>
<div ng-include="'./template/login.html'"></div>
<div ng-include="'./template/footer.html'"></div>

</body>
</html>
