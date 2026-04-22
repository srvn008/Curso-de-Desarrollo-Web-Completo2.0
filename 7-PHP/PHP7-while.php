<?php
    header("Content-Type: text/html; charset=UTF-8"); 
    
    $i=0;

    while($i <sizeof($familia)){
        //Instrucciones que se ejecutan 
        echo "<p>Familia [$i] </p>";
        //Modificacion de i
        $i++;
    }
    

?>