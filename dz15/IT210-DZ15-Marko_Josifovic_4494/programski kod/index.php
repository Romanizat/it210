<?php
require_once("connect.php");
session_start();
$admin;
if (!empty($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
if (isset($_SESSION['admin'])) {
    $admin = $_SESSION['admin'];
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
    <h1 style="text-align: center;">IT210 - DZ15 - Marko Josifović 4494</h1>
    <?php
    if (!isset($_SESSION['username'])) { ?>
        <div style="text-align: center;">
            <a href="loginPg.php" style="font-size: 20px;">Login</a>
            <br> <br>
            <a href="registerPg.php" style="font-size: 20px;">Register</a>
        </div>
    <?php } else if (isset($_SESSION['username'])) { ?>
        <p>Welcome <?php echo ($_SESSION['username']); ?></p>
        <a href="logout.php" style="font-size: 20px;">Logout</a>
        <div style="text-align: center;">
            <br><br><br>
            <a href="createSamplePg.php" style="font-size: 20px;">Dodaj Sample</a>
            <br><br>
            <a href="createPesmaPg.php" style="font-size: 20px;">Dodaj Pesmu u bazu</a>
            <br><br>
            <?php
            if ($admin == 1) {
                echo "<a href=\"adminPanel.php\">Admin Panel</a>";
            }
            ?>
        </div>
    <?php } ?>
    <hr>
    <h2 style="text-align: center;">Sample-ovi</h2>


    <?php

    if (!empty($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $stmt = $con->prepare("SELECT * FROM korisnik WHERE username='" . $username . "'");
        $stmt->execute();
        $row = $stmt->fetch();
        $idKorisnik = $row['id'];
    }

    ?>


    <?php
    $sql = "SELECT * FROM sample";
    $result = $con->query($sql);
    echo "<hr>";

    while ($row2 = $result->fetch()) {
        $idSample = $row2['id_sample']; ?>
        <div class="float-container" style="text-align: center;">
            <div class="float-left">
                <h3>Kopija:</h3>
                <br>
                <iframe width="400" height="300" src="https://www.youtube.com/embed/<?php echo $row2['embed_kopija']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br><br>
                <a href="detaljnije.php?id=<?php echo $row2['embed_kopija']; ?>">Detaljnije</a>

            </div>
            <div class="float-right">
                <h3>Original:</h3>
                <br>
                <iframe width="400" height="300" src="https://www.youtube.com/embed/<?php echo $row2['embed_original']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br><br>
                <a href="detaljnije.php?id=<?php echo $row2['embed_original']; ?>">Detaljnije</a>
            </div>
        </div>

        <div class="center">
            <?php
            if (isset($idKorisnik)) {
                if ($idKorisnik == $row2['id_k']) { ?>
                    <a class="center" href="obrisiSample.php?id=<?php echo $idSample; ?>">Obriši sample</a>
            <?php }
            } ?>
        </div>
        <br><br><br>
        <hr>
    <?php } ?>

</body>

</html>

<style>
    .float-container {
        display: flex;
    }

    .float-left {
        flex: 0 0 50%;
    }

    .float-right {
        flex: 1;
    }

    .center {
        text-align: center;
        position: absolute;
        left: 50%;
    }
</style>