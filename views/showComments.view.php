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
    foreach ($comments as $comment){
        echo "Author：".$comment->name;
        echo "<br>Content：".$comment->content;
        echo "<br>Time：".$comment->time;

        echo '
            <form name="form1" action="showReplies" method="post">
        <input type="hidden" name="comment_id" value=' . $comment->comments_id .'>
        <input type="submit" name="submit" value= "All Replies" >
        </form>';

        echo '
         <form name="form1" action="storeReply" method="post">
                <input type="hidden" name="comment_id" value= ' . $comment->comments_id . ' >
                <p><textarea style="font-family: \'Nunito\', sans-serif; font-size:20px; width:550px;height:100px;" name="content"></textarea></p>
                <p><input type="submit" name="submit" value="SEND">
                  
            </form>
        ';
        require 'buttonStyle.html';
        echo "<hr>";
        $i++;

    }
    echo '<div class="bottom left position-abs content">';
    echo "There are " . $i . " comments.";
    ?>

</div>
</body>
</html>

