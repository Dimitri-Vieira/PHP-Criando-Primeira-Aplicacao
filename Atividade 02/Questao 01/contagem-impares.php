<?php

echo "Números ímpares de 0 à 100:\n";
for ($contador = 0; $contador <= 100; $contador++){
    if($contador % 2 !== 0){
        echo  "$contador\n";
    }
}