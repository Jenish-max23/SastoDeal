<?php

$db_name = "mysql:host=localhost;dbname=shop_db;charset=utf8";
$username = "root";
$password = "";

try {
    $conn = new PDO($db_name, $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
