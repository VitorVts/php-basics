<!-- 🧠 Desafio 6: Somar Quadrados

    Dado um array de números, use array_map para elevar cada número ao quadrado.

    Depois, use array_sum para somar todos os quadrados. -->

<?php

function aoQuadrado(int $a): int {
    return $a * $a;
}

$num = [1,2,3,4,5,6,7,8,9,10];

$numsAoQuadrado = array_map("aoQuadrado",$num);

$media = array_sum($numsAoQuadrado) / count($numsAoQuadrado);

print_r("A média de dos numeros elevados ao quadrado é: "  . $media. PHP_EOL);