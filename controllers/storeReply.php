<?php
require 'core/bootstrap.php';
require 'header.php';
if (isset($_POST['submit'])) {
    $replies= $db->storeReply($_POST, $_SESSION['user_id']);
    $_SESSION['comment_id'] = $_POST['comment_id'];
    echo "
        <script>
            setTimeout(function(){window.location.href='showReplies';},20);
        </script>";
}

