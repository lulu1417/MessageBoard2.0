<?php
$router->define([
    '' => 'controllers/index.php', //signup view
    'signup' => 'controllers/signup.php', //post user name & password
    'signin' => 'controllers/signin.php',
    'login' => 'controllers/login.php',
    'board' => 'controllers/board.php',
    'addPost' => 'controllers/addPost.php',
    'storePost' => 'controllers/storePost.php',
    'storeComment' => 'controllers/storeComment.php',
    'showComments' => 'controllers/showComments.php',
    'storeReply' => 'controllers/storeReply.php',
    'showReplies' => 'controllers/showReplies.php',
    'storeLike' => 'controllers/storeLike.php',
    'showLikes' => 'controllers/showLikes.php',
]);