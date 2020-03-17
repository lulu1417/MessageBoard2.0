<?php
require 'core/bootstrap.php';
require 'header.php';
if (isset($_POST['submit'])) {
    $post = $db->storePost($_POST, $_SESSION['user_id']);
    require 'views/board.view.php';
    echo "
        <script>
            setTimeout(function(){window.location.href='board';},20);
        </script>";
}
