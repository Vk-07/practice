<?php

    // Database connection settings
    $host = "localhost";
    $db_name = "school";
    $username = "root";
    $password = "";

    // Create database connection

    // New mysqli(host, username, password, database)
    $conn = new mysqli($host, $username, $password, $db_name);
    if (!$conn -> connect_error) {
        // echo "connection successful!";
    }


?>