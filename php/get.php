<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "not_uygulamasi";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $conn->prepare("SELECT sira_no, baslik, icerik, zaman FROM veriler ORDER BY sira_no ASC");
    $sql->execute();
    $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
    $arr = $sql->fetchAll();
    $counter = 1;

    foreach ($arr as $a) {
        $baslik = $a['baslik'];
        $icerik = $a['icerik'];
        $zaman = $a['zaman'];
        $sira = $a['sira_no'];
        
        echo "<tr>";
        echo "<th scope='row'>" . $counter . "</th>";
        echo "<td>" . $baslik . "</td>";
        echo "<td>" . $icerik . "</td>";
        echo "<td>" . $zaman . "</td>";
        echo "<td class='col-5 col-sm-4 col-md-3 col-lg-3 col-xl-2'>
            <button data-id='" . $sira . "' class='btn btn-warning text-dark me-3' id='editRow'>Düzenle</button>
            <button data-id='" . $sira . "' class='btn btn-danger text-light' id='removeRow'>Sil</button>
        </td>";
        echo "</tr>";

        $counter++;
    }
} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
$conn = null;
