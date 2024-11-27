<?php
//Creamos, escribimos y cerramos un fichero

$file='E:\DAW2\EntornoServidor\UT4\ficheros\miarchivo.txt';
$texto="Hola, esto está escrito en el fichero";

$fp=fopen($file, "w");
//Si queremos añadir texto y no sobreescribir, debe abrirse a+
//$fp=fopen($file, "a+");

fwrite($fp, $texto);
fclose($fp);
?>