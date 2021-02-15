<?php


session_start();
$host = "localhost";
$username = "id16158607_awitsuqma";
$password = "Testtest123!";
$db = "id16158607_uas_awitsuqma";

try {
    $conn = new PDO("mysql:host=$host; dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
} catch (PDOException $e) {
    echo "ERROR : " . $e->getMessage();
}
