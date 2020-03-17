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
        <a href='board'>All Posts</a>
        <a href="/">Sign Up</a>
    </div>
    <div class="content">
        <div class="m-b-md">
            <form name="signup" action="signup" method="post">
                <p>Username : <input type=text name="name"></p>
                <p>Password : <input type=password name="password"></p>
                <p><input type="submit" name="submit" value="Sign In">
                    <style>
                        input {
                            padding: 5px 15px;
                            background: #ccc;
                            border: 0 none;
                            cursor: pointer;
                            -webkit-border-radius: 5px;
                            border-radius: 5px;
                        }
                    </style>
                    <input type="reset" name="Reset" value="Reset">
                    <style>
                        input {
                            padding: 5px 15px;
                            background: #FFCCCC;
                            border: 0 none;
                            cursor: pointer;
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