<?php
include 'config.php';
// Create a connection

$sql = "DELETE FROM conservation";


$result = mysqli_query($connect, $sql) or die("Query Failed");


if ($result) {
    echo "All data deleted successfully.";
} else {
    echo "Error deleting data: " . $conn->error;
}

// Close the connection

?>
