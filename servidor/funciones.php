<?php

function sacaDatos() {
    $dato = "Denis";
    echo "La persona se llama $dato<br/>";
}

function cambiaNombre() {
    $strnombre = "Denis";
    return $strnombre;
    // echo "La persona NUEVA se llama " . $strnombre;
}

//me imprime 1 1 1 (lo llamo 3 veces)
function incrementaVariableNoEstatica() {
    $contador = 0;
    $contador ++;
    echo "<br/>" .$contador . " ";
}
 
//al añadir STATIC, me imprime 1 2 3 al llamarlo 3 veces
function incrementaVariableEstatica() {
    static $contador = 0;
    $contador ++;
    echo "<br/>" .$contador . " ";
}
