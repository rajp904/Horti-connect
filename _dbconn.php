<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "logindata";

    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn)
    {
        echo "Disconnected";
    }
?>