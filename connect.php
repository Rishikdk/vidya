<?php
$servername = "localhost:3300";
$username = 'root';
$password = 'root';
$dbname = "vidya";

// Create Connection
$mysql = mysqli_connect($servername, $username, $password, $dbname);

if (!$mysql) {
    die('Could not connect to db server');
}
// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("connection Failed: " . $conn->connect_error);
// }
echo "connection success";
?>