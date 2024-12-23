<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myusers";

$conn = new mysqli($servername, $username, $password, $database);


if (!$conn) {
    die("error" . mysqli_error($conn));
} else {
    // echo "good connection";
}
?>