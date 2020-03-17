<title>Add Post</title>
<?php
include 'header.php';
?>

<body>
<div class="flex-center position-ref full-height">
    <div class="top-right home">
        <?php
        require 'nav.php';
        ?>
    </div>
    <div class="content">
        <div class="m-b-md">
            <form name="form1" action="storePost" method="post">
                <p><strong><?="Hi, " . $name?></strong>  ʕ•ᴥ•ʔ</p>
                <p>SUBJECT</p>
                <p><input type="text" name="subject"></p>
                <p>CONTENT</p>
                <p><textarea style="font-family: 'Nunito', sans-serif; font-size:20px; width:550px;height:100px;" name="content"></textarea></p>
                <p><input type="submit" name="submit" value="SEND">
                    <?php require 'buttonStyle.html';?>
            </form>
        </div>

</body>
</html>

