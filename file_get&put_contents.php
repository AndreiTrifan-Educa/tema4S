<?php
    $contenido = file_get_contents('E:\DAW2\EntornoServidor\UT4\ficheros\archivo.txt');
    echo "Contenido del fichero: $contenido<br>";
    $res=file_put_contents("E:\DAW2\EntornoServidor\UT4\\ficheros\\file_put_contents.txt", "Fichero creado con file put_contents");
    if($res){
        echo "Fichero creado con éxito";
    }else{
        echo "Error al crear el fichero";
    }
?>