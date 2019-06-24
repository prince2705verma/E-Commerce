<?php require("includes/common.php");
if (isset($_SESSION['email'])) {
header('location: products.php'); }?>
<!DOCTYPE html>

  <html>
   
<head>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

       <!--jQuery library--> 
        
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
       <!--Latest compiled and minified JavaScript--> 
        
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
     <meta name="viewport" content="width=device-width, initial-scale=1">
        
     <title>Login | Lifestyle Store</title>
  
     <link href="style.css" rel="stylesheet">
   </head>
    
   <body>
        
     <?php include 'includes/head.php';?>

        <div id="banner-image">
           <div class="container">
                <div class="row row_style">
                    <div class="col-xs-4 col-xs-offset-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>Login to make purchase</h3>
                            </div>
                            <div class="panel-body">
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter your Email Id" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Enter your password" name="password">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button>                        
                                </form>
                            </div>
                            <div class="panel-footer p_foot">
                                Don't have an account ?                           
                                <a href="signup.php">Register</a>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>  
    </body>
</html>