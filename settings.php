<?php
$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
session_start();
if (!isset($_SESSION['email'])) {
header('location: login.php'); } 
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
        
     <title>Change Password</title>
  
     <link href="style.css" rel="stylesheet">
   </head>
    
   <body >
        
     <?php include 'includes/head.php';?>
        <div class="container row_style2">
               <div class="row ">
                 
                  <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                   <form method="POST" action="settings_script.php"> 
                     <h1>Change Password</h1> 
                     <div class="form-group">
                       <input type="password"  class="form-control" name="old_password" placeholder="Old Password">
                     </div>
                     <div class="form-group">
                       <input type="password"  class="form-control" name="new_password" placeholder="New Password">
                     </div>
                     <div class="form-group">
                       <input type="password"  class="form-control" name="retype_new_password" placeholder="Re-type New Password">
                     </div>
                     <button type="submit" class="btn btn-primary">Change</button>
                   </form>
                 </div>
                      
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
