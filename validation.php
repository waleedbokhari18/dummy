<?php
session_start();
$username=$_POST['uname'];
$password=$_POST['psw'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$q="select * from person where username='$username' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
$_SESSION['username']=$username;
header('location:http://localhost/Final/view.php');
}
else
{
	header('location:http://localhost/Final/error.php');
}
?>