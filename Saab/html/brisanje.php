<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saab";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "DELETE FROM probna_voznja WHERE id=3";
    
    if ($conn->query($sql) === TRUE) {
        echo "Zapis je uspješno obrisan.";
    } else {
        echo "Greška pri brisanju zapisa: " . $conn->error;
    }
}

$conn->close();
?>