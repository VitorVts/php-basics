<?php

require_once __DIR__ . '/User.php';

class UserRepository {
    private string $file;

    public function __construct(string $file) {
        $this->file = $file;
    }

    private function load(): array {
        if (!file_exists($this->file)) return [];
        $json = file_get_contents($this->file);
        return json_decode($json, true) ?? [];
    }

    private function save(array $users): void {
        file_put_contents($this->file, json_encode($users, JSON_PRETTY_PRINT));
    }

    public function getAll(): array {
        return $this->load();
    }

    public function add(User $user): void {
        $users = $this->load();
        $users[] = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ];
        $this->save($users);
    }

    public function update(int $id, string $name, string $email): void {
        $users = $this->load();
        foreach ($users as &$user) {
            if ($user['id'] === $id) {
                $user['name'] = $name;
                $user['email'] = $email;
                break;
            }
        }
        $this->save($users);
    }

    public function delete(int $id): void {
        $users = $this->load();
        $users = array_filter($users, fn($u) => $u['id'] !== $id);
        $this->save(array_values($users));
    }

    public function getNextId(): int {
        $users = $this->load();
        return empty($users) ? 1 : max(array_column($users, 'id')) + 1;
    }
}
