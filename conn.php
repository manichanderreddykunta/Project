<?php
   $hostname = "localhost";
$dbname = "onlineshop";
$username = "root";
$password = "";

    try {
        $connection = new PDO("mysql:host=$hostname;dbname=onlineshop", $username, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Database connected successfully";
    } catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }
?>