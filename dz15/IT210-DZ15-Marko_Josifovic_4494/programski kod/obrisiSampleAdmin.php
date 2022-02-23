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
    $id = $_POST["id_sample"];
    $stmt = $con->prepare("DELETE FROM sample WHERE id_sample=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header('Location: adminPanel.php');
?>