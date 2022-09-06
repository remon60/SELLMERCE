<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

  <link rel="stylesheet" href="assets/css/adlog.css">
  <title>Login</title>
</head>

<body class="gradient-custom">

  <div class="row bg-transparent">
    <div class="col ">
      <nav aria-label="breadcrumb" class="bg-transparent rounded-3 p-3 mb-4">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item "><a href="index.php">Home</a></li>

          <li class="breadcrumb-item active text-dark" aria-current="page">Admin login</li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="vh-100">
    <div class="container py-5 h-100">

      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-lg  text-white" style="background-color: rgba(0,0,0,0.5); border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Admin Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                <div class="form-outline form-white mb-4">
                  <input type="text" placeholder="Admin handle" id="name" class="form-control form-control-lg" />

                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" placeholder="Password" id="pass" class="form-control form-control-lg" />

                </div>

                <button class="btn btn-outline-light btn-lg px-5" id="auth" type="submit">Login</button>


              </div>



            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--Error-->
  <div style="" id="error"></div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    
    $(document).ready(function() {
      $('#auth').click(function(e) {
        console.log("auth button clicked");
        console.log( $("#name").val());
        console.log($("#pass").val());
        $.ajax({
          type: "POST",
          url: "admin_auth_module.php",
          data: {
            name: $("#name").val(),
            pass: $("#pass").val()

          },
          success: function(result, status, xhr) {
            $("#error").html(result)
            console.log("result ->"+result);
            if(result == ''){
              localStorage.ad_log ="true"
              location.replace("admin.php")
            }
          }
        });
      });
    });

    setTimeout(function() {
    document.getElementById('error').style.display = 'none';
}, 7000); 
  </script>


</body>

</html>