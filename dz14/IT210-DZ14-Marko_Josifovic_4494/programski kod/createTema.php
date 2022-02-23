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


if(!empty($_POST['naslov'])){
        $naslov = $_POST['naslov'];
        $stmt = $con->prepare("INSERT INTO tema (naslov, idKorisnik) VALUES (:naslov, :idKorisnik)");
        $stmt->bindParam(":naslov", $naslov);
        $stmt->bindParam(":idKorisnik", $idKorisnik);
        $stmt->execute();
        header('Location: index.php');
    }else {
        header('Location: createTemaPg.php');
    }
?>