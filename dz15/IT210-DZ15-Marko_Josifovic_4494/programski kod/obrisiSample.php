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


$stmt = $con->prepare("SELECT * FROM sample WHERE id_sample='".$id."'");
$stmt->execute();    
$row = $stmt->fetch(); 
$idKorisnikSample = $row['id_k'];

if($idKorisnik==$idKorisnikSample){
    $stmt = $con->prepare("DELETE FROM sample WHERE id_sample=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header('Location: index.php');
}else{
    header('Location: index.php');
}
?>