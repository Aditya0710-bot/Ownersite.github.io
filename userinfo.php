<?php
 
   $con= mysqli_connect('localhost','root');

   if($con){
   	echo "Thank You For Visiting";
   } else {
     echo "no connection";
   }

   mysqli_select_db($con,'aadiwebsiteuserdata');

   $user = $_POST['user'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $comments = $_POST['comments'];

   $query = " insert into userinfodata (user, email, mobile, comment)
   values ('$user', '$email', '$mobile', '$comments')";

   

   mysqli_query($con, $query);

   header('location:index.php');

?>