<?php

$db_host = "localhost";
$db_user = "akademis_cosite";
$db_pass = "@n-KIFKiua=Y";
$db_name = "akademis_cosite";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
 $db22 = new mysqli($db_host, $db_user, $db_pass, $db_name);
try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
