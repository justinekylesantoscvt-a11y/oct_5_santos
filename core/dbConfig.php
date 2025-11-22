<?php
// ... other definitions
$db_user = "root";  // User is root
$db_pass = "";      // **CRITICAL: Password must be an empty string for XAMPP default.**
$db_host = "localhost";
$db_name = "student_management_system"; // Based on your phpMyAdmin screenshot
// ... other definitions

// Inside core/dbConfig.php

try {
    // THIS LINE MUST USE $pdo
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    // ...
} catch(PDOException $e) {
    // ...
}