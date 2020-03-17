<?php
require 'core/bootstrap.php';
require 'header.php';
if (isset($_POST['submit'])) {
    $_SESSION['name'] = $_POST['name'];
    $user = $db->selectUser($_POST['name']);
    $_SESSION['user_id'] = $user->id;

    if ($user && $user->password == $_POST['password']) {

        require 'views/signin.view.php';
        echo '<div class="success">Welcome ！</div>';
        echo "
        <script>
            setTimeout(function(){window.location.href='board';},2000);
        </script>";

    } else {
        require 'views/signin.view.php';
        echo '<div class="warning">Wrong Username or password ！</div>';
        echo "
        <script>
            setTimeout(function(){window.location.href='signin';},2000);
        </script>";
    }

}
