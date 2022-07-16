<?php
    session_start();
    if(isset($_POST["loginButton"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($email == $_SESSION["email"] && $password == $_SESSION["password"]) {
            header("location: Dashboard.php");
        }
        else {
            echo "email/password incorrect";
        }
    }
    else {
        echo "invalid request";
    }
?>