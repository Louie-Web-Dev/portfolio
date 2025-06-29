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
    <form action="salary.php" method="post">
    <label>username:</label><br>
    <input type="text" name="salary">
    <input type="submit" value="Submit"><br>
    </form>
</body>
</html>
<?php   
    $name = "John";

    $totasalary = $_POST['salary'];
