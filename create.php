<?php

include("./config.php");


if (isset($_POST["submit"])) {

    if (empty($_POST['name_F']) || empty($_POST['email_F']) || empty($_POST['role'])) {
        echo 'empty inputt';
        die("error" . mysqli_error($conn));
    } else {
        echo 'good';
        $name = $_POST['name_F'];
        $email = $_POST['email_F'];
        $role = $_POST['role'];

        $sql = "INSERT INTO person (name,email,role_id)
           VALUES ('$name','$email','$role')";

        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("error" . mysqli_error($conn));
        } else {
            header("location:./index.php");
        }
    }
}
