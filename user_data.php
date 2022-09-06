<?php

require_once 'class.php';
include 'connection.php';

$products = array();






//variables


$email = "";

//sql

$sqlx = "SELECT * FROM user";
  


//rsult fetch
$resultx = mysqli_query($link, $sqlx);
 
$noOfData2x = mysqli_num_rows($resultx);








$i = 0;



 ?>