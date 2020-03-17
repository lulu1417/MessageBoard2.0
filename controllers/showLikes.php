<?php
require 'core/bootstrap.php';
require 'header.php';

$likes = $db->selectAllWithTableJoinWithCondition('users', 'likes', 'posts' , $_SESSION['post_id']);

require 'views/showLikes.view.php';