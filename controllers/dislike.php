<?php
require 'core/bootstrap.php';
include 'header.php';

if (isset($_POST['submit'])) {
    $like_id = $_POST['like_id'];
    $db->dislike($like_id);
        echo "
                <script>
                 setTimeout(function(){window.location.href='board';},10);
                </script>";

}
?>
