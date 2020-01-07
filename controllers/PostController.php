<?php

namespace Valarep\controllers;

use Valarep\View;
use Valarep\objects\Post;

class PostController
{
    public function ListAction()
    {
        //Liste des publications
        $posts = [];

        $post = new Post();
        $post->title = "Post 1";
        $post->content = "Contenu du Post 1";

        $posts[] = $post;

        $post = new Post();
        $post->title = "Post 2";
        $post->content = "Contenu du Post 2";

        $posts[] = $post;

        View::setTemplate("post_list");
        View::bindVariable("post", $title);
        view::bindVariable("content", $content);
        View::display();
    }
}