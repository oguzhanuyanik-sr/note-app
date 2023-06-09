<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "not_uygulamasi";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM veriler";
    $conn->exec($sql);
} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
$conn = null;
