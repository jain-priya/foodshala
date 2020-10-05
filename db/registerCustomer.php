<?php

include("connection.php");
$fullname = mysqli_real_escape_string($conn,$_POST['custfullname']);
$pwd = mysqli_real_escape_string($conn,md5($_POST['custpwd1']));
$email = mysqli_real_escape_string($conn,$_POST['custemail']);
$isveg = mysqli_real_escape_string($conn,$_POST['isveg']);
$mobno =  mysqli_real_escape_string($conn,$_POST['custmobno']);
$address =  mysqli_real_escape_string($conn,$_POST['custaddress']);

$check_query = "SELECT * FROM custdetails WHERE email='$email'";
  $result = mysqli_query($conn, $check_query) or die(mysqli_error($conn));
  $user = mysqli_fetch_assoc($result);

    if (!$user==0 ) {
     echo "<script>
     window.location='../customer-registration.php';
     alert('Email Id already in use');
         exit();
         </script>";  
    }else{
        $query = "INSERT INTO custdetails(custId, fullName, email, mobno, isveg, address, pwd)  
  			  VALUES (NULL,'$fullname','$email','$mobno','$isveg','$address','$pwd')";
        $res=mysqli_query($conn, $query) or die(mysqli_error($conn));
      
        if($res==1){
            echo "<script>
            window.location='../index.php';
            alert('Account Created Successfully');
            exit();
            </script>";
        }else{
            echo "<script>
            window.location='../customer-registration.php';
            alert('Some error occured at Server End.Please try after some time.');
            exit();
            </script>"; 
        }
    }


?>