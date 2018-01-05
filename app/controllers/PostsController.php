<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $posts = Posts::find();
        $this->view->posts = $posts;
        return;
    }

    public function singleAction($id) {
        $post = Posts::findFirst($id);
        $this->view->post = $post;
        return;
    }

    public function searchAction($title) {
        $post = Posts::findByTitle($title);
        return;
    }

}
