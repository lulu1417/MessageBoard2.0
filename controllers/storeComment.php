<?php
require 'core/bootstrap.php';
require 'header.php';
if (isset($_POST['submit'])) {
    $comment = $db->storeComment($_POST, $_SESSION['user_id']);
    $_SESSION['post_id'] = $_POST['post_id'];
    echo "
        <script>
            setTimeout(function(){window.location.href='showComments';},20);
        </script>";
}

