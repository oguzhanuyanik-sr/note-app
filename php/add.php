<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "not_uygulamasi";

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = htmlspecialchars($_POST['title']);
        $desc = htmlspecialchars($_POST['desc']);

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO veriler (baslik, icerik) VALUES ('{$title}', '{$desc}')";
        $conn->exec($sql);
    }
} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
$conn = null;
