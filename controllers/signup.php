<?php
require 'core/bootstrap.php';
require 'header.php';
if (isset($_POST['submit'])) {
    $name = $_SESSION['name'] = $_POST['name'];
    $password = $_POST['password'];

    $user = $db->selectUser($name);

    if(!$user){
        $db->storeUser([
            'name' => $name,
            'password' => $password,
        ]);

        echo '<div class="success">Sign up successfully ！</div>';
        echo "
        <script>
            setTimeout(function(){window.location.href='board';},200);
        </script>";
    }else{

        require 'views/index.view.php';
        echo '<div class="warning">The Username has already been used ！</div>';
        echo "
        <script>
            setTimeout(function(){window.location.href='/';},2000);
        </script>";

    }

}
