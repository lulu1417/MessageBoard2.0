<?php

require 'core/Router.php';

$router = new Router;

require 'routes.php';

$router->define([
    '' => 'controllers/index.php',
    'board' => 'controllers/board.php',
    'storePost' => 'controllers/storePost.php',
    'storeComment' => 'controllers/storeComment.php',
    'showComments' => 'controllers/showComments.php',
    'storeReply' => 'controllers/storeReply.php',
    'showReplies' => 'controllers/showReplies.php',
    'storeLike' => 'controllers/storeLike.php',
    'showLikes' => 'controllers/showLikes.php',
]);

$uri = trim($_SERVER['REQUEST_URI'],'/');

require $router->direct($uri); //this will return uri and its corresponding file