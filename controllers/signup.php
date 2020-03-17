<?php
require 'core/bootstrap.php';
session_start();
if (isset($_POST['submit'])) {
    $_SESSION['name'] = $_POST['name'];

    $user = $db->selectUser($_POST['name']);

    if (!$user) {
        $db->storeUser([
            'name' => $_POST['name'],
            'password' => $_POST['password'],
        ]);
        $_SESSION['user_id'] = $db->selectUser($_POST['name'])->id;
        echo "
        <script>
            setTimeout(function(){window.location.href='board';},20);
        </script>";
    } else {

        require 'views/index.view.php';
        echo '<div class="warning">The Username has already been used ！</div>';
        echo "
        <script>
            setTimeout(function(){window.location.href='/';},2000);
        </script>";

    }

}
