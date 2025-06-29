<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="post.php" method="post">
    <label>username:</label>
    <input type="text" name="username" id="username">
    <label>password:</label>
    <input type="password" name="password"><br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    echo "{$_POST['username']} <br>";
    echo "{$_POST['password']}<br>";

?>