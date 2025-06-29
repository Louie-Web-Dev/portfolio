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
    <label>Hours Worked</label><br>
    <input type="text" name="hours_worked">
    <input type="submit" value="Submit"><br>
    </form>
</body>
</html>
<?php 

    $salary_perhour = 5.5;
    $hours_worked = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hours_worked"])) { //checking to make sure the form was submitted
    
    $hours_worked = $_POST["hours_worked"];
    $total_salary = $salary_perhour * $hours_worked;

    echo"you worked for $hours_worked hours<br>";
    echo "Total Salary is: \${$total_salary}<br>";

    } else {
        echo "Please enter the hours worked.";
    }
?>
