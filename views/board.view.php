<title>All messages</title>
<?php
require 'header.php';
?>
<body>
<div class="flex-center position-ref full-height">
    <div class="top-right home">
        <?php
        if (!$_SESSION['name']) {
            echo '<a href="signup">Sign up</a>';
        } else {
            echo "<a href='board'>Add post</a>";
            echo '<a href="logout">Log out</a>';
        } ?>
    </div>


</div>
<div class="note full-height">


    <?php
    echo '<div class="bottom left position-abs content">';
//    echo "There are " . mysqli_num_rows($result) . " posts.";
    ?>
</div>
</body>
</html>
