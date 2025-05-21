<!-- 3. Crie uma função maiorNumero que recebe um array e retorna o maior valor -->


<?php

function maiorValor($numeros):Int {

   return max($numeros);
}

$numeros = [10, 5, 20, 8, 15];

echo "O maior valor no array é: " . maiorValor($numeros) . PHP_EOL;