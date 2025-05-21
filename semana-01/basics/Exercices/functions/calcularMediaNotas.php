<!-- 5. Crie uma função calcularMediaNotas que aceita notas variáveis -->
<?php

function calcularMediaNotas(float ...$notas): float {
    
    $qtdNotas = count($notas);
    $sumNotas = array_sum($notas);

    return $sumNotas / $qtdNotas;

    
}



echo(calcularMediaNotas(5.5,7.5,6.0) . PHP_EOL);