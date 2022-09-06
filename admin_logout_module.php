<?php

function admin_out()
{

        session_start();
        $_SESSION['admin']['name'] = "";
        echo $_SESSION['admin']['name'];

}

admin_out();
