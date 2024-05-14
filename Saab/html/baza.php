<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saab";
$ime = filter_input(INPUT_POST,'ime');
$prezime = filter_input(INPUT_POST,'prezime');
$datum = filter_input(INPUT_POST,'datum');
$model = filter_input(INPUT_POST,'model');

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO probna_voznja (ime, prezime, datum, model)
VALUES ('$ime','$prezime','$datum', '$model')";
if($conn->query($sql)=== TRUE){
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
?>


<!DOCTYPE html>
</head>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<title>SAAB Automobile AB</title>
<style>
.sredina {
display: block;
margin-left: auto;
margin-right: auto;
margin-top: 100px;
}
</style>
</head>
<body style="background-color: black; color: white;">
<h1 style="color: white;">Uspješna prijava!</h1>
<ul>
        <li><a href="S5.html">Povratak na stranicu</a></li>
        <li><a href="citanje.php">Lista prijava</a></li>
	<li><a href="uredivanjePHP.php?ime=<?php echo $row['ime']; ?>&prezime=<?php echo $row['prezime']; ?>">Uredi</a></li>
	<li><a href="brisanje.php?id=<?php echo $row['3']; ?>" onclick="return confirm('Jeste li sigurni da želite obrisati ovaj zapis?')">Obriši</a></li>
</ul>
<img src="/Saab/slike/kvacica.png" alt="Kvačica" width="256" height="256" class="sredina">
</body>
</html>
