<?php
$server_name = "fdb21.awardspace.net";
$username = "3849092_heyshay";
$password = "LA@e]eBU1r4O2/3y";
$database = "3849092_heyshay";

$conn = new mysqli($server_name, $username, $password, $database);

if ($conn->connect_error) {
    error_log("Connection failed: ". $conn->connect_error);
} else {
    error_log('Connected');
}
?>
