<?php
if (session_id() !== '' && !$_SESSION['name']) {
    echo '<a href="/">Sign up</a>';
} else {
echo '<a href="/">Log out</a>';
}
?>
<a href='board'>All Posts</a>
<a href='addPost'>Add post</a>