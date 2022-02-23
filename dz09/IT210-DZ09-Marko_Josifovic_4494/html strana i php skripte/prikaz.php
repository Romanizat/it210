<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=it210-domaci9-markoj4494", "root","");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    $sql="SELECT * FROM robaprodavnice";
    $exc = $con->query($sql);

    echo "<table border=1>  <th>Šifra</th>
                            <th>Naziv</th><th>Cena</th>
                            <th>Količina</th>
                            <th>Proizvođač</th>
                            <th>Vrsta</th>";
    while($row = $exc->fetch()){
        echo "<tr><td>" . $row["sifra"] . "</td><td>" 
                . $row["naziv"]. "</td><td>" 
                . $row["cena"]. "</td><td>" 
                . $row["kolicina"]. "</td><td>" 
                . $row["proizvodjac"] ."</td><td>"
                . $row["vrsta"] ."</td></tr>";
    }
    echo "</table>";
    echo "<br><br><a href='index.html'>Povratak na stranicu unosa</a><br>";

?>