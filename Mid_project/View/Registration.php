<?php
    session_start();
    if(isset($_POST["submitButton"])) {
        $name = $_POST["name"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $mobileNumber = $_POST["mobileNumber"];
        $address = $_POST["address"];
        $role = $_POST["role"];


        if(empty($name) || empty($password) || empty($email) || empty($gender) || empty($mobileNumber) || empty($address) || empty($role)) {
            echo "empty fields found";
        }
        else {
            $_SESSION["name"] = $name;
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            $_SESSION["gender"] = $gender;
            $_SESSION["mobileNumber"] = $mobileNumber;
            $_SESSION["address"] = $address;
            $_SESSION["role"] = $role;
            //echo "Registration Successful";
            header ("location: login.html");

        }

    }

    else {
        echo "invalid request";
    }



?>