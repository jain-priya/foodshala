<?php
session_start();
include("connection.php");

$email = mysqli_real_escape_string($conn,$_POST['useremail']);
$pwd = mysqli_real_escape_string($conn,md5($_POST['userpwd']));
$usertype = mysqli_real_escape_string($conn,$_POST['userType']);

if(strcmp($usertype,"customer")==0){
    
    $check_query ="SELECT * FROM custdetails WHERE email='$email'";;
    $result = mysqli_query($conn, $check_query)or die(mysqli_error($conn));
    $user = mysqli_fetch_assoc($result);
    
  if (mysqli_num_rows($result)!=1) {
      
      echo "<script>
          window.location='../index.php';
          alert('Customer Account does not exist');
          </script>";
      
    }else{
        
            $password = md5($password);
            $query = "SELECT * FROM custdetails WHERE email='$email' AND pwd='$pwd'";

            $results = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($results) == 1) {
            $id = mysqli_fetch_assoc($results);
            $_SESSION['username'] = $id['fullName']; 
            $_SESSION['isveg']=$id['isveg'];
            $_SESSION['address']=$id['address'];
            $_SESSION['custId']=$id['custId'];
            $_SESSION['email']=$id['email'];
            $_SESSION['cust']=1;
            echo "<script>
            
            window.location='../custDashboard.php';
            alert('Logged In Successfully');
            exit();
            </script>";
            }
            else
            {
                 echo "<script>
                window.location='../index.php';
                alert('Wrong email/password');
                </script>";
            }
    }

}else if(strcmp($usertype,"restaurant")==0){
    $check_query ="SELECT * FROM rest_details WHERE email='$email'";;
    $result = mysqli_query($conn, $check_query)or die(mysqli_error($conn));
    $user = mysqli_fetch_assoc($result);
  
  if (mysqli_num_rows($result)!=1) {
      
      echo "<script>
          window.location='../index.php';
          alert('Restaurant Account does not exist');
          </script>";
      
    }else{
        
            $password = md5($password);
            $query = "SELECT * FROM rest_details WHERE email='$email' AND pwd='$pwd'";
            $results = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($results) == 1) {
            $id = mysqli_fetch_assoc($results);
            $_SESSION['restName'] = $id['restName']; 
            $_SESSION['address']=$id['address'];
            $_SESSION['restId']=$id['restId'];
            $_SESSION['email']=$id['email'];
            $_SESSION['rest']=1;
            echo "<script>
            
            window.location='../restDashboard.php';
            alert('Logged In Successfully');
            exit();
            </script>";
            }
            else
            {
                 echo "<script>
                window.location='../index.php';
                alert('Wrong email/password');
                </script>";
            }
    }
}else{
    echo "<script>
    window.location='../index.php';
    alert('Please select Customer or Restaurant while logging in');
    exit();
    </script>";
}

?>