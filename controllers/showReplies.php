<?php
require 'core/bootstrap.php';
require 'header.php';
if (isset($_POST['submit'])) {
    $_SESSION['comment_id'] = $_POST['comment_id'];
}
$replies = $db->selectAllWithTableJoinWithCondition('users', 'replies', 'comments', $_SESSION['comment_id']);

require 'views/showReplies.view.php';
