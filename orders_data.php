<?php

require_once 'class.php';
include 'connection.php';

$orders = array();






//variables



//sql

$sqlx = "SELECT * FROM orders";



//rsult fetch
$resultx = mysqli_query($link, $sqlx);

//noofdata

$noOfData1x = mysqli_num_rows($resultx);








$i = 0;





while ($row = mysqli_fetch_array($resultx)) {
        
        $orders[$i] = new order();
        
        $orders[$i]->code = $row['code'];
        $orders[$i]->items = $row['product_code'];
        $orders[$i]->status = $row['status'];
        $orders[$i]->user_email = $row['user_email'];
        $orders[$i]->address = $row['address'];
       

        $i++;
}
