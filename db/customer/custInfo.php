<?php
session_start();
include("../connection.php");

$custid=$_SESSION['custId'];

    // Design initial table header 
 
    $query = "SELECT * FROM custdetails where custId ='$custid'";
 
    $results = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if (mysqli_num_rows($results) == 1) {
    $id = mysqli_fetch_assoc($results);
            $data = '<div class="col-md-12 col-sm-12 col-lg-12">
            <label>Full Name: </label>
            <p>'. $id['fullName'].'</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12">
            <label>Email Address: </label>
            <p>'. $id['email'].'</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12">
            <label>Mobile No: </label>
            <p>'. $id['mobno'].'</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12">
            <label>Veg/Non-Veg: </label>
            <p>'. $id['isveg'].'</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12">
            <label>Address: </label>
            <p>'. $id['address'].'</p>
        </div>';
        }
 

 
    echo $data;
?>
