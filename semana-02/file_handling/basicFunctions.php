<?php

// 1. Funções básicas

// Escrevendo em um arquivo com fopen/fwrite
$arquivo = fopen("dados.txt", "w"); //"w" sobrescreve; "a" adiciona no final
fwrite($arquivo,"Linha1\n");
fwrite($arquivo,"Linha2\n");

//Lendo com fread

$arquivo = fopen("dados.txt","r");
$tamanho = filesize("dados.txt");
$conteudo = fread($arquivo, $tamanho);
fclose($arquivo);

//Conteudo do arquivo 
echo $conteudo;


// Escrever (sobrescreve o conteúdo)
file_put_contents("dados.txt","Nova Linha1 \nNova Linha 2\n");

// Ler

$conteudo = file_get_contents("dados.txt");

echo $conteudo;

// 2. Criar script que escreve dados no arquivo

$nome = "Vitor";
$idade = 25;

$linha = "Nome: $nome, Idade: $idade\n";

//Adiciona linha ao final do arquivo
file_put_contents("usuarios.txt",$linha,FILE_APPEND);

// 3. Script que lê e exibe dados
$conteudo = file_get_contents("usuarios.txt");
echo nl2br($conteudo); // nl2br adicionar <br> aonde tiver \n

// 4. Simular um "banco de dados" com array salvo em arquivo
// Gravar array como JSON:

$usuarios = [
    ["nome" => "Vitor", "idade" => 22],
    ["nome"=> "Maria", "idade"=> 30]
];
//salvar como JSON
file_put_contents("usuarios_db.txt",json_encode($usuarios));

// Ler o "banco de dados" e exibir:

$json = file_get_contents("usuarios_db.txt");
$usuarios = json_decode($json, true); // true = array associativo

foreach ($usuarios as $usuario) {
    echo "Nome: " . $usuario["nome"] . " - Idade: " . $usuario["idade"] . "<br>";
}


//1. Ler os dados que já existem

$json = file_get_contents("usuarios_db.txt");
$usuarios = json_decode($json, true);

//2. Novo Usuario
$novo = ["nome"=> "Ana", "idade" => 27];
$usuarios[] = $novo;

//3. Salvar novamente

file_put_contents("usuarios_db.txt",json_encode($usuarios));