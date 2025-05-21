<!-- 🧠 Desafio 9: Classe Produto

    Crie uma classe Produto com nome, preco.

    Adicione um método exibir() que retorna uma string formatada: "Produto: X, Preço: Y". -->

<?php

class Produto {

public string $nome;
public float  $preco;

function __construct(string $nome, float $preco) {
    $this->nome = $nome;
    $this->preco = $preco;
}

public function exibir(): string {
    
    return "Produto: " . $this->nome . "," . "Preço: " . $this->preco . PHP_EOL;

}

}

$produto = new Produto("Notebook",1800.00);

print_r($produto->exibir());

?>
