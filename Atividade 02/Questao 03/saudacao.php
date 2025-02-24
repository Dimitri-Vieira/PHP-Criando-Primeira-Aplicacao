<?php

$hora = 6;

echo "São $hora horas. ";

if ($hora >= 5 && $hora < 12) {
    echo "Bom dia!";
} elseif ($hora >= 12 && $hora < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}