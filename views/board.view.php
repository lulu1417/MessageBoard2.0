<title>All messages</title>
<?php
require 'header.php';
?>
<body>
<div class="flex-center position-ref full-height">
    <div class="top-right home">
        <a href="/">Sign up</a>
        <a href='addPost'>Add post</a>
        <a href="logout">Log out</a>
    </div>

</div>
<div class="note full-height">
    <?php
        foreach ($posts as $post){
            echo "Author：".$post->name;
            echo "<br>Subject：".$post->subject;
            echo "<br>Content：".$post->content;
            echo "<br>Time：".$post->time;
            echo "<hr>";
        }
    ?>

</div>
</body>
</html>
