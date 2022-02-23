<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=it210_domaci11_markoj4494", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$idArtikla = $_GET["id"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jedan artikal - Marko Josifović 4494</title>
</head>

<body style="text-align: center; margin-top: 20%;">
    <?php
    $stmt = $con->prepare("SELECT * FROM artikal, korisnik WHERE artikal.idArtikal=$idArtikla 
    AND artikal.username=korisnik.username");
    $stmt->bindParam(":id", $idArtikla);
    $stmt->execute();
    while ($data = $stmt->fetch()) {
        echo "ID: " . $data["idArtikal"] . "<br>" .
        "Naziv: " . $data["naziv"] . "<br>" .
        "Cena: " . $data["cena"] . "<br>" .
        "Username korisnika koji prodaje: " . $data["username"] . "<br>" .
        "Ime korisnika: " . $data["ime"] . "<br>" .
        "Prezime korisnika: " . $data["prezime"];
    }
    echo "<br><br><a href='artikal.php'>Povratak na stranicu unosa</a><br>";

    ?>
</body>

</html>