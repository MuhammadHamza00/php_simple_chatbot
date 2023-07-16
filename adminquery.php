<?php
include "config.php";

$sql = "SELECT *FROM feed ";
$result = mysqli_query($connect,$sql) or die("Query Failed");

$conservation = "";
if (mysqli_num_rows($result)>0){
    $conservation = '<table><tr><th>ID</th><th>Human Chat</th><th>Bot Response</th><th>Delete</th><th>Edit</th></tr>';
    while ($row = mysqli_fetch_assoc($result)){
        $conservation .= "<tr><td>{$row["f_id"]}</td> <td>{$row["h_text"]}</td><td>{$row["b_text"]}</td><td><button data-id='{$row["f_id"]}' class='del-btn'>Delete</button></td><td><button data-id='{$row["f_id"]}' class='edit-btn'>Edit</button></td></tr>";
    }
    $conservation .= "</table>";
    echo $conservation;
}
else{
    echo $conservation;

}
?>