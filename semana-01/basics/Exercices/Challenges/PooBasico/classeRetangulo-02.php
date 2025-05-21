<!-- 💡 Exercício 2 — Classe Retângulo

Objetivo: Aplicar lógica com métodos.

Crie uma classe Retangulo com:

    largura (float)

    altura (float)

Métodos:

    calcularArea(): retorna largura × altura

    calcularPerimetro(): retorna 2 × (largura + altura) -->

<?php 

class Retangulo 
{
    public float $largura;
    public float $altura;

    function __construct(float $largura, float $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea():float {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro():float {
        return 2 * ($this->largura + $this->altura);
    }
}

$retangulo1 = new Retangulo(25.2,26.5);
$retangulo2 = new Retangulo(5,10);

print_r($retangulo1->calcularArea() . PHP_EOL);
print_r($retangulo1->calcularPerimetro(). PHP_EOL);

print_r($retangulo2->calcularArea(). PHP_EOL);
print_r($retangulo2->calcularPerimetro(). PHP_EOL);