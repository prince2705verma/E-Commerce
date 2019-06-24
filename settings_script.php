<?php
$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
session_start();
if (!isset($_SESSION['email'])) {
header('location: login.php'); }

$old_password = $_POST['old_password'];
$old_password = mysqli_real_escape_string($con, $old_password);
$old_password = md5($old_password);

$new_password = $_POST['new_password'];
$new_password = mysqli_real_escape_string($con, $new_password);
$new_password = md5($new_password);

$retype_new_password = $_POST['retype_new_password'];
$retype_new_password = mysqli_real_escape_string($con, $retype_new_password);
$retype_new_password = md5($retype_new_password);
$email=$_SESSION['email'];
$query = "SELECT password FROM users WHERE email ='$email'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if ($new_password != $retype_new_password) {
    echo "The two passwords don\'t match";
} else {
    if ($old_password==$orig_pass) {
        $query = "UPDATE  users SET password = '$new_password' WHERE email = '$email'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        echo "Password Updated" ;
    } else
        echo "Wrong Old Password";
}        
?>