<?php
if(session_id() == ''){
    session_start();
    $name = $_SESSION['name'];
    $user_id = $_SESSION['user_id'];
    $post_id = $_SESSION['post_id'];
}
