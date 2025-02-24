<?php

$ano = 1700;

$calculoMultiplo400 = $ano % 400;
$calculoMultiplo4 = $ano % 4;

$bissexto = $calculoMultiplo400 == 0 && $calculoMultiplo4 == 0 ? "Sim" : "Não";

echo "O ano de $ano é bissexto?\n$verificaBissexto";

// if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
//     echo "$ano é bissexto.";
// } else {
//     echo "$ano não é bissexto.";
// }