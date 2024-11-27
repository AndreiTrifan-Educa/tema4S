<?php
/*
 __LINE__ -> The current line number of the file.
__FILE__ -> The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.
__DIR__	-> The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.
__FUNCTION__ -> The function name, or {closure} for anonymous functions.
__CLASS__ -> The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). When used in a trait method, __CLASS__ is the name of the class the trait is used in.
__TRAIT__ -> The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar).
__METHOD__ -> The class method name.
__PROPERTY__ -> Only valid inside a property hook. It is equal to the name of the property.
__NAMESPACE__ -> The name of the current namespace.
*/

// Supongamos "index.php" en la carpeta "proyecto".
// Usamos __DIR__ para incluir "config.php" que está en la misma carpeta.
require_once __DIR__.'/config.php';
// Podemos usar __DIR__ para incluir un archivo en una subcarpeta.
require_once __DIR__.'/biblioteca/funciones.php';
// Imprimimos el directorio actual
echo "Directorio actual: ".__DIR__;
?>