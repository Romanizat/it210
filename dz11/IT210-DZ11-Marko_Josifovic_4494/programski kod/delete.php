<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=it210_domaci11_markoj4494", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrisano</title>
</head>

<body>
    <?php
    $sql = "DELETE FROM artikal WHERE artikal.idArtikal=$id";
    $exc = $con->query($sql);
    echo "Artikal obrisan!";
    echo "<br><br><a href='artikal.php'>Povratak na stranicu unosa</a><br>";
    ?>
</body>

</html>