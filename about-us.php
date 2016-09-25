<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>About Us</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="styles.css">
    <link href="jumbotron-narrow.css">

    <script src="ie-emulation-modes-warning.js"></script>

   
  </head>

  <body>
  <?php include 'menu.php';
  
	/* top menu to	all	pages in the system using if statement and include*/
    ?>
    <div class="container">
      

      <div class="jumbotron">
        <h1>Who we are &amp; what we do!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Our Story</h4>
          <p>We have a personal interest in the well-being and success of every associate. In PHP you will develop friends for life and find mentors who will work to help you reach your goals.</p>

      </div>
      
      <div class="col-lg-6">
          

      </div>
      
      <hr>

      

    </div> <!-- /container -->
<?php require 'footer.php';
	  
	  /* require function allows the code to include the footer to all pages by placing this line of code to the set pages
	  */
	  
	  ?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
