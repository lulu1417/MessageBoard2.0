<title>Who also like this</title>
<?php
require 'header.php';
?>
<body>
<div class="flex-center position-ref full-height">
    <div class="top-right home">
        <?php
        require 'nav.php';
        ?>
    </div>

</div>
<div class="note full-height">
    <?php
    foreach ($likes as $like) {
        echo "User：" . $like->name;
        echo "<br>Time：" . $like->time;

        if ($like->name == $_SESSION['name']) {
            echo '
                <form name="form1" action="dislike" method="post">
                    <input type="hidden" name="like_id" value='.$like->id.'>
                    <input type="submit" name="submit" value= "Retrive like 👎" >
                </form>
        
            ';
        }
        require 'buttonStyle.html';

        echo "<hr>";

    }
    ?>

</div>
</body>
</html>
<?php
