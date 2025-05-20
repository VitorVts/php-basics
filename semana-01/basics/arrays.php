<!-- 🧪 Exercícios – Arrays
2. Crie um array com 5 frutas. Mostre:

    A primeira fruta

    A quantidade total de frutas

3. Crie um array associativo de um aluno: -->

<?php

$frutas = ["banana", "Maçã", "Uva", "Pêra"];

echo($frutas[0] . PHP_EOL);
echo("O array tem " .  count($frutas) . " Frutas" . PHP_EOL);

$aluno = [
    "nome" => "Vitor",
    "nota1" => 7.5,
    "nota2" => 8.0
];

$media = ($aluno["nota1"] + $aluno["nota2"])/2;

echo("Aluno: " . $aluno["nome"] . PHP_EOL);
echo("Média: " . $media . PHP_EOL);