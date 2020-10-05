<?php

include("connection.php");
$restname = mysqli_real_escape_string($conn,$_POST['restname']);
$restmobno = mysqli_real_escape_string($conn,$_POST['restmobno']);
$managername =  mysqli_real_escape_string($conn,$_POST['managername']);
$managermobno =  mysqli_real_escape_string($conn,$_POST['managermobno']);
$restaddress =  mysqli_real_escape_string($conn,$_POST['restaddress']);
$pwd = mysqli_real_escape_string($conn,md5($_POST['restpwd']));
$email = mysqli_real_escape_string($conn,$_POST['restemail']);

$check_query = "SELECT * FROM rest_details WHERE email='$email'";
  $result = mysqli_query($conn, $check_query) or die(mysqli_error($conn));
  $user = mysqli_fetch_assoc($result);


  if (!$user==0 ) {
    echo "<script>
    window.location='../restaurant-registration.php';
    alert('Email Id already in use');
        exit();
        </script>";  
   }else{
       $query = "INSERT INTO rest_details(restId, restName, restPhone, managerName, managerPhone, address, email, pwd) 
               VALUES (NULL,'$restname','$restmobno','$managername','$managermobno','$restaddress','$email','$pwd')";
       $res=mysqli_query($conn, $query) or die(mysqli_error($conn));
     
       if($res==1){
           echo "<script>
           window.location='../index.php';
           alert('Account Created Successfully');
           exit();
           </script>";
       }else{
           echo "<script>
           window.location='../restaurant-registration.php';
           alert('Some error occured at Server End.Please try after some time.');
           exit();
           </script>"; 
       }
   }




 
 ?> 