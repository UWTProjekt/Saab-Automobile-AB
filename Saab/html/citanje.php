<!DOCTYPE html>
</head>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<title>SAAB Automobile AB</title>
<style>
html {
  scroll-behavior: smooth;
}
</style>
</head>
<body style="background-color: black; color: white;">
<h1 style="color: white;" id="pocetak">Dobrodošli u bazu podataka!</h1>
<ul>
        <li><a href="s5.html">Povratak na stranicu</a></li>
        <li><a href="citanje.php">Lista prijava</li>
	<li><a href="uredivanjePHP.php?ime=<?php echo $row['ime']; ?>&prezime=<?php echo $row['prezime']; ?>">Uredi</a></li>
	<li><a href="brisanje.php?id=<?php echo $row['3']; ?>" onclick="return confirm('Jeste li sigurni da želite obrisati ovaj zapis?')">Obriši</a></li>
	<li><a href="#kraj">Skoči na kraj liste</a></li>
</ul>

<hr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saab";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ime, prezime, datum, model FROM probna_voznja";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "Ime: " . $row["ime"]. " <br> Prezime: " . $row["prezime"]. " <br> Datum: " . $row["datum"]. " <br> Model: " . $row["model"]. "<br><br>";
}
} else {
    echo "Nema rezultata.";
}
$conn->close();
?>
<p id="kraj"></p>
<hr>
<p style="text-align: center;"><a href="#pocetak">Skoči na početak liste</a></p>

</body>
</html>

