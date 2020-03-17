<?php
require 'core/bootstrap.php';
require 'header.php';

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
}
$posts = $db->selectAllWithTableJoin('users', 'posts');

require 'views/board.view.php';
