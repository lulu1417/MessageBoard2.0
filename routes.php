<?php
$router->define([
    '' => 'controllers/index.php', //signup
    'signup' => 'controllers/signup.php',
    'board' => 'controllers/board.php',
    'storePost' => 'controllers/storePost.php',
    'storeComment' => 'controllers/storeComment.php',
    'showComments' => 'controllers/showComments.php',
    'storeReply' => 'controllers/storeReply.php',
    'showReplies' => 'controllers/showReplies.php',
    'storeLike' => 'controllers/storeLike.php',
    'showLikes' => 'controllers/showLikes.php',
]);