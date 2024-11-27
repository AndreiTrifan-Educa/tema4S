<?php
    $nombreArchivo = 'E:\DAW2\EntornoServidor\UT4\ficheros\archivo.txt';
    if (file_exists($nombreArchivo)) {
        $archivo = fopen($nombreArchivo, 'w+');
        echo "El archivo se abrió correctamente.";
        fclose($archivo); // No olvides cerrar
    } else {
        echo "No se pudo abrir '$nombreArchivo'.";
    }

    /*
    r  - Apertura para lectura. Puntero al principio del archivo
    r+ - Apertura para lectura y escritura. Puntero al principio del archivo
    
    w  - Apertura para escritura. Puntero al principio del archivo y lo sobreescribe. Si no existe se intenta crear.
    w+ - Apertura para lectura y escritura. Puntero al principio del archivo y lo sobreescribe. Si no existe se intenta crear.
    a  - Apertura para escritura. Puntero al final del archivo. Si no existe se intenta crear.
    a+ - Apertura para lectura y escritura. Puntero al final del archivo. Si no existe se intenta crear.
    */
?>