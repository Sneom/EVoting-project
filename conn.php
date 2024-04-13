<?php

$database_host = 'localhost';
$database_user = 'root';
$database_password = '';
$database_name = 'voting';

$con = mysqli_connect($database_host, $database_user, $database_password, $database_name);


if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}


$base_url = 'http://localhost/voting-master/';
?>
