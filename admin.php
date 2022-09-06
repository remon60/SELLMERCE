<?php
include 'admin_module.php';
session_start();
?>


<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lift</title>
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/css/adlog.css">
</head>

<body id="ad_main" style="background-color:black; position: relative;">

    <div class="container-fluid  ">
        <div class="row   p-2 mt-3 justify-content-center">
            <div class="col-2 mx-3" style="height: 100%;">
                <p class="text-light"><i class="bi bi-award"></i> <?php echo $_SESSION['admin']['name'] ?></p>
                <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown" ">
                    <button onclick=" myB1()" type="button" id="b1" class="btn    mx-2 px-5 t">Dashboard</button>
                    <button onclick="myB2()" type="button" id="b2" class="btn  mx-2 t">Orders</button>
                    <button onclick="myB3()" type="button" id="b3" class="btn  mx-2 t">Products</button>

                    <button onclick="myB4()" type="button" id="b4" class="btn  mx-2 t">Forms</button>
                    <button onclick="myB5()" type="button" id="b5" class="btn   mx-2 t">Feedbacks</button>
                </div>
                <br><br><br><br>
                <div class="" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" id="log-out" class="btn btn-block btn-danger text-light mx-2 px-4">
                        <i class="bi bi-box-arrow-left"></i>
                        Log out</button>
                    <button type="button" id="to-site" class="btn btn-block btn-secondary text-light my-2 mx-2 px-4">

                        <i class="bi bi-cloud-fill "></i> Go to site</button>

                </div>
            </div>
            <!-- Panel -->
            <div class="col-9 shadow-lg p-3 bg-secondary  rounded " style="color: white;height:650px;">

                <div class="row p-2" id="d1">

                    <?php include 'ad_dash.php' ?>





                </div>

                <div class="row p-2" id="d2">

                    <?php include 'ad_order.php' ?>

                </div>


                <div class="row p-2 " style="color:white;" id="d3">

                    <?php include 'ad_products.php' ?>

                </div>

                <div class="row p-2" id="d4">

                    <?php include 'ad_add.php' ?>

                </div>


                <div class="row p-2" id="d5">

                    <?php include 'ad_msg.php' ?>

                </div>


            </div>


        </div>
    </div>
    <!--Error-->
    <div style="" id="error"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.add').click(function(e) {
                console.log("add button clicked");
                var value = document.getElementById('qty').value;
                var unit = $('#inputGroupSelect02 :selected').text();;

                var qty = value +' '+unit;
                
                $.ajax({
                    type: "POST",
                    url: "dataInsert_product_module.php",
                    data: {
                        product_code: $("#code").val(),
                        product_name: $("#name").val(),
                        product_path: $("#path").val().match(/[^\\/]*$/)[0],
                        product_type: $("#inputGroupSelect01 :selected").text(),
                        product_qty: qty,
                        product_price: $("#price").val()

                    },
                    success: function(result, status, xhr) {
                        $("#error").html(result);
                    }
                });
            });

            $('#log-out').click(function(e) {
                console.log("logout button clicked");
                localStorage.ad_log = "false";
                $.ajax({
                    type: "POST",
                    url: "admin_logout_module.php",

                    success: function(result, status, xhr) {
                        if (result == '') {
                            location.replace("adminlog.php")
                        }
                    }
                });
            });

            $('#to-site').click(function(e) {
                location.replace("index.php")

            });


        });
    </script>
    <script src="assets/js/admin_ui.js"></script>


</body>



</html>