<?php

session_start();
include("../connection.php");

if(!isset($_SESSION['cust']))
{
	echo "Please Login First";
}else{
$custid=$_SESSION['custId'];    
$custName=$_SESSION['username'];
$restid=mysqli_real_escape_string($conn,$_POST['restid']);
$itemid=mysqli_real_escape_string($conn,$_POST['itemid']);

$query = "SELECT * FROM  menu_items where itemId='$itemid'";
$results = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($results) == 1) {
            $id = mysqli_fetch_assoc($results);
            $itemName=$id['itemName'];
            $restname=$id['restaurantName'];
            $bill=$id['itemPrice'];
            $date = date('Y-m-d H:i:s');
$sql ="INSERT INTO `order_details`(`orderID`, `custId`, `restId`, `custName`, `restName`, `itemName`, `bill`, `date`) 
 VALUES (NULL,'$custid', '$restid','$custName','$restname','$itemName','$bill','$date')";

$res = mysqli_query($conn,$sql) or die(mysqli_error($conn));

    if($res==1){
        echo "Order Placed Successfully";
    }
    else{
        echo "Please try again 1";
    }
    }else{
        echo "Please try again 2 '$query'";
    }
}
?>