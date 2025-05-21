<!-- 4. Crie uma função formatarNome que recebe nome, sobrenome e retorna Sobrenome, Nome -->


<?php

function formatarNome(string $nome, string $sobrenome): string {
    
    $fullname = $nome . " " . $sobrenome;

    return $fullname . PHP_EOL;

}

echo formatarNome("Vitor","gomes");