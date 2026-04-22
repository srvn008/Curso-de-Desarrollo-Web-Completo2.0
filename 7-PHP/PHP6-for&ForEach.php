<?php
    header("Content-Type: text/html; charset=UTF-8"); 
   
    $familia = Array ("Penelope", "Jose Luis", "Antonio", "Pepe");

    echo "<p>Familia: </p>";


    for ($i = 0; $i < sizeof($familia); $i++) {
        echo "<p> $familia[$i] </p>";
    } 
    echo "<p>Fin del for</p>"


    foreach($familia as $clave => $valor){
       echo "<p> $familia[$clave] </p>"; 
    }


?>