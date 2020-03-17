<?php
require 'core/bootstrap.php';
require 'header.php';
if (isset($_POST['submit'])) {
    $like = $db->selectLike($_SESSION['user_id'], $_POST['post_id']);

    if(!$like){
        $like = $db->storeLike($_SESSION['user_id'], $_POST['post_id']);
    }

    $_SESSION['post_id'] = $_POST['post_id'];
    echo "
        <script>
            setTimeout(function(){window.location.href='showLikes';},20);
        </script>";
}
