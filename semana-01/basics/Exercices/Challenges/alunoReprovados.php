<!-- 🧠 Desafio 7: Filtrar e Exibir Alunos Aprovados

    Você tem um array de alunos com nome e nota.

    Use foreach para percorrer os alunos e exibir apenas os que tiraram nota maior ou igual a 7. -->

<?php

$alunos = [
    "Vitor"=> 7.5,
    "Carlos"=> 5.0,
    "Jasmin"=> 9.0,
    "Mariana"=> 7.0
];

foreach ($alunos as $nome => $nota ) {
    if($nota >= 7) {
        print_r($nome . " Nota: " . $nota . PHP_EOL);
    }
}
