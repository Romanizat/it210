<?php
require_once("connect.php");
session_start();
if (!empty($_SESSION['username'])){
    $username = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Početna</title>
</head>
<body>
<h1 style="text-align: center;">IT210 - DZ14 - Marko Josifović 4494</h1>
<?php
  if (!isset($_SESSION['username'])) { ?>
    <div style="text-align: center;">
    <a href="loginPg.php" style="font-size: 20px;">Login</a>
    <br> <br>
    <a href="registerPg.php" style="font-size: 20px;">Register</a>
    </div>
<?php }  else if(isset($_SESSION['username'])){ ?>
    <p>Welcome <?php echo($_SESSION['username']);?></p>
    <a href="logout.php" style="font-size: 20px;">Logout</a>
    <div style="text-align: center;">
    <br>
    
    <br> <br>
    <a href="createTemaPg.php" style="font-size: 20px;">Kreiraj Temu</a>
    </div>
<?php } ?>
<hr>
<h2 style="text-align: center;">Teme Foruma</h2>


<?php
    if (!empty($_SESSION['username'])){
        $username = $_SESSION['username'];
        $stmt = $con->prepare("SELECT * FROM korisnik WHERE username='".$username."'");
        $stmt->execute();    
        $row = $stmt->fetch(); 
        $idKorisnik = $row['id'];
    }

?>


<?php 
    $sql = "SELECT * FROM tema t, korisnik k WHERE k.id=t.idKorisnik";
    $result = $con->query($sql);
    echo "<hr>";
   
    while ($row2 = $result->fetch()) { 
        $idTeme = $row2['idTeme'];?>
        <div style="text-align: center;">
            <h3><?php echo $row2['naslov']; ?></h3>
            <?php
            echo "Autor: " .$row2['username'] . "<br><br>";
            echo "<a href=\"komentari.php?id=".$idTeme."\">Komentari</a>";
            ?>
            <br> <br>
            <?php 
            if(isset($idKorisnik)){
            if($idKorisnik==$row2['idKorisnik']){ 
            echo "<a href=\"obrisiTemu.php?id=".$idTeme."\">Obriši temu</a>";
            }
        } ?>
        </div>
<?php } ?>
    
</body>
</html>