<!-- 🧪 Exercícios – Estruturas de controle
4. Escreva um if/else que verifica se um número é:

    Positivo

    Negativo

    Zero

5. Faça um switch que recebe uma variável com o nome de um mês e imprime a estação correspondente: -->
<?php

$num = 3; 

if($num < 0 )
{
     echo($num . " É Negativo" . PHP_EOL);
} elseif ($num == 0) {
    echo($num . " É igual a Zero" . PHP_EOL);
} else {
    echo($num . " É Positivo". PHP_EOL);
}

$mes = "janeiro";

switch ($mes) {
    case 'janeiro':
        echo("Verão" . PHP_EOL);
        break;
    case "abril" :
        echo("Outono" . PHP_EOL);
        break;
    case "julho" :
        echo("Inverno" . PHP_EOL);
        break;
    case "outrubro" : 
        echo("Primavera" . PHP_EOL);
        break;
    default:
        # code...
        break;
}