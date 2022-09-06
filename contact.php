<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
</head>

<body>

    <div class="container-fluid vh-100" style="">
       
        <div class="row bg-transparent">
            <div class="col ">
                <nav aria-label="breadcrumb" class="bg-transparent rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="index.php">Home</a></li>

                        <li class="breadcrumb-item active text-dark" aria-current="page">Contact us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="" style="">
            <div class="rounded d-flex justify-content-center">
                <div class="col-md-4 col-sm-12 shadow-lg p-5">
                    <div>
                        <h3 align="center" class="text-success">Let us know</h3>
                    </div>
                    <div class="p-4">
                        <form action="" method="post">
                            
                            <div class="input-group mb-3">
                               <input id="sub" type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="input-group mb-3">
                                <input id="text" type="text" class="form-control" placeholder="Message"></input>
                            </div>
                           
                        </form>
                        <button id="reg" class="btn btn-warning w-100">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Error-->
    <div style="" id="error"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#reg').click(function(e) {
                console.log("auth button clicked");
                $.ajax({
                    type: "POST",
                    url: "send_module.php",
                    data: {
                        name: $("#sub").val(),
                        pass: $("#text").val()
                        
                    },
                    success: function(result, status, xhr) {
                        $("#error").html(result)
                        console.log("result ->" + result);
                        setTimeout(function() {
                            document.getElementById('error').style.display = 'none';

                        }, 5000);

                    }
                });
            });




        });
    </script>

</body>

</html>