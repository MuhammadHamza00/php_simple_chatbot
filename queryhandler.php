<?php
include 'config.php';
$search = $_POST["search"];

$sql = "SELECT * FROM feed WHERE h_text = '$search'";


$result = mysqli_query($connect, $sql) or die("Query Failed");

if (mysqli_num_rows($result) >= 0) {
    $row =  mysqli_fetch_assoc($result);
    $f_id = $row["f_id"];
    $f_hum = $row["h_text"];
    $f_bot = $row["b_text"];
    if (empty($f_hum) || empty($f_bot)) {
        $f_hum = $search;
        $f_bot = "I Did Not Understand Your Query!";
        $sql = "INSERT INTO `conservation` (id,`bot`,`human`,`time`)
        VALUES ('','$f_bot','$f_hum',NOW())";
        $result = mysqli_query($connect, $sql);
    }
    else{
        $sql = "INSERT INTO `conservation` (id,`bot`,`human`,`time`)
        VALUES ('','$f_bot','$f_hum',NOW())";
        $result = mysqli_query($connect, $sql);
    }
}


$output = "Suceessfull";
// $human_text = "";

// $human_text .= '<div class="human">
// <h6 id="human-text">' . $search . '</h6>
// <img src="images/avatar5.png" id="human-img" alt="">
// </div>';
// $output = "";
// if  ($search == "hello"){
//     $output .= ' <div class="bot">
//     <img src="images/—Pngtree—future intelligent technology robot ai_5766888.png" id="bot-img" alt="">
//     <h6>HI</h6>
// </div>';

// }
// else{
//     $output .= ' <div class="bot">
//     <img src="images/—Pngtree—future intelligent technology robot ai_5766888.png" id="bot-img" alt="">
//     <h6>Nothing to Show!</h6>
// </div>';
// }
// $new = "<h1>alsdhashdlash</h1>";
// $response = array(
//     'output' => $output,
//     'human_text' => $human_text,
//     'text'=> $new
// );

// echo json_encode($response);
