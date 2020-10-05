<?php
session_start();
include("../connection.php");

$itemid= mysqli_real_escape_string($conn,$_POST['itemId']);

$delete = "DELETE  from menu_items where itemId='$itemid'"; 

$res = mysqli_query($conn,$delete);
if(isset($res)) {
   echo "Item Deleted Successfully";
} else {
   echo "Item Deletion Failed";
}
?>