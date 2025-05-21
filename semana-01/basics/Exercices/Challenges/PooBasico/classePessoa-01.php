<!-- 💪 Exercício 1 — Classe Pessoa

Objetivo: Revisar construtor, propriedades, método simples.

Crie uma classe Pessoa com:

    nome (string)

    idade (int)

Método:

    apresentar(): retorna a frase "Olá, meu nome é João e tenho 30 anos"
 -->


 <?php

 class Pessoa {
    public string $nome;
    public int $idade;

    function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function apresentar(): string {
        return "Olá, meu nome é $this->nome e tenho $this->idade anos" . PHP_EOL;
    }
 }

 $pessoa = new Pessoa("Vitor", 25);

 print_r($pessoa->apresentar());