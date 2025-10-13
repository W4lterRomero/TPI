<?php 

spl_autoload_register(function ($class) {
    $ruta = "../" . str_replace("\\" ,"/", $class) . ".php";

    if (file_exists($ruta)) {
        require $ruta;
    }
    else {
        die("No se pudo cargar la ruta $ruta");
    }

});



?>