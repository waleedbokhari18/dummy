<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
session_start();
if(!isset($_SESSION['username']))
header('location:http://localhost/Final/login.php'); 
 
$oldPicture	= $_POST['hdpicture']; 
$pname		= $_POST['pname']; 
$pid		= $_POST['pid']; 
$pdes	= $_POST['pdes']; 
$price		= $_POST['price']; 

$picture		= $_FILES['picture']["name"]; 
	
	if($picture!="")
	{
		move_uploaded_file($_FILES['picture']['tmp_name'], 'uploads/'.$picture); 
	}
	else
	{
	$picture=$oldPicture;
	}

$sql = "UPDATE  product  SET pname='$pname', 
									 pid='$pid', 
									 pdes='$pdes',
									 price='$price',
									 picture='$picture'
									 WHERE pid='$pid' ";
if($status!=1)
         {
             header('location:http://localhost/Final/view2.php');
             }
              else
              {
                 header('location:http://localhost/Final/updateform2.php');
         }
mysqli_query($con,$sql);  
?>