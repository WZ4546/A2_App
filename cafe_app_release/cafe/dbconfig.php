<?php

//set the values here
$db_url = "database-2.cdwozovmcy8n.us-east-1.rds.amazonaws.com";
$db_user = "web_user";
$db_password = "password";
$db_name = "cafe_db";

try {
    $pdo = new PDO("mysql:host=$db_url;dbname=$db_name", $db_user, $db_password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
