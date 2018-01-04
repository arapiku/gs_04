<?php

$router = $di->getRouter();

/**
 * 民泊情報取得
 * http://192.168.70.10
 * GETでアクセス
 * PostsControllerのindexメソッドが実行
 */
$router->addGet(
    '/',
    'Posts::index'
);

/**
 * 民泊単体情報取得
 * http://192.168.70.10/{id}
 * GETでアクセス
 * PostsControllerのsingleメソッドが実行
 */
$router->addGet(
    '/{id:[0-9]+}',
    'Posts::single'
);

$router->handle();
