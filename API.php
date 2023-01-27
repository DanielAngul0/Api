<?php
$url="https://jsonplaceholder.typicode.com/photos";

// echo $url;

// leer el contenido de un archivo en una cadena
$list = file_get_contents($url);

// obtener la lista
$informacion = json_decode($list, true);


// ordenar de manera ascendente 
asort($informacion);


// // // consultar por medio de un array
// $array = $informacion[380];



if (in_array('accusamus beatae ad facilis cum similique qui sunt', $informacion)){

    // muestra la informacion sobre un array
    var_dump($informacion);

}


// var_dump($array);

















?>