<?php

 $con=mysqli_connect('localhost','root','','project');

 $pname=$_POST['pname'];
 $pid=$_POST['pid'];
 $price=$_POST['price'];
 $pdes=$_POST['pdes'];
    if(isset($_POST['submit']))

        {
      $pictur=$_FILES['pi']["name"];
     
                move_uploaded_file($_FILES['pi']['tmp_name'],'uploads/'.$pictur); 

       

        }

           

 $q="Insert into product (product_name,product_id,price,product_des,Picture) 
 Values ('$pname','$pid','$price','$pdes','$pictur')";
    if(mysqli_query($con,$q))
       {
           echo "ok";
       }
  mysqli_close($con);
?>