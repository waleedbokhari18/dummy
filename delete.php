<?php

 $con=new mysqli('localhost','root','','lms');

                  $index=$_GET['pId'];
                $q="Delete from product where pid=$index";
                
                 $status=mysqli_query($con,$q);  
      if($status==1)
         {
             header('location:http://localhost/Final/view.php');
             }
              else
              {
                echo "Record not deleted";
                 header('location:http://localhost/Final/updateform2.php');
         }
     mysqli_close($con);
?>