<?php require 'includes/common.php'?>
<?php if (isset($_SESSION['email'])) {
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

        <title>Sign Up</title>
    </head>
    <body>
       <?php require 'includes/head.php';?>
        <div id="banner-image1">
           <div class="container">
               <div class="row row_style1">
                 <center>
                  <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                   <form method="POST" action="signup_script.php">
                     <div id="banner-content1">
                     <h1> SIGN UP</h1> 
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>			
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Contact" name="contact">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="City" name="city">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address" name="address">
                            </div>
                     <button type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button>
                    </div>
                   </form>
                 </div>
               </center>             
 	    </div>        
       </div>
    </div>
    <?php include 'includes/footer.php' ?>
  </body>
</html>