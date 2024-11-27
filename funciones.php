<?php
// ! – Comentarios importantes o de advertencia, en color rojo.
// * – Comentarios de resaltado o énfasis, en color verde.
// ? – Comentarios de duda o preguntas, en color azul.
// - Comentarios de tareas pendientes, en color naranja.

// - Funciones de Arrays
    // * array_reverse() - Invierte el orden de los elementos de un array.
    $numeros = [1, 2, 3];
    print_r(array_reverse($numeros)); // Salida: Array ( [0] => 3 [1] => 2 [2] => 1 )

    // * array_slice() - Extrae una porción de un array.
    $numeros = [1, 2, 3, 4, 5];
    print_r(array_slice($numeros, 2, 2)); // Salida: Array ( [0] => 3 [1] => 4 )

    // * array_merge() - Combina dos o más arrays.
    $array1 = [1, 2];
    $array2 = [3, 4];
    print_r(array_merge($array1, $array2)); // Salida: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )

    // * implode() - Une los elementos de un array en un único string.
    $array = ["PHP", "es", "genial"];
    $resultado = implode(" ", $array); // Usa un espacio como separador.
    echo $resultado; // Salida: "PHP es genial"

    // * array_filter() - Crea un nuevo array con elementos que cumplen una condición.
    $numeros = [1, 2, 3, 4, 5];
    $pares = array_filter($numeros, fn($n) => $n % 2 === 0);
    print_r($pares); // Salida: [2, 4]

    // * in_array() - Verifica si un valor está presente en un array.
    $frutas = ["manzana", "banana", "cereza"];
    $contiene = in_array("banana", $frutas);
    var_dump($contiene); // Salida: true

    // * array_search() - Devuelve la clave del primer elemento que coincide con el valor dado.
    $clave = array_search("banana", $frutas);
    echo $clave; // Salida: 1

    // * array_splice() - Elimina o reemplaza una parte de un array.
    $frutas = ['manzana', 'banana', 'naranja', 'fresa'];
    array_splice($frutas, 1, 2, ['kiwi', 'mango']); // Elimina 2 elementos desde índice 1 y los reemplaza
    print_r($frutas); // Salida: ['manzana', '
    
    // * sort() - Ordena un array en orden ascendente, modificándolo directamente.
    $numeros = [4, 2, 5, 1, 3];
    sort($numeros);
    print_r($numeros); // Salida: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

    // * rsort() - Ordena un array en orden descendente, modificándolo directamente.
    $numeros = [4, 2, 5, 1, 3];
    sort($numeros);
    print_r($numeros); // Salida: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
    
    // * asort() - Ordena un array en orden ascendente, manteniendo las claves asociadas.
    $edades = ["Juan" => 30, "Ana" => 25, "Luis" => 35];
    asort($edades);
    print_r($edades); // Salida: Array ( [Ana] => 25 [Juan] => 30 [Luis] => 35 )

    // * arsort() - Ordena un array en orden descendente, manteniendo las claves asociadas.
    $edades = ["Juan" => 30, "Ana" => 25, "Luis" => 35];
    asort($edades);
    print_r($edades); // Salida: Array ( [Ana] => 25 [Juan] => 30 [Luis] => 35 )

    // * ksort() - Ordena un array asociativo por las claves en orden ascendente.
    $edades = ["Juan" => 30, "Ana" => 25, "Luis" => 35];
    asort($edades);
    print_r($edades); // Salida: Array ( [Ana] => 25 [Juan] => 30 [Luis] => 35 )

    // * krsort() -  Ordena un array asociativo por las claves en orden descendente.
    $edades = ["Luis" => 35, "Ana" => 25, "Juan" => 30];
    krsort($edades);
    print_r($edades); // Salida: Array ( [Luis] => 35 [Juan] => 30 [Ana] => 25 )

    // * count() - Devuelve la cantidad de elementos en un array.
    echo count($frutas); // Salida: 3

    // * array_merge() - Combina dos o más arrays.
    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];
    $combinado = array_merge($array1, $array2);
    print_r($combinado); // Salida: [1, 2, 3, 4, 5, 6]

    // * array_push() y array_pop()
        // * array_push() - Añade elementos al final de un array.
        array_push($frutas, "fresa");
        print_r($frutas); // Salida: ["manzana", "banana", "cereza", "fresa"]

        // * array_pop() - Elimina el último elemento de un array.
        $ultimaFruta = array_pop($frutas);
        echo $ultimaFruta; // Salida: "fresa"

    // * array_shift() y array_unshift()
        // * array_shift() - Elimina el primer elemento de un array.
        $primerNumero = array_shift($numeros);
        echo $primerNumero; // Salida: 1

        // * array_unshift() - Agrega elementos al principio de un array.
        array_unshift($numeros, 0);
        print_r($numeros); // Salida: [0, 2, 3, 4, 5]

// - Funciones de Strings
    // * str_replace() - Reemplaza una subcadena específica en un string.
    $saludo = "Hola mundo";
    $nuevoSaludo = str_replace("mundo", "amigo", $saludo);
    echo $nuevoSaludo; // Salida: "Hola amigo"

    // * strtolower() y strtoupper() - Convierte un string a minúsculas o mayúsculas.
    echo strtolower("PHP"); // Salida: "php"
    echo strtoupper("php"); // Salida: "PHP"

    // * trim() - Elimina espacios en blanco al inicio y al final de un string.
    $texto = "   Hola   ";
    echo trim($texto); // Salida: "Hola"

    // * explode() - Divide un string en un array según un delimitador.
    $cadena = "manzana,banana,cereza";
    $frutas = explode(",", $cadena);
    print_r($frutas); // Salida: ["manzana", "banana", "cereza"]

    // * substr() - Obtiene una porción de un string.
    echo substr("Hola mundo", 0, 4); // Salida: "Hola"

// - Funciones de Números
    // * max() y min() - Devuelve el valor más grande o pequeño de una lista de números.
    $numeros = [3, 5, 7, 2, 8];
    echo max($numeros); // Salida: 8
    echo min($numeros); // Salida: 2

    // * rand() - Genera un número aleatorio entre un rango dado.
    echo rand(10, 20); // Salida: Número aleatorio entre 10 y 20

    // * array_sum() - Calcula la suma de los elementos de un array.
    $numeros = [2, 4, 6];
    echo array_sum($numeros); // Salida: 12

    // * array_product() - Calcula el producto (multiplicación) de los elementos de un array.
    $numeros = [2, 4, 6];
    echo array_product($numeros); // Salida: 48 (2 * 4 * 6)

    // * array_unique() - Elimina valores duplicados en un array.
    $numeros = [1, 2, 2, 3, 4, 4];
    print_r(array_unique($numeros)); // Salida: Array ( [0] => 1 [1] => 2 [3] => 3 [4] => 4 )

// - Expresiones Regulares
    // * preg_match() - Comprueba si un string coincide con un patrón.
    $cadena = "12345";
    if (preg_match('/^\d+$/', $cadena)) {
        echo "Solo dígitos"; // Salida: "Solo dígitos"
    }

    // * preg_replace() - Reemplaza patrones en un string con una cadena específica.
    $texto = "gato gato gato";
    $nuevoTexto = preg_replace('/gato/', 'perro', $texto);
    echo $nuevoTexto; // Salida: "perro perro perro"

// - Random shit
/*
    print_r($array): muestra el contenido de todo el $array (en estado de programación), si queremos mostrar el contenido con un formato determinado, hemos de recorrer el array con foreach.
    var_dump($mixed): muestra el contenido del elemento recibido. Muestra más información que print_r. (***)
    $elemento = array_pop($array): elimina el último $elemento
    $elemento = array_shift($array): elimina el primer $elemento (***)
    array_push($array, $elemento): añade un $elemento al final
    $booleano = in_array($elem, $array): averigua si $elemento está en el $array

    $claves = array_keys($array): devuelve las claves del $array asociativo
    $tam = count($array): devuelve el tamaño de $array
    sort($array): ordena los elementos del $array
    asort($array): ordena los elementos por elementos de la asociación manteniendo índice (***)
    isset($array[elemento]): indica si existe/tiene valor elemento dentro del array
    unset($array[elemento]): elimina el elemento del array
    $array2 = array_slice ($array1, clave, num_valores): extrae un array de tamaño num_valores desde la posición clave. (***)
    $resultado = array_merge($array1, $array2, $array3): crea un nueno array como unión con claves numéricas.

    $arrayArgs = func_get_args(); → Obtiene un array con los parámetros
    $cantidad = func_num_args(); → Obtiene la cantidad de parámetros recibidos
    $valor = func_get_arg(numArgumento); → Obtiene el parámetro que ocupa la posición numArgumento.
*/

?>