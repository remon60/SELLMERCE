<?php

function admin_auth()
{

        include 'connection.php';
        $name = $_POST['name'];
        

        //Query statement with placeholder
        $query = "SELECT pass FROM admin WHERE name = '$name'";



        // Execute it
        try {
                $stmt = $link->prepare($query);
                $result = $stmt->execute();
                $stmt->store_result();
        } catch (PDOException $ex) {
                echo $ex->getMessage();
        }

        if ($stmt->num_rows == 0) {

                echo '<script>document.getElementById("error").style.display = "block";</script>';
                echo '<div class="fixed-top alert alert-danger alert-dismissible fade show" role="alert";>
                <strong>Admin doesn\'t exist!</strong> Try different admin name.
                
                </div>';
        } else {
                session_start();
                $resultu = mysqli_query($link, $query);
                $row = mysqli_fetch_array($resultu);

                if ($row['pass'] == $_POST['pass']) {


                        $_SESSION['admin']['name'] = $name;



                        $_SESSION['ad_log'] = 'on';
                        echo '';
                        
                } else {
                        echo '<script>document.getElementById("error").style.display = "block";</script>';
                        echo '<div class="fixed-top alert alert-danger alert-dismissible fade show" role="alert";>
                        <strong>Incorrect password!</strong> Try again.
                        
                        </div>';
                }
        }
}

admin_auth();
