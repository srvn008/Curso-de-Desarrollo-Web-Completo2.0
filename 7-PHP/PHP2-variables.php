<?php

    $nombre = "Jose Luis";
    $nombre2 = "Curso de Desarrollo Web Completo";
    echo "<html>\n\t<head>\n\t\t<meta charset=\"utf-8\">\n\t</head>";
    echo "\n<body>";
    echo "\n\t<p>Mi nombre es $nombre</p>";
    echo "\n\t<p>".$nombre." es el instructor del ".$nombre2."</p>";
    echo "\n</body>";
    echo "\n</html>";
    $numero = 50;
    $calculo = $numero / 2 + 6;
    echo $calculo/4;
    $logico = false;
    echo "<p>El tipo booleano o lógico siguiente tiene el valor de $logico</p>";
    $variableNombre = "nombre";
    echo $$variableNombre;
?>