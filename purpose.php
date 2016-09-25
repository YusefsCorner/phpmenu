<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Purpose</title>

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
        <h1>What are the wonders, and possibilities of PHP</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Subjects around PHP</h4>
          <p>If you are familiar with the basics of PHP, then you're probably wondering how you can use it to make your website more appealing. The possibilities are endless, and you can write your own PHP scripts or implement widely available scripts from around the web.</p>

        
        </div>

        <div class="col-lg-6">
          <img src="resources/php2.png" alt="php" style="height:250px" width="500px">
      </div>
      
      <hr>

      <?php require 'footer.php';
	  
	  /* require function allows the code to include the footer to all pages by placing this line of code to the set pages
	  */
	  
	  ?>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

