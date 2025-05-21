<!-- 🧪 Exercícios – Variáveis
1. Declare três variáveis:

    Nome

    Idade

    Está ativo (booleano) -->

<?php

$nome = "Vitor";
$idade= 25;
$status = false;

echo("Nome: $nome" . PHP_EOL);
echo("Idade: $idade" . PHP_EOL);
echo("Status: " . ($status ? "Ativo" : "Desativado") . PHP_EOL);