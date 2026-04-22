<?php

    $miArray = array(1,3,4,5,1);
    print_r($miArray);
    echo "<br><br>";
    echo "La longitud de mi array es ".sizeof($miArray);
    echo "<br><br>";
    $miArray2["dia"]="lunes";
    $miArray2["mes"]="agosto";
    $miArray2["año"]="2016";
    echo "<br><br>";
    var_dump($miArray2);
    unset($miArray2["año"]);
    echo "<br><br>";
    print_r($miArray2);
    $miArrayAlReves = array_reverse($miArray);
    echo "<br><br>";
    print_r($miArrayAlReves);
    $trozoArray = array_splice($miArray,2);
    echo "<br><br>";
    print_r($trozoArray);
?>  