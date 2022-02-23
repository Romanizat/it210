<?php
    //Napisati PHP skritpu koja će ispisati zbir svih neparnih brojeva od 1 do unetog broja.

    $vrednost=$_GET["vrednost"];
    $suma=0;
    for($i=1;$i<=$vrednost;$i++){
        if($i%2!=0){
            $suma+=$i;
        }
    }
    echo "Suma svih neparnih od 1 do ".$vrednost." je ".$suma;
?>