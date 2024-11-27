<?php
try {
    $nombreArchivo = 'archivo.txt';
    
    // Comprobamos si el archivo existe antes de intentar abrirlo
    if (!file_exists($nombreArchivo)) {
        throw new Exception("El archivo '$nombreArchivo' no existe.");
    }

    $archivo = fopen($nombreArchivo, 'r');
    if (!$archivo) {
        throw new Exception("No se pudo abrir el archivo '$nombreArchivo'.");
    }

    echo "El archivo se abrió correctamente.";
    fclose($archivo); // No olvides cerrar el archivo
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
