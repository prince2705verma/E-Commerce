<?php 
$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);
$password=md5($password);
$select_query= "SELECT id,email,password FROM users WHERE email='$email' AND password='$password'";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$numrows=mysqli_num_rows($select_query_result);
if($numrows>0){
$fetch=mysqli_fetch_array($select_query_result);
$_SESSION['email']=$fetch['email'];
$_SESSION['id']=$fetch['id'];
header('location: products.php');
}
else{
header('location: login.php');
}
?>