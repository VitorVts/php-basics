<!-- 6. Use um for para exibir os números de 1 a 10.
7. Crie um array de 4 nomes e percorra com foreach, mostrando: -->

<?php

for($i = 1; $i < 10; $i++)
{
    echo($i . PHP_EOL);
}

$array = ["Vitor", "Mariana", "Carlos", "Lucas"];

foreach($array as $nome )
{
    echo("Nome: " . $nome . PHP_EOL);
}

$num = 1;

while($num <= 5) {
    echo $num . PHP_EOL ;
    $num++;
}

do {
    $num = (int) readline("Digite um número (0 para sair): ");
} while ($num != 0);