<?php
session_start();
include("../connection.php");

$restid=$_SESSION['restId'];

    // Design initial table header 
 
    $query = "SELECT * FROM rest_details where restId='$restid'";
 
    $results = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if (mysqli_num_rows($results) == 1) {
    $id = mysqli_fetch_assoc($results);
            $data = '<div class="col-md-12 col-sm-12 col-lg-12">
            <label>Restaurant Name: </label>
            <p>'. $id['restName'].'</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12">
            <label>Email Address: </label>
            <p>'. $id['email'].'</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12">
            <label>Manager Name: </label>
            <p>'. $id['managerName'].'</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12">
            <label>Restaurant Phone No: </label>
            <p>'. $id['restPhone'].'</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12">
            <label>Manager Phone No: </label>
            <p>'. $id['managerPhone'].'</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12">
            <label>Address: </label>
            <p>'. $id['address'].'</p>
        </div>';
        }
 

 
    echo $data;
?>
