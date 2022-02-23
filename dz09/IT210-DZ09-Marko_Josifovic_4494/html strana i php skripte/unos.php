<?php

    $sifra=$_POST['sifra'];
    $naziv=$_POST['naziv'];
    $cena=$_POST['cena'];
    $kolicina=$_POST['kolicina'];
    $proizvodjac=$_POST['proizvodjac'];
    $vrsta=$_POST['vrsta'];

    try{
        $con = new PDO("mysql:host=localhost;dbname=it210-domaci9-markoj4494", "root","");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    
    $sql="INSERT INTO  robaprodavnice (sifra, naziv, cena, kolicina, proizvodjac, vrsta) VALUES ('$sifra','$naziv','$cena','$kolicina','$proizvodjac', '$vrsta')";
    $exc = $con->query($sql);
    if($exc) {
        print "Informacija je uspešno uneta u bazu.";
    }
    else {
        print "Greska prilikom unosa.";
    };
    echo "<br><a href='index.html'> Povratak na stranicu unosa </a>";

?>