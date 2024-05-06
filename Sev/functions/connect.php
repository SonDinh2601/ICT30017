<?php
// Establish connection to Database
require_once ("components/settings.php");
$conn = @new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("<p>Unable to connect to the database server.</p>" . "Error code " . $conn->connect_errno .
        ": " . $conn->connect_error . "</p>");
}

if (!@$conn->select_db($dbname)) {
    die("<p>Unable to select the database.</p>" . "<p>Error code " . $conn->errno .
        ": " . $conn->error . "</p>");
}
?>