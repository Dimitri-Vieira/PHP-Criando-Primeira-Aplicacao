<?php

$arrayNotas = [8, 6.5, 9, 5.7];

foreach ($arrayNotas as $nota){
    $resultado = $nota > 6 ? "Aprovado" : "Reprovado";

    echo "Esse aluno(a) foi $resultado com a nota $nota. \n"; 
}