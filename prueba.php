<?php
    $nombreArchivo = 'E:\DAW2\EntornoServidor\UT4\ficheros\archivo.txt';
    if(file_exists($nombreArchivo)){
        $archivo=fopen($nombreArchivo, "r");
        echo "El archivo se ha abierto correctamente";
        fclose($archivo);
    }else{
        echo "El archivo no se ha podido abrir";
    }
?>