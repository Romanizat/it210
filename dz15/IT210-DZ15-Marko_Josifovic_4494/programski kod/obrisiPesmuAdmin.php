<?php
require_once("connect.php");
session_start();
$admin = $_SESSION['admin'];
if (empty($_SESSION['username'])) {
    header('Location: index.php');
}
if ($admin != 1) {
    header('Location: index.php');
}
?>


<?php  
    $id = $_POST["id_pesma"];
    $stmt = $con->prepare("SELECT * FROM pesma WHERE id_pesma=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $row = $stmt->fetch();
    $embed = $row['embed'];

    $stmt2 = $con->prepare("DELETE FROM pesma WHERE id_pesma=:id");
    $stmt2->bindParam(":id", $id);
    $stmt2->execute();

    $stmt3 = $con->prepare("DELETE FROM sample WHERE embed_kopija=:embed OR embed_original=:embed");
    $stmt3->bindParam(":embed", $embed);
    $stmt3->execute();
    header('Location: adminPanel.php');
?>