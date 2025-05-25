<?php

$arquivo = "db.txt";

// Cria um novo item
function create(string $nome, string $arquivo) {
    $usuarios = [];

    if (file_exists($arquivo)) {
        $usuarios = json_decode(file_get_contents($arquivo), true);
    }

    $usuarios[] = $nome;

    file_put_contents($arquivo, json_encode($usuarios));
}

// Lê todos os itens
function read(string $arquivo) {
    if (!file_exists($arquivo)) {
        echo "Arquivo não encontrado.\n";
        return;
    }

    $usuarios = json_decode(file_get_contents($arquivo), true);

    foreach ($usuarios as $usuario) {
        echo $usuario . PHP_EOL;
    }
}

// Atualiza um item existente
function update(string $antigoNome, string $novoNome, string $arquivo) {
    if (!file_exists($arquivo)) return;

    $usuarios = json_decode(file_get_contents($arquivo), true);

    $index = array_search($antigoNome, $usuarios);
    if ($index !== false) {
        $usuarios[$index] = $novoNome;
        file_put_contents($arquivo, json_encode($usuarios));
    }
}

// Remove um item
function delete(string $nome, string $arquivo) {
    if (!file_exists($arquivo)) return;

    $usuarios = json_decode(file_get_contents($arquivo), true);

    $usuarios = array_filter($usuarios, fn($u) => $u !== $nome);
    $usuarios = array_values($usuarios); // reindexar o array

    file_put_contents($arquivo, json_encode($usuarios));
}


// Testes
create("Vitor", $arquivo);
create("João", $arquivo);
create("Maria", $arquivo);

read($arquivo);
echo "\nAtualizando João para Pedro...\n";
update("João", "Pedro", $arquivo);
read($arquivo);

echo "\nDeletando Maria...\n";
delete("Maria", $arquivo);
read($arquivo);
