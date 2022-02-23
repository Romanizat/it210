<?php
require_once("connect.php");
session_start();
if (empty($_SESSION['username'])) {
    header('Location: index.php');
}
$id = $_GET["id"];
?>

<?php  
 $username = $_SESSION['username'];
 $stmt2 = $con->prepare("SELECT * FROM korisnik WHERE username='".$username."'");
 $stmt2->execute();    
 $row2 = $stmt2->fetch(); 
 $idKorisnik = $row2['id'];


$stmt = $con->prepare("SELECT * FROM tema WHERE idTeme='".$id."'");
$stmt->execute();    
$row = $stmt->fetch(); 
$idKorisnikTeme = $row['idKorisnik'];

if($idKorisnik==$idKorisnikTeme){
    $stmt = $con->prepare("DELETE FROM tema WHERE idTeme=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header('Location: index.php');
}else{
    header('Location: index.php');
}
?>