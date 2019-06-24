<?php 
$con=mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();
$email=$_POST['email'];
$firstname=$_POST['name'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$password=md5($password);
$select_query="SELECT id FROM users WHERE email='$email'";
$select_query_result=mysqli_query($con,$select_query);
$numrow=mysqli_num_rows($select_query_result);
if($numrow>0){
echo "Email already exist";
header('location: login.php');
}
$regex_email="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/";
if(!preg_match($regex_email,$email)){
echo "Invalid email";
header('location: signup.php');
}
$user_r_query="INSERT INTO users(name,email,password,contact,city,address) values('$firstname','$email','$password','$contact','$city','$address')";
$user_submit=mysqli_query($con,$user_r_query) or die(mysqli_error($con));
$_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);
header('location: products.php');
?>