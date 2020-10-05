<?php
session_start();
include("../connection.php");

$restid=$_SESSION['restId'];

    // Design initial table header 
    $data = '<table>
    <thead>
        <tr><th>S.No.</th><th>CUSTOMER NAME</th><th>ITEM NAME</th><th>BILL</th><th>DATE</th></tr>
    </thead>
    <tbody>';
 
    $query = "SELECT * FROM  order_details where restId='$restid' order by date";
 
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }

        $number =1;
        while($row = mysqli_fetch_assoc($result))
        {
            $data .= '<tr>
                <td>'.$number.'</td>
                <td>'.$row['custName'].'</td>
                <td>'.$row['itemName'].'</td>
                <td>'.$row['bill'].'</td>
                <td>'.$row['date'].' </td>
            </tr>';
            $number++;
        }
 
    $data .= '</table>';
 
    echo $data;
?>
