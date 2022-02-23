<?php
require_once("connect.php");
session_start();
if (!empty($_SESSION['username'])){
    $username = $_SESSION['username'];
} else if(empty($_SESSION['username'])){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kreiraj temu</title>
</head>
<body>
<h1 style="text-align: center;">IT210 - DZ14 - Marko Josifović 4494</h1>
<h2 style="text-align: center;">Kreiraj temu</h2>
<?php
    if(isset($_SESSION['username'])){ ?>
    <p>Welcome <?php echo($_SESSION['username']);?></p>
    <a href="logout.php" style="font-size: 20px;">Logout</a>
    <div style="text-align: center;">
    <br>
    <a href="index.php" style="text-align: center; font-size: 20px;">Povratak na početnu</a>
    </div>
<?php } ?>
<hr>

<div style="text-align: center;">
<br><br><br>
    <form method="POST" action="createTema.php" style="text-align: center;">
        <input type="text" name="naslov" placeholder="Naslov teme" required>
        <br> <br>
        <button type="submit" name="kreirajTemu">Kreiraj Temu</button>
        <br> <br> 
    </form>
</div>
    
</body>
</html>