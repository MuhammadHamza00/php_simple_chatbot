<?php
include "config.php";

$f_id = $_POST["id"];
$sql = "DELETE FROM feed WHERE f_id = $f_id";

$result = mysqli_query($connect,$sql) or die("Query Failed");

if ($result) {
    echo 1;
}
else{
    echo 0;
}

?>