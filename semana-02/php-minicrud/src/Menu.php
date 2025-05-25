<?php

require_once __DIR__ . '/UserRepository.php';

class Menu {
    private UserRepository $repo;

    public function __construct(UserRepository $repo) {
        $this->repo = $repo;
    }

    public function exibir(): void {
        while (true) {
            echo "\n1. Listar usuários\n";
            echo "2. Adicionar usuário\n";
            echo "3. Editar usuário\n";
            echo "4. Excluir usuário\n";
            echo "0. Sair\n";
            echo "Escolha: ";

            $opcao = trim(fgets(STDIN));

            match ($opcao) {
                "1" => $this->listar(),
                "2" => $this->adicionar(),
                "3" => $this->editar(),
                "4" => $this->excluir(),
                "0" => exit("Saindo...\n"),
                default => print("Opção inválida\n")
            };
        }
    }

    private function listar(): void {
        $users = $this->repo->getAll();
        foreach ($users as $u) {
            echo "ID: {$u['id']} | Nome: {$u['name']} | Email: {$u['email']}\n";
        }
    }

    private function adicionar(): void {
        echo "Nome: ";
        $nome = trim(fgets(STDIN));
        echo "Email: ";
        $email = trim(fgets(STDIN));
        $id = $this->repo->getNextId();
        $this->repo->add(new User($id, $nome, $email));
        echo "Usuário adicionado.\n";
    }

    private function editar(): void {
        echo "ID do usuário para editar: ";
        $id = (int)trim(fgets(STDIN));
        echo "Novo nome: ";
        $nome = trim(fgets(STDIN));
        echo "Novo email: ";
        $email = trim(fgets(STDIN));
        $this->repo->update($id, $nome, $email);
        echo "Usuário atualizado.\n";
    }

    private function excluir(): void {
        echo "ID do usuário para excluir: ";
        $id = (int)trim(fgets(STDIN));
        $this->repo->delete($id);
        echo "Usuário excluído.\n";
    }
}
