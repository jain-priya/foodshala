<?php
session_start();
include("../connection.php");

$restid=mysqli_real_escape_string($conn,$_POST['restid']);

$query1="SELECT * FROM  rest_details where restId='$restid'";
$results = mysqli_query($conn, $query1) or die(mysqli_error($conn));
if (mysqli_num_rows($results) == 1) {
$id = mysqli_fetch_assoc($results);
    $data = '<h4 itemprop="headline" id="rest-name">'.$id['restName'].'</h4>
    <div class="booking-table "><table>
    <thead>
        <tr><th>S.No.</th><th>ITEM NAME</th><th>ITEM PRICE</th><th>VEG/NON-VEG</th><th>ORDER</th></tr>
    </thead>
    <tbody>';
 
    $query = "SELECT * FROM  menu_items where restId='$restid' order by itemName";
 
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
                    <button onclick="orderItem('.$row['itemId'].','.$restid.')" class="btn btn-warning" type="button" data-toggle="modal">ORDER ITEM</button>
                </td>
            </tr>';
            $number++;
        }
 
    $data .= '</table></div>';
 
    echo $data;
} 
?>
