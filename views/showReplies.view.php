<title>All Comments</title>
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
    $i = 0;
    foreach ($replies as $reply){
        echo "Author：".$reply->name;
        echo "<br>Comment ID：".$reply->comments_id;
        echo "<br>Content：".$reply->content;
        echo "<br>Time：".$reply->time;

        require 'buttonStyle.html';
        echo "<hr>";
        $i++;
    }
    echo '<div class="bottom left position-abs content">';
    echo "There are " . $i . " replies.";
    ?>

</div>
</body>
</html>

