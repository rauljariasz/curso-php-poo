<?php

require_once './user.php';
require_once './admin.php';

// Creamos un objeto User
$user = new User;
// Le definimos el tipo Admin
$user->type = new Admin;

echo $user->type->greet() . "\n";