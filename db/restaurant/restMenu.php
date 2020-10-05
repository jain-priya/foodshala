<?php
session_start();
include("../connection.php");

$restid=$_SESSION['restId'];

    // Design initial table header 
    $data = '<table>
    <thead>
        <tr><th>S.No.</th><th>ITEM NAME</th><th>ITEM PRICE</th><th>VEG/NON-VEG</th><th>UPDATE</th><th>DELETE</th></tr>
    </thead>
    <tbody>';
 
    $query = "SELECT * FROM  menu_items where restId='$restid'";
 
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }

        $number =1;
        while($row = mysqli_fetch_assoc($result))
        {
            $data .= '<tr>
                <td>'.$number.'</td>
                <td>'.$row['itemName'].'</td>
                <td>'.$row['itemPrice'].'</td>
                <td>'.$row['veg_nonveg'].'</td>
                <td>
                    <button onclick="GetItems('.$row['itemId'].')" class="btn btn-warning" type="button" data-toggle="modal">Update</button>
                </td>
                <td>    
                    <button onclick="DeleteItem('.$row['itemId'].')" class="btn btn-danger">Delete</button>
                </td>
            </tr>';
            $number++;
        }
 
    $data .= '</table>';
 
    echo $data;
?>
