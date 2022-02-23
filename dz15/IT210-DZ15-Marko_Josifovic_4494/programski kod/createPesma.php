<?php
require_once("connect.php");
session_start();
if (empty($_SESSION['username'])) {
    header('Location: index.php');
}
?>

<?php 

if(!empty($_POST['naslov']) && !empty($_POST['autor']) && !empty($_POST['embed'])){
        $naslov = $_POST['naslov'];
        $autor = $_POST['autor'];
        $embed = $_POST['embed'];
        $stmt = $con->prepare("INSERT INTO pesma (naslov, autor, embed) VALUES (:naslov, :autor, :embed)");
        $stmt->bindParam(":naslov", $naslov);
        $stmt->bindParam(":autor", $autor);
        $stmt->bindParam(":embed", $embed);
        $stmt->execute();
        header('Location: index.php');
    }else {
        header('Location: createPesmaPg.php');
    }
?>