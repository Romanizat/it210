<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikli - Marko Josifović 4494</title>
</head>
<body>
<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=it210_domaci11_markoj4494", "root","");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    $sql="SELECT * FROM artikal";
    $exc = $con->query($sql);

    echo "<table border=1>
                            <th>Naziv</th>
                            <th>Cena</th>";
    
    while($row = $exc->fetch()){
        echo "<tr><td><a href='artikalSingle.php?id=" .$row["idArtikal"] ."'>$row[naziv]</a>" . "</td><td>" 
                . $row["cena"]. "</td><td>"
                ."<a href=\"delete.php?id=".$row["idArtikal"]."\">Obriši</a>" . "</td></tr>";
    }
    echo "</table>";
    echo "<br><br><a href='artikal.php'>Povratak na stranicu unosa</a><br>";
?>
</body>
</html>