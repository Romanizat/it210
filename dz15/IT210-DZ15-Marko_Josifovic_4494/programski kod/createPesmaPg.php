<?php
require_once("connect.php");
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Pesmu</title>
</head>

<body>
    <div style="text-align: center;">
        <br> <br>
        <form action="createPesma.php" method="POST">
            <label for="naslov">Unesite naslov pesme:</label>
            <br> <br>
            <input type="text" name="naslov" required placeholder="NASLOV">
            <br> <br>
            <label for="autor">Unesite autora pesme:</label>
            <br><br>
            <input type="text" name="autor" placeholder="AUTOR" required>
            <br><br>
            <label for="embed">Unesite ID videa pesme sa YouTube-a:</label>
            <br><br>
            <input type="text" name="embed" required placeholder="youtube.com/watch?v=">
            <br><br>
            <input type="submit" value="Submit">
            <br><br>
        </form>
        <br>
        <br>
        <a href="index.php">Povratak na početnu</a>
        <br><br>
    </div>
</body>

</html>