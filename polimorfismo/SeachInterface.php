<?php

interface Search {
    public function all();
}

class User implements Search {
    public function all() {
        return "Obteniendo a los Users";
    }
}

class Post implements Search {
    public function all() {
        return "Obteniendo a los Posts";
    }
}

$user = new User();
echo $user->all() . "\n";

$post = new Post();
echo $post->all() . "\n";