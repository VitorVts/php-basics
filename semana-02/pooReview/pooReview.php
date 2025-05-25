<?php

// Interface: define o contrato que classes devem seguir
interface Autenticavel {
    public function autenticar(string $senha): bool;
}

// Classe base
class Usuario implements Autenticavel {
    protected string $nome;
    protected string $senha;

    public function __construct(string $nome, string $senha) {
        $this->nome = $nome;
        $this->senha = $senha;
    }

    public function getNome(): string {
        return $this->nome;
    }

    // Implementação da interface
    public function autenticar(string $senha): bool {
        return $this->senha === $senha;
    }
}

// Classe filha com herança
class Admin extends Usuario {
    private array $permissoes;

    public function __construct(string $nome, string $senha, array $permissoes) {
        parent::__construct($nome, $senha); // chama o construtor da classe pai
        $this->permissoes = $permissoes;
    }

    public function getPermissoes(): array {
        return $this->permissoes;
    }
}

// Classe utilitária com métodos estáticos
class Util {
    public static function gerarSenhaAleatoria(int $tamanho = 8): string {
        return substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, $tamanho);
    }

    public static function exibirUsuario(Usuario $usuario): void {
        echo "Usuário: " . $usuario->getNome() . PHP_EOL;
    }
}

// ======= Teste =======

$senha = Util::gerarSenhaAleatoria();
$admin = new Admin("Vitor", $senha, ["editar", "deletar"]);

Util::exibirUsuario($admin);

if ($admin->autenticar($senha)) {
    echo "Autenticado com sucesso!" . PHP_EOL;
    echo "Permissões: " . implode(", ", $admin->getPermissoes()) . PHP_EOL;
} else {
    echo "Falha na autenticação." . PHP_EOL;
}
