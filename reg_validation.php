<?php

$conn=mysqli_connect("localhost","root","","zomato1");
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$query="INSERT INTO users (user_id,name,email,password,dp) VALUES (NULL, '$name','$email','$password','https://cdn1.vectorstock.com/i/1000x1000/51/05/male-profile-avatar-with-brown-hair-vector-12055105.jpg')";
try{
	//check user already exists or not
	mysqli_query($conn,$query);
	header('Location:login_form.php?message=1');

}catch(Exception $e){
	header('Location:login_form.php?message=0');
}

?>