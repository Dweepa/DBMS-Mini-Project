<?php
$servername = "localhost";
$username = "root";
$password="dweepacomp";

    $conn = mysqli_connect($servername,$username,$password);
    $query="DROP DATABASE SHOP";
    mysqli_query($conn,$query);
    $query="CREATE DATABASE SHOP";
    mysqli_query($conn,$query);
 ?>