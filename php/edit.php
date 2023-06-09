<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "not_uygulamasi";

try {
    $id = $_POST['dataid'];

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $conn->prepare("SELECT * FROM veriler WHERE sira_no = {$id}");
    $sql->execute();
    $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
    $arr = $sql->fetchAll();

    foreach ($arr as $a) {
        echo $a['baslik'] . "|-|*|.|_|" . $a['icerik'];
    }
} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
$conn = null;
