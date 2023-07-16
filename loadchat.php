<?php
include "config.php";

$sql = "SELECT *FROM conservation ";

$result = mysqli_query($connect,$sql) or die("Query Failed");

$conservation = "";
if (mysqli_num_rows($result)>0) {
    $conservation = "<div class='container text-center' id='content-block'>";
    while ($row = mysqli_fetch_assoc($result)) {
        $conservation .= "<div class='human'><h6 id='human-text'>{$row['human']}</h6>
        <img src='images/avatar5.png' id='human-img'> </div>";
        $conservation .="<div class='bot'>
        <img src='images/—Pngtree—future intelligent technology robot ai_5766888.png' id='bot-img' >
        <h6>{$row['bot']}</h6>
        </div> </div>";
    }
}
echo $conservation;
?>