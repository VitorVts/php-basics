<!-- 🔐 Exercício 3 — Encapsulamento

Crie uma classe ContaBancaria com:

    titular (string)

    saldo (float, privado)

Métodos:

    depositar(float $valor)

    sacar(float $valor)

    verSaldo(): retorna o saldo formatado

Regras:

    Só permite saque se o saldo for suficiente -->

<?php

class ContaBancaria {
    private string $titular;
    private float  $saldo;

    function __construct(string $titular, float $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar (float $deposito):void {
        $this->saldo += $deposito;
    }

    public function sacar(float $valor): void {
        
        if($valor > $this->saldo) {
             echo "Saldo insuficiente\n";
             return;
        }
        $this->saldo -= $valor;
    }

    public function verSaldo(): void {
        echo sprintf("O Saldo atual de %s é R$ %.2f\n", $this->titular, $this->saldo);
    }

}

$conta = new ContaBancaria("Vitor", 100.0);

$conta->depositar(100);
$conta->sacar(100);

$conta->verSaldo();