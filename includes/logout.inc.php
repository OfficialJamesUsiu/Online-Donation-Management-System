<?php

if(isset($_POST['submit'])) {
    session_start(); //we need to have the session running in order to destroy it completely
    session_unset();    // unset all the session variables inside the browser
    session_destroy(); //destroy the sessions
    header("Location: ../index.php");
    exit();
} else {
     echo "failed";
}
