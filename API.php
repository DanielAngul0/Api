<?php


// --------------------------------------------------------------------------------------
// URL de la API
$url="https://jsonplaceholder.typicode.com/photos";
// --------------------------------------------------------------------------------------




// --------------------------------------------------------------------------------------
// leer el contenido de un archivo en una cadena
$list = file_get_contents($url);
// --------------------------------------------------------------------------------------




// --------------------------------------------------------------------------------------
// obtener la lista apartir de una decodificacion, ademas de guardar la informacion en una memoria
$informacion = json_decode($list, true);
// --------------------------------------------------------------------------------------




// --------------------------------------------------------------------------------------
// ordenar de manera ascendente por medio del numero al que pertenezca el array
sort($informacion);
// --------------------------------------------------------------------------------------



// --------------------------------------------------------------------------------------
// mostrara todo el array
print_r($informacion);
// --------------------------------------------------------------------------------------



// --------------------------------------------------------------------------------------
// metodo para agregar un dato, solo se agrega 1 al mostrar todo el array
// $nuevo = array($informacion, 'elemento_nuevo');
// print_r($nuevo);
// --------------------------------------------------------------------------------------





// --------------------------------------------------------------------------------------
// consultar por medio de un array (realiza la consulta dependiendo del numero asignado a cada elemento del array)
// $array = $informacion[0];
// --------------------------------------------------------------------------------------







// --------------------------------------------------------------------------------------
// metodo para agregar un dato a cada uno de los elementos del array
// if ($informacion) {
//     foreach ($informacion as $i) {
//         $array = array($i, 'año_de_creacion' => 2023, 'hola_mundo' => PHP,);
//         print_r($array);
//     }
// }
// --------------------------------------------------------------------------------------







// --------------------------------------------------------------------------------------
// modificar un dato del array (solo afecta al ultimo elemento cuando se muestra todo el array)
// if ($informacion) {
//     $hola=$informacion["año_de_creacion"] = '111000';
//     print_r($informacion);
// }

// --------------------------------------------------------------------------------------





// --------------------------------------------------------------------------------------
// eliminara un elemento si es que se cumple su condicion
// echo array_search('accusamus beatae ad facilis cum similique qui sunt', $informacion);
// if (($borrar = array_search("elemento_nuevo", $array)) !== false) {
//     unset($informacion[$borrar]);
//     print_r($informacion);
// }
// --------------------------------------------------------------------------------------

?>
