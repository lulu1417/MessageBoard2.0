<?php
require 'core/bootstrap.php';

if (isset($_POST['name'])) {
//    setcookie("user_name", $_POST['name'], time()+ 60,'/');
    $_SESSION['name'] = $_POST['name'];
}
$board = $db->selectAll('posts');

require 'views/board.view.php';
