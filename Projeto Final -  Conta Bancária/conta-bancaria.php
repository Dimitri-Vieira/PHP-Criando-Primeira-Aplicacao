<?php

$titular = "Dimitri Kael";
$saldo = 1_000.00;
$opcao = 0;

function exibirMenu($saldo, $titular){
    echo "***************************\n";
    echo "Titular: $titular\n";
    echo "Saldo atual: R$" . number_format($saldo, 2) . "\n";
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
}

do{
    exibirMenu($saldo, $titular);

    $opcao = (int) fgets(STDIN);

    switch ($opcao){
        case 1:
            echo "///////////////////////////\n";
            echo "* Saldo: R$" . number_format($saldo, 2) . "\n";
            echo "///////////////////////////\n\n\n\n";
            break;
    
        case 2:
            echo "///////////////////////////\n";
            echo "* Valor para saque: ";
            $saque = (float) fgets(STDIN);
            
            if($saldo >= $saque && $saque >= 0){
                $saldo -= $saque;
                echo "///////////////////////////\n";
                echo "*     Saque realizado!    *\n";
                echo "///////////////////////////\n\n\n\n";
    
            } else {
                echo "///////////////////////////\n";
                echo "*   Saldo insuficiente   *\n";
                echo "*            ou          *\n";
                echo "*     Valor inválido     *\n";
                echo "///////////////////////////\n\n\n\n";
            }
            break;
    
        case 3:
            echo "///////////////////////////\n";
            echo "* Deposite um valor: ";
            $deposito = (float) fgets(STDIN);
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
} while($opcao != 4);
