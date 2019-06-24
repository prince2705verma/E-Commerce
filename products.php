<?php
$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
session_start();?>
<!DOCTYPE html>

  <html>
   
<head>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

       <!--jQuery library--> 
        
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
       <!--Latest compiled and minified JavaScript--> 
        
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
     <meta name="viewport" content="width=device-width, initial-scale=1">
        
     <title>Welcome | Lifestyle Store</title>
  
     <link href="style.css" rel="stylesheet">
   </head>
    
   <body id="colo">
        
     <?php include 'includes/head.php';
	       include 'check-if-added.php'; 
	 ?>
       <div class="container">
          <div class="jumbotron">
            <center>
            <h1> <b>Welcome to our Lifestyle Store!</b></h1>
            <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </center>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="New folder/camera2.jpg" alt="nikon camera">
                 <center>
                   <div class="caption">
                     <h3>Fujifilm X-T30</h3>
                     <h4> Price: Rs. 35000</h4>
					<?php     
			        if(isset($_SESSION['email'])) {                     
			        ?>
					<?php
					if(check_if_added_to_cart(1)){?>
					<p><a href="#" role="button" class="btn btn-success btn-block" disabled >Added to cart</a></p>
					<?php
					} else {?>
					<p><a href="cart-add.php?id=1" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
			        <?php
			        } }else {                     
			        ?>
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>					
			        <?php                     
			        }                     
			        ?>
					 </div>
                 <center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="New folder/sony.jpg" alt="sony camera">
                  <center>
                   <div class="caption">
                     <h3>Sony T-23</h3>
                     <h4> Price: Rs. 38000</h4>
                     <?php     
			        if(isset($_SESSION['email'])) {                     
			        ?>
					<?php
					if(check_if_added_to_cart(2)){?>
					<p><a href="#" role="button" class="btn btn-success btn-block" disabled >Added to cart</a></p>
					<?php
					}else {?>
					<p><a href="cart-add.php?id=2" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
			        <?php
			        } }else {                     
			        ?>
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>					
			        <?php                     
			        }                     
			        ?>
                   </div>
                 <center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="New folder/canon.jpg" alt="sony camera">
                  <center>
                   <div class="caption">
                     <h3>Canon EOS-350</h3>
                     <h4> Price: Rs. 33000</h4>
                     <?php     
			        if(isset($_SESSION['email'])) {                     
			        ?>
					<?php
					if(check_if_added_to_cart(3)){?>
					<p><a href="#" role="button" class="btn btn-success btn-block" disabled >Added to cart</a></p>
					<?php
					}else {?>
					<p><a href="cart-add.php?id=3" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
			        <?php
			        } }else {                     
			        ?>
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>					
			        <?php                     
			        }                     
			        ?>
                   </div>
                 <center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="New folder/nikon.jpg" alt="nikon camera">
                  <center>
                   <div class="caption">
                     <h3>Nikon 750</h3>
                     <h4> Price: Rs. 40000</h4>
                     <?php     
			        if(isset($_SESSION['email'])) {                     
			        ?>
					<?php
					if(check_if_added_to_cart(4)){?>
					<p><a href="#" role="button" class="btn btn-success btn-block" disabled >Added to cart</a></p>
					<?php
					}else {?>
					<p><a href="cart-add.php?id=4" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
			        <?php
			        } }else {                     
			        ?>
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>					
			        <?php                     
			        }                     
			        ?>
					 </div>
                 <center>
               </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="New folder/denim.jpg" alt="shirt">
                 <center>
                   <div class="caption">
                     <h3>Linen Denim</h3>
                     <h4> Price: Rs. 3500</h4>
                     <?php     
			        if(isset($_SESSION['email'])) {                     
			        ?>
					<?php
					if(check_if_added_to_cart(5)){?>
					<p><a href="#" role="button" class="btn btn-success btn-block" disabled >Added to cart</a></p>
					<?php
					}else {?>
					<p><a href="cart-add.php?id=5" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
			        <?php
			        } }else {                     
			        ?>
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>					
			        <?php                     
			        }                     
			        ?>
                   </div>
                 <center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="New folder/shirt2.jpg" alt="shirt">
                  <center>
                   <div class="caption">
                     <h3>Peter England</h3>
                     <h4> Price: Rs. 3800</h4>
                     <?php     
			        if(isset($_SESSION['email'])) {                     
			        ?>
					<?php
					if(check_if_added_to_cart(6)){?>
					<p><a href="#" role="button" class="btn btn-success btn-block" disabled >Added to cart</a></p>
					<?php
					}else {?>
					<p><a href="cart-add.php?id=6" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
			        <?php
			        } }else {                     
			        ?>
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>					
			        <?php                     
			        }                     
			        ?>
                   </div>
                 <center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="New folder/shirt3.jpg" alt="shirt">
                  <center>
                   <div class="caption">
                     <h3>Hilfiger</h3>
                     <h4> Price: Rs. 3300</h4>
                     <?php     
			        if(isset($_SESSION['email'])) {                     
			        ?>
					<?php
					if(check_if_added_to_cart(7)){?>
					<p><a href="#" role="button" class="btn btn-success btn-block" disabled >Added to cart</a></p>
					<?php
					}else {?>
					<p><a href="cart-add.php?id=7" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
			        <?php
			        } }else {                     
			        ?>
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>					
			        <?php                     
			        }                     
			        ?>
                   </div>
                 <center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="New folder/shirt4.jpg" alt="shirt">
                  <center>
                   <div class="caption">
                     <h3>Raymonds</h3>
                     <h4> Price: Rs. 2800</h4>
                     <?php     
			        if(isset($_SESSION['email'])) {                     
			        ?>
					<?php
					if(check_if_added_to_cart(8)){?>
					<p><a href="#" role="button" class="btn btn-success btn-block" disabled >Added to cart</a></p>
					<?php
					}else {?>
					<p><a href="cart-add.php?id=8" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
			        <?php
			        } }else {                     
			        ?>
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>					
			        <?php                     
			        }                     
			        ?>
					 </div>
                 <center>
               </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="New folder/fastrack.jpg" alt="watch">
                 <center>
                   <div class="caption">
                     <h3>Fastrack</h3>
                     <h4> Price: Rs. 2400</h4>
                     <?php     
			        if(isset($_SESSION['email'])) {                     
			        ?>
					<?php
					if(check_if_added_to_cart(9)){?>
					<p><a href="#" role="button" class="btn btn-success btn-block" disabled >Added to cart</a></p>
					<?php
					}else {?>
					<p><a href="cart-add.php?id=9" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
			        <?php
			        } }else {                     
			        ?>
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>					
			        <?php                     
			        }                     
			        ?>
					 </div>
                 <center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="New folder/Gucci.jpg" alt="shirt">
                  <center>
                   <div class="caption">
                     <h3>Gucci</h3>
                     <h4> Price: Rs. 4000</h4>
                     <?php     
			        if(isset($_SESSION['email'])) {                     
			        ?>
					<?php
					if(check_if_added_to_cart(10)){?>
					<p><a href="#" role="button" class="btn btn-success btn-block" disabled >Added to cart</a></p>
					<?php
					}else {?>
					<p><a href="cart-add.php?id=10" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
			        <?php
			        } }else {                     
			        ?>
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>					
			        <?php                     
			        }                     
			        ?>
					 </div>
                 <center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="New folder/Gshock.jpg" alt="watch">
                  <center>
                   <div class="caption">
                     <h3>G-SHOCK</h3>
                     <h4> Price: Rs. 3300</h4>
                     <?php     
			        if(isset($_SESSION['email'])) {                     
			        ?>
					<?php
					if(check_if_added_to_cart(11)){?>
					<p><a href="#" role="button" class="btn btn-success btn-block" disabled >Added to cart</a></p>
					<?php
					}else {?>
					<p><a href="cart-add.php?id=11" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
			        <?php
			        } }else {                     
			        ?>
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>					
			        <?php                     
			        }                     
			        ?>
					 </div>
                 <center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="New folder/titan.jpg" alt="watch">
                  <center>
                   <div class="caption">
                     <h3>Titan</h3>
                     <h4> Price: Rs. 5000</h4>
                     <?php     
			        if(isset($_SESSION['email'])) {                     
			        ?>
					<?php
					if(check_if_added_to_cart(12)){?>
					<p><a href="#" role="button" class="btn btn-success btn-block" disabled >Added to cart</a></p>
					<?php
					}else {?>
					<p><a href="cart-add.php?id=12" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
			        <?php
			        } } else {                     
			        ?>
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>					
			        <?php                     
			        }              
			        ?>
					 </div>
                 <center>
               </div>
            </div>
          </div>
        </div>
  <?php include 'includes/footer.php';?>
  </body>

</html>