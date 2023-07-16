<?php
// connection to Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "chtbot";

$connect = mysqli_connect($servername, $username, $password, $database);
if (!$connect) {
    echo "Unable to Connect with Database".$database;
}
else{
    echo "Connect Successfully";
}
?>