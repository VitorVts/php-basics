<?php

require_once __DIR__ . '/src/User.php';
require_once __DIR__ . '/src/UserRepository.php';
require_once __DIR__ . '/src/Menu.php';

$repo = new UserRepository(__DIR__ . '/data/users.json');
$menu = new Menu($repo);
$menu->exibir();
