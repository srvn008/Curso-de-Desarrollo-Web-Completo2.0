<?php
    header("Content-Type: text/html; charset=UTF-8"); 
    $usuario = "Jose luis";
    if($usuario == "Rob" || $usuario == "Jose Luis"){
        //instrucciones que se ejecutan si es cierto
        echo "<h1>Bienvenido $usuario </h1>";
    }else{
        //En caso contrario
        //Vamos a mostrar lo siguiente
        echo "<h1>Lo sentimos $usuario, no tiene acceso al sistema</h1>";
    }
    $edad =20;
    //comprobar la mayoria de edad del usuario
    if($edad >= 18){
        echo "<h1>Puede acceder al sitio con esta edad</h1>";
    }else{
        echo "<h1>Lo sentimos $usuario, debe tener al menos 18 años</h1>";
    }
?>