<?php

$altura = 1.64; // altura em metros
$peso = 60; // peso em Kg

$imc = $peso / ($altura**2);

echo "Valor do IMC: $imc\n";

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "Peso normal";
} elseif ($imc >= 25 && $imc < 30) {
    echo "Excesso de peso";
} else {
    echo "Obesidade";
}


