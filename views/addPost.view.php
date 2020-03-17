<title>Add Post</title>
<?php
include 'header.php';
?>

<body>
<div class="flex-center position-ref full-height">
    <div class="top-right home">
        <a href='board'>All Posts</a>
        <a href="logout">Logout</a>
        <a href="/">Sign Up</a>
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
                    <style>
                        input {padding:5px 15px; background:#FFCCCC; border:0 none;
                            cursor:pointer;
                            -webkit-border-radius: 5px;
                            border-radius: 5px; }
                    </style>
                    <input type="reset" name="Reset" value="RESET">
                    <style>
                        input {
                            padding:5px 15px;
                            background:#FFCCCC;
                            border:0 none;f
                        cursor:pointer;
                            -webkit-border-radius: 5px;
                            border-radius: 5px;
                            font-family: 'Nunito', sans-serif;
                            font-size: 19px;
                        }
                    </style>
            </form>
        </div>

</body>
</html>

