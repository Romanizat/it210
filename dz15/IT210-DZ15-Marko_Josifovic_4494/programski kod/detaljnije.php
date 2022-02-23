<?php
require_once("connect.php");
session_start();
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detaljnije o pesmi</title>
</head>

<?php
$stmt = $con->prepare("SELECT * FROM pesma WHERE embed='".$id."'");
$stmt->execute();    
$row = $stmt->fetch(); 
$naslov = $row['naslov'];
$autor = $row['autor'];
$embed = $row['embed'];

?>

<body>
    <h1 style="text-align: center;">IT210 - DZ15 - Marko Josifović 4494</h1>
    <hr>
    <div style="text-align: center;">
        <h2>Naslov: <?php echo $naslov; ?> </h2>
        <h2>Autor: <?php echo $autor; ?></h2>
        <br><br>
        <iframe width="400" height="300" src="https://www.youtube.com/embed/<?php echo $embed; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br><br>
        <a target="_blank" href="https://www.youtube.com/watch?v=<?php echo $embed; ?>">Otvorite na YouTube-u</a>            
        <br><br><br><br>
        <a href="index.php">Povratak na početnu</a>
        <br><br>
    </div>
</body>

</html>