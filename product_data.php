<?php

require_once 'class.php';
include 'connection.php';

$products = array();






//variables


$email = "";

//sql

$sqlx = "SELECT * FROM product";

$sqlv = "SELECT * FROM product where type='Vegetables'";
$sqlf = "SELECT * FROM product where type='Fruits'";
$sqls = "SELECT * FROM product where type='Spices'";
$sqlo = "SELECT * FROM `product` where type = 'Others';";

$sqlfav = "SELECT * FROM `favourites` where user = ;";



//rsult fetch
$resultx = mysqli_query($link, $sqlx);

$resultv = mysqli_query($link, $sqlv);
$resultf = mysqli_query($link, $sqlf);
$results = mysqli_query($link, $sqls);
$resulto = mysqli_query($link, $sqlo);

//noofdata
$noOfDatav = mysqli_num_rows($resultv);
$noOfDataf = mysqli_num_rows($resultf);
$noOfDatas = mysqli_num_rows($results);
$noOfDatao = mysqli_num_rows($resulto);

$noOfDatax = mysqli_num_rows($resultx);








$i = 0;





while ($row = mysqli_fetch_array($resultx)) {
        $products[$i] = new pt();
        $products[$i]->code = $row['code'];
        $products[$i]->name = $row['Name'];
        $products[$i]->price = $row['Price'];
        $products[$i]->qty = $row['qty'];
        $products[$i]->path = 'assets/images/product/'.$row['path'];
       
        $products[$i]->type = $row['type'];
       

        $i++;
}
