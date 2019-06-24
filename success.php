<?php
$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
session_start();
if (!isset($_SESSION['email'])) {
header('location: Original Lifestyle Store.php'); }
?>
<!DOCTYPE html>

  <html>
   
<head>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

       <!--jQuery library--> 
        
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
       <!--Latest compiled and minified JavaScript--> 
        
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
     <meta name="viewport" content="width=device-width, initial-scale=1">
        
     <title>Order Confirmed</title>
  
     <link href="style.css" rel="stylesheet">
   </head>
    
   <body>
        
     <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="products.html">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
      <div class="container">
      <div class="jumbotron" id="order">
      <center>
      <h2>Your order is confirmed.</h2>
      </hr>
      <h4><a href="products.php">Click here</a> to purchase any other item.</h4>
      </center>
      </div>
      </div>
  <footer id="foot">
        <div class="container">
            <center>
              <p>Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 98186 16190.</p>
            </center>
        </div>
    </footer>
  </body>

</html>

        