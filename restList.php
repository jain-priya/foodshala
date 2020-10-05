<?php
session_start();
include("./db/connection.php");



    // Design initial table header 
    $data = '<table>
    <thead>
        <tr><th>S.No.</th><th>RESTAURANT NAME</th><th>ADDRESS</th><th>PHONE NO</th><th>EMAIL</th><th>ORDER FOOD</th></tr>
    </thead>
    <tbody>';
 
    $query = "SELECT * FROM  rest_details order by restName";
 
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }

        $number =1;
        while($row = mysqli_fetch_assoc($result))
        {
            $data .= '<tr>
                <td>'.$number.'</td>
                <td>'.$row['restName'].'</td>
                <td>'.$row['address'].'</td>
                <td>'.$row['restPhone'].'</td>
                <td>'.$row['email'].' </td>
                <td>    
                <button onclick="loadRestaurantDishes('.$row['restId'].')" class="btn btn-danger">Order</button>
                </td>
                </tr>';
            $number++;
        }
 
    $data .= '</table>';
 
    echo $data;
?>
