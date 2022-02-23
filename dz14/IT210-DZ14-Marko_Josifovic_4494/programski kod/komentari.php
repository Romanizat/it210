<?php
require_once("connect.php");
session_start();
if (!empty($_SESSION['username'])){
    $username = $_SESSION['username'];
}
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentari</title>
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
    </div>
<?php } ?>
<hr>
<h2 style="text-align: center;">Komentari teme</h2>
<a href="index.php" style="font-size: 20px;">Povratak na početnu</a>

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
    $sql = "SELECT * FROM komentar kom, korisnik k, tema t WHERE (kom.idTemeKom=$id AND k.id=kom.idAutor AND t.idTeme=$id)";
    $result = $con->query($sql);

    $sql3 = "SELECT * FROM tema WHERE idTeme='".$id."'";
    $result3 = $con->query($sql3);
    $row3 = $result3->fetch();
    echo "<hr>"; ?>
    
    <h3 style="text-align: center;">Tema: <?php echo $row3['naslov']; ?></h3> 

    <?php 
        while ($row2 = $result->fetch()) {?>
        <div style="text-align: center;">
            <br>
            <br>
            <br>
            <br>
            <br>
            <?php
            echo "'".$row2['tekst'] . "'"."<br><br>";
            echo "Autor komentara: ".$row2['username'];
            ?>
            <br> <br>
            <?php 
            if(!empty($idKorisnik)){
            if($idKorisnik==$row2['idAutor']){ 
            echo "<a href=\"obrisiKomentar.php?id=".$row2['idKomentar']."\">Obriši komentar</a>";
            }
        } ?>
        </div>
<?php } ?>

<div style="text-align: center;">
    <h3>Ostavite komentar na temu</h3>
    <form action="komentarisi.php?id=<?php echo $id; ?>" method="POST">
        <textarea name="tekst" cols="30" rows="10" placeholder="Unesite komentar..."></textarea>
        <br>
        <br>
        <button type="submit" name="komentarisi">Komentarišite</button>
    </form>
</div>
    
</body>
</html>