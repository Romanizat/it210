<?php
    $naziv=$_POST['naziv'];
    $cena=$_POST['cena'];
    $username=$_POST['username'];
    try{
        $con = new PDO("mysql:host=localhost;dbname=it210_domaci11_markoj4494", "root","");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    
    $sql="INSERT INTO  artikal (naziv, cena, username) VALUES ('$naziv', '$cena', '$username')";
    $exc = $con->query($sql);
    if($exc) {
        print "Informacija je uspešno uneta u bazu.";
    }
    else {
        print "Greška prilikom unosa.";
    };
    echo "<br><a href='artikal.php'>Povratak na stranicu unosa</a>"; 
?>