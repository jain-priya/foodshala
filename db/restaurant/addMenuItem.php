

<?php

session_start();
include("../connection.php");

$restname = $_SESSION['restName'];
$restid=$_SESSION['restId'];
$itemName=mysqli_real_escape_string($conn,$_POST['itemName']);
$itemPrice=mysqli_real_escape_string($conn,$_POST['itemPrice']);
$isveg = mysqli_real_escape_string($conn,$_POST['isveg']);

$sql ="INSERT INTO `menu_items`(`itemId`, `restId`, `restaurantName`, `itemName`, `itemPrice`, `veg_nonveg`)
 VALUES (NULL,'$restid', '$restname', '$itemName','$itemPrice','$isveg')";

$res = mysqli_query($conn,$sql) or die(mysqli_error($conn));

if($res==1){
    echo "Item added Successfully";
}
else{
    echo "Please try again";
}
?>