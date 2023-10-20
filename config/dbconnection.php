<?php
    $host = 'localhost';
    $dbname = 'id21429465_homee';
    $username = 'id21429465_homee';
    $password = 'Homee_123';

    try {
        $conn = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
  