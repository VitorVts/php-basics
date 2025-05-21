<!-- 🧠 Desafio 10: Carrinho de Compras

    Dado um array de produtos (objetos da classe Produto), use foreach para:

        Exibir cada produto com exibir()

        Calcular o total do carrinho somando os preços -->


<?php 

class Produto 
{
    public string $nome;
    public float $valor;

    public function __construct(string $nome, float $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function exibir(): string {
        return "Produto: " . $this->nome . " Valor R$: " . $this->valor . PHP_EOL;
    }

}

$sucrilhos = new Produto("Tigrin", 12.0);
$banana = new Produto("Banana", 2.0);

$produtos = [
    $sucrilhos,
    $banana
];

$totalCompras = 0 ;

foreach( $produtos as $produto)
{
    echo $produto->exibir();
    
    $totalCompras += $produto->valor;
   
}

print_r("Total das compras foi: " . $totalCompras . PHP_EOL);