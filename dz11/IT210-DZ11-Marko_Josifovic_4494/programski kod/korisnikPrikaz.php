<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=it210_domaci11_markoj4494", "root","");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    $sql="SELECT * FROM korisnik";
    $exc = $con->query($sql);

    echo "<table border=1>  <th>id</th>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Username</th>";
    while($row = $exc->fetch()){
        echo "<tr><td>" . $row["idKorisnik"] . "</td><td>" 
                . $row["ime"]. "</td><td>" 
                . $row["prezime"]. "</td><td>" 
                . $row["username"]."</td></tr>";
    }
    echo "</table>";
    echo "<br><br><a href='korisnik.html'>Povratak na stranicu unosa</a><br>";

?>