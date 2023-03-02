<?php
$severName = "localhost";
$username = "root";
$password = "";
$myDB = "tuan1";
$conn;

try {
    $conn = new PDO("mysql:host=$severName;dbname=$myDB", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}

?>
