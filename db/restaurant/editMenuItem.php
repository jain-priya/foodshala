<?php
session_start();
include("../connection.php");

$restname = $_SESSION['restName'];
$restid=$_SESSION['restId'];
$itemName=mysqli_real_escape_string($conn,$_POST['itemName']);
$itemPrice=mysqli_real_escape_string($conn,$_POST['itemPrice']);
$isveg = mysqli_real_escape_string($conn,$_POST['isveg']);
$itemid= mysqli_real_escape_string($conn,$_POST['itemId']);

$edit = "UPDATE menu_items SET `itemName`='$itemName',`itemPrice`='$itemPrice',`veg_nonveg`='$isveg' 
where itemId='$itemid' and restId='$restid'";
$res = mysqli_query($conn,$edit) or die(mysqli_error($conn));
if(isset($res)) {
   echo "Item Updated Successfully";
} else {
   echo "Item Updation Failed";
}
?> 