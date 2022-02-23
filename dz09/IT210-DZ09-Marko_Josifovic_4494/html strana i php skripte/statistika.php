<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=it210-domaci9-markoj4494", "root","");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    
    $sql = "SELECT naziv, cena, proizvodjac FROM robaprodavnice WHERE cena IN 
                (
                    SELECT MAX(cena) FROM robaprodavnice
                )";
    $exc = $con->query($sql);
    
    $row = $exc->fetch();
     echo "Najskuplji proizvod (MAX cena): <br><br>";

     echo "<table border=1> 
                        <th>Naziv</th>
                        <th>Proizvođač</th>
                        <th>Cena</th>";
    echo "<tr><td>" 
                . $row["naziv"]. "</td><td>" 
                . $row["proizvodjac"]. "</td><td>" 
                . $row["cena"] ."</td></tr>";
    echo "</table>";
    echo "<br><br>";
    
    
    $sql = "SELECT naziv, cena, proizvodjac FROM robaprodavnice WHERE cena IN 
                (
                    SELECT MIN(cena) FROM robaprodavnice
                )";
    $exc = $con->query($sql);
    
    $row = $exc->fetch();
    echo "Najjeftiniji proizvod (MIN cena): <br><br>";

    echo "<table border=1> 
                       <th>Naziv</th>
                       <th>Proizvođač</th>
                       <th>Cena</th>";
   echo "<tr><td>" 
               . $row["naziv"]. "</td><td>" 
               . $row["proizvodjac"]. "</td><td>" 
               . $row["cena"] ."</td></tr>";
    echo "</table>";
    echo "<br><br>";
          
    echo "Sortiranje u rastućem redosledu, prema ceni: ";
    echo "<br><br>";
    $sql = "SELECT * FROM robaprodavnice ORDER BY cena ASC";
    $exc = $con->query($sql);
    

    echo "<table border=1>  <th>Šifra</th>
                            <th>Naziv</th>
                            <th>Cena</th>
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