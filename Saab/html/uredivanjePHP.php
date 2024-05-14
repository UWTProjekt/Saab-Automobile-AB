<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saab";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE probna_voznja SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Zapis uspješno ažuriran.";
} else {
  echo "Greška u ažuriranju zapisa: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi prijavu</title>
</head>
<body style="background-color: black; color: white;">
    <h1 style="color: white;">Uredi prijavu</h1>
    <form method="post">
        <p>Ime: <input type="text" name="ime" value="<?php echo $ime; ?>"></p>
        <p>Prezime: <input type="text" name="prezime" value="<?php echo $prezime; ?>"></p>
        <p>Datum: <input type="text" name="datum" value="<?php echo $datum; ?>"></p>
        <p>Model: <input type="text" name="model" value="<?php echo $model; ?>"></p>
        <input type="submit" value="Ažuriraj">
    </form>
</body>
</html>