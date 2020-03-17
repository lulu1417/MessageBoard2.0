<?php
require 'core/bootstrap.php';
require 'header.php';
if (isset($_POST['submit'])) {
    $_SESSION['post_id'] = $_POST['post_id'];
}
$comments = $db->selectAllWithTableJoinWithCondition('users', 'comments', 'posts' , $_SESSION['post_id']);

require 'views/showComments.view.php';
