<?php
require_once("connect.php");
session_start();
if (empty($_SESSION['username'])) {
    header('Location: index.php');
}
?>

<?php  
 $username = $_SESSION['username'];
 $stmt2 = $con->prepare("SELECT * FROM korisnik WHERE username='".$username."'");
 $stmt2->execute();    
 $row2 = $stmt2->fetch(); 
 $idKorisnik = $row2['id'];

if(!empty($_POST['tekst'])){
    $tekst = $_POST['tekst'];
    $id = $_GET['id'];
    echo $id;
    $stmt = $con->prepare("INSERT INTO komentar (tekst, idAutor, idTemeKom) VALUES (:tekst, :idAutor, :idTemeKom)");
    $stmt->bindParam(":tekst", $tekst);
    $stmt->bindParam(":idAutor", $idKorisnik);
    $stmt->bindParam(":idTemeKom", $id);
    $stmt->execute();
    header('Location: index.php');
}else {
    header('Location: index.php');
}
?>