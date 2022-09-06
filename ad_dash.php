
<?php include 'product_data.php';
 include 'orders_data.php';
 include 'user_data.php';  ?>
<h2>Dashboard</h2>
<br><br><br>
<div class="row">
    <div class="mb-1 mx-1 card z border-white rounded bg-transparent" style="width: 18rem;height:200px">
        <div class="card-body">
            <h5 class="card-title">Total products</h5>
            <h2><?php echo $noOfDatax; ?></h2>
        </div>
    </div>
        <div class="mb-1 mx-1  card z border-white rounded bg-transparent" style="width: 18rem;height:200px">
            <div class="card-body">
                <h5 class="card-title">Total purchase</h5>
                <h2><?php echo 0;?> ৳</h2>
            </div>
        </div>
        <div class="mb-1 mx-1  card z border-lg border-white rounded bg-transparent" style="width: 18rem;height:200px">
            <div class="card-body">
                <h5 class="card-title">Total orders</h5>
                <h2><?php echo $noOfData1x;?> </h2>
            </div>
        </div>
        <div class="mb-1 mx-1  card z border-white rounded bg-transparent" style="width: 18rem;height:200px">
            <div class="card-body">
                <h5 class="card-title">Total users</h5>
                <h2><?php echo $noOfData2x;?> </h2>
            </div>
        </div>
</div>