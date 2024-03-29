<?php
$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

       <!--jQuery library--> 
        
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
       <!--Latest compiled and minified JavaScript--> 
        
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
     <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Cart | Lifestyle Store</title>
     <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'includes/head.php'; ?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <center>
                    <table class="table table-striped order1">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["id"] . ", ";
                                    echo "<br>";
                                   
                                    echo "<tr><td>" . "<b>#</b>" . $row["id"] . "<b></td><td></b>" . $row["Name"] . "</td><td><b>Rs</b> " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'>Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td><br><b>Total</b></td><td> <b>Rs</b> " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'><b>Confirm Order</b></a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<br><br><br><br><br><br><b>Add items to the cart first!</b>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                   </center>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>