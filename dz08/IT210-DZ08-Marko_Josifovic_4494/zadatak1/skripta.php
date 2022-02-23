<?php
    //Napisati PHP skriptu koja će obraditi ulaz sa forme i ispisati podatke

    $ime=$_GET['ime'];
    echo "<u>Ime:</u> ".$ime;
    echo "<br><br>";

    $prezime=$_GET['prezime'];
    echo "<u>Prezime:</u> ".$prezime;
    echo "<br><br>";

    $pol=$_GET['pol'];
    echo "<u>Pol:</u> ".$pol;
    echo "<br><br>";

    $jezik="<u>Govori:</u>";

    if (isset($_GET['jezik1'])) {
        $jezik .=" ". $_GET['jezik1'];
    }

    if (isset($_GET['jezik2'])) {
        $jezik .=", ".$_GET['jezik2'];
    }

    if (isset($_GET['jezik3'])) {
        $jezik .=", ".$_GET['jezik3'];
    }

    if (isset($_GET['jezik4'])) {
        $jezik .= ", ".$_GET['jezik4'];
    }

    echo $jezik;
    echo "<br><br>";

    echo "<u>Omiljena boja:</u> ".$_GET['boja'];

?>