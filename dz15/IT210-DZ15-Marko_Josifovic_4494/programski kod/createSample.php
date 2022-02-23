<?php
require_once("connect.php");
session_start();
$username;
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
if (isset($_SESSION['username'])) {
    $username = $_SESSION["username"];
}

?>

<?php
$stmt1 = ("SELECT id from korisnik WHERE username='" . $username . "'");
$result = $con->query($stmt1);
$row = $result->fetch();
$idKorisnik = $row["id"];
?>

<?php

try {
    if (!empty($_POST['embed_kopija']) && !empty($_POST['embed_original'])) {

        $kopija = $_POST['embed_kopija'];
        $original = $_POST['embed_original'];
        $stmt = $con->prepare("INSERT INTO sample (embed_kopija, embed_original, id_k) 
        VALUES (:embed_kopija, :embed_original, :id_k)");
        $stmt->bindParam(":embed_kopija", $kopija);
        $stmt->bindParam(":embed_original", $original);
        $stmt->bindParam(":id_k", $idKorisnik);
        $stmt->execute();
        header('Location: index.php');
    } else {
        header('Location: createSamplePg.php');
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    echo "<br><br>";
    echo "Ukoliko korisnik unese isti par pesmi kao novi sample, to je ograniceno na nivou baze";
    echo "<br><br>";
    echo "<a href=\"index.php\">Povratak</a>";
}
?>