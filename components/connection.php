<?php
    $server_name = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'ecommerce';

    try {
        $conn = new PDO("mysql:host=$server_name;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage() . "\n";
    }
?>