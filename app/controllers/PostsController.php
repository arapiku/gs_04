<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $posts = Posts::find();
        $this->view->posts = $posts;
        // $this->assets->addCss("/css/style.css");
        return;
    }

    public function singleAction($id) {
        $post = Posts::findFirst($id);
        $this->view->post = $post;
        return;
    }

}
