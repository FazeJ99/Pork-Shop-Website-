<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name  = "porkshop";
$conn = "";

$conn = new mysqli($db_server , 
                    $db_username , 
                    $db_password , 
                    $db_name);

if($conn->connect_error){
    echo"Failed to connect DB".$conn->connect_error;
}
?>