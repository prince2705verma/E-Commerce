<?php
require("includes/common.php");
?>
<?php if(isset($_SESSION['email'])) {
header('location: products.php'); }?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet">

        <title>Lifestyle Store</title>
    </head>
    <body>
       <?php require 'includes/head.php';?>
        <div id="banner-image">
           <div class="container">
              <center>
              <div id="banner-content">
                 <h1>We sell lifestyle.</h1>
                 <p>Flat 40% OFF on Premium brands</p>
                 <a href="login.php" class="btn btn-danger btn-lg active">Shop Now</a>
              </div>
              </center>
           </div>
        </div>
        <?php require 'includes/footer.php';?>
    </body>
</html>