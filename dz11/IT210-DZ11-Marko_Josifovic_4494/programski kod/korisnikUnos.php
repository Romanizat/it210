<?php
    $ime=$_POST['ime'];
    $prezime=$_POST['prezime'];
    $username=$_POST['username'];
    try{
        $con = new PDO("mysql:host=localhost;dbname=it210_domaci11_markoj4494", "root","");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    
    $sql="INSERT INTO  korisnik (ime, prezime, username) VALUES ('$ime', '$prezime', '$username')";
    $exc=null;

    try{
        $exc = $con->query($sql);
    } catch(PDOException $e){
        echo "Duplikat unos, username postoji u bazi! <br> ";
    }
    if($exc) {
        print "Informacija je uspešno uneta u bazu.";
    } else{
        print "Greška prilikom unosa.";
    };
    
    echo "<br><a href='korisnik.html'>Povratak na stranicu unosa</a>";
