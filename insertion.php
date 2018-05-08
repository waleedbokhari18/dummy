<?php

 $con=mysqli_connect('localhost','root','','lms');

 $pid=$_POST['pid'];
 $pname=$_POST['pname'];
 $pdes=$_POST['pdes'];
 $price=$_POST['price'];
 
 $pictur=$_FILES['pi']["name"];
     
                move_uploaded_file($_FILES['pi']["name"], 'uploads/'.$pictur); 

       
           

 $q="Insert into product (pid,pname,pdes,price,Picture) 
 Values ('$pid','$pname','$pdes','$price','$pictur')";
  $status=mysqli_query($con,$q);
  if($status==1)
         {
             header('location:http://localhost/Final/view.php');
             }
              else
              {
                 header('location:http://localhost/Final/insertion2.php');
         }
  mysqli_close($con);
?>