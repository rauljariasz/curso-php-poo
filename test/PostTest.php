<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase {
    public function test_add_comment_to_post() {
        $post = new Post();
        $comment = new Comment();

        $post->addComment($comment);

        // Evaluamos si el contador de comentarios es igual a 1
        $this->assertEquals(1, $post->countComments());
        // Verificamos si lo que retorna getComments es una instrancia de la clase "Comment"
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
    }
}