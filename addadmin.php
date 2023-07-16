<?php
include "config.php";

$human = $_POST["human"];
$bot = $_POST["bot"];

    $sql = "INSERT INTO `feed` (f_id,`h_text`,`b_text`)
    VALUES ('','$human','$bot')";
    $result = mysqli_query($connect, $sql) or die("Query Failed");
if ($result) {
    $output = "Form data Added";
}    
?>