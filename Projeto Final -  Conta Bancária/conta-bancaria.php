<?php

$titular = "Dimitri Kael";
$saldo = 1000;

while($opcao != 4){

    echo "***************************\n";
    echo "Titular: $titular\n";
    echo "Saldo atual: R$ $saldo\n";
    echo "***************************\n";

    echo "---------------------------\n";
    echo "|    Menu de Opções       |\n";
    echo "---------------------------\n";
    echo "|1. Consultar saldo       |\n";
    echo "|2. Sacar Valor           |\n";
    echo "|3. Depositar valor       |\n";
    echo "|4. Sair                  |\n";
    echo "---------------------------\n";
    echo "+ Opção: ";

    $opcao = fgets(STDIN);

    switch ($opcao){
        case 1:
            echo "///////////////////////////\n";
            echo "* Saldo: R$ $saldo\n";
            echo "///////////////////////////\n\n\n\n";
            break;
    
        case 2:
            echo "///////////////////////////\n";
            echo "* Valor para saque: ";
            $saque = fgets(STDIN);
            
            if($saldo >= $saque){
                $saldo -= $saque;
                echo "///////////////////////////\n";
                echo "*     Saque realizado!    *\n";
                echo "///////////////////////////\n\n\n\n";
    
            } else {
                echo "///////////////////////////\n";
                echo "*   Saldo insuficiente.   *\n";
                echo "///////////////////////////\n\n\n\n";
            }
            break;
    
        case 3:
            echo "///////////////////////////\n";
            echo "* Deposite um valor: ";
            $deposito = fgets(STDIN);
            
            $saldo += $deposito;
            
            echo "///////////////////////////\n";
            echo "*   Depósito realizado!   *\n";
            echo "///////////////////////////\n\n\n\n";
            break;
    
        case 4:
            echo "///////////////////////////\n";
            echo "*                         *\n";
            echo "*  OBRIGADO PELA VISITA!  *\n";
            echo "*                         *\n";
            echo "///////////////////////////\n\n\n";
            break;
    
        default:
            echo "///////////////////////////\n";
            echo "*                         *\n";
            echo "*    OPÇÃO INVÁLIDA!!!    *\n";
            echo "*                         *\n";
            echo "///////////////////////////\n\n\n\n";
            echo "***** Insira uma opção válida *****\n\n\n\n";
            break;
    }
}
