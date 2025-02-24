<?php
$array = [1, 2, 2, 3, 4, 4, 5];
$arraySemDuplicatas = array_unique($array);

var_dump($array);


// ------------------- OUTRA FORMA DE FAZER ISSO (NA UNHA) -------------------
// $array = [1, 2, 2, 3, 4, 4, 5];
// $arraySemDuplicatas = [];

// for ($i = 0; $i < count($array); $i++) {
//     $valor = $array[$i];
//     $duplicado = false;

//     // Verifica se o valor já foi adicionado
//     for ($j = 0; $j < count($arraySemDuplicatas); $j++) {
//         if ($arraySemDuplicatas[$j] === $valor) {
//             $duplicado = true;
//             break;
//         }
//     }

//     // Se não for duplicado, adiciona ao novo array
//     if (!$duplicado) {
//         $arraySemDuplicatas[] = $valor;
//     }
// }
// var_dump($arraySemDuplicatas);