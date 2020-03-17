<?php
require 'header.php';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Log In</title>
</head>

<body>
<div class="flex-center position-ref full-height">
    <div class="top-right home">
        <?php
        require 'nav.php';
        ?>
    </div>
    <div class="content">
        <div class="m-b-md">
            <form name="signup" action="login" method="post">
                <p>Username : <input type=text name="name"></p>
                <p>Password : <input type=password name="password"></p>
                <p><input type="submit" name="submit" value="Sign In">
                    <?php require 'buttonStyle.html';?>
            </form>
        </div>

</body>
</html>
