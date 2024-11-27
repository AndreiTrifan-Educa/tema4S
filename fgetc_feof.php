<?php
    $nombreArchivo='E:\DAW2\EntornoServidor\UT4\ficheros\archivo.txt';
    if(file_exists($nombreArchivo)){
        $archivo=fopen($nombreArchivo, "r");
        while(!feof($archivo)){
            $car=fgetc($archivo);
            echo $car;
        }
    }else{
        echo "No se pudo abrir el fichero";
    }
?>