<!-- 

    echo "hello world<br>";
    echo "hello world";
 -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>

    <button class="btn">Click Me</button>

</body>
</html> -->

<?php 

require_once 'database.php'; 

     echo "Database connection successful!<br>";
    $name = "John";
    $location = "New York"; 
    $email = "sample@gmail.com";

    //integer values
    $age = 30;
   

    //float values
    // decimal values
    $salary = 5.5;
    $hours_worked = 8.5;

    //boolean values
    // true or false
    $employed = true;
    $online = false;
    $for_sale = true;


    echo "Name: $name<br>";
    echo "Location: $location<br>";
    echo "Email: $email<br>";


    echo "Age: $age<br>"; 
    
   
    echo "Salary per hour \$ $salary<br>";


    echo "Employed: {$employed}<br>";
    echo"online: {$online}<br>";
    echo"for sale: {$for_sale}<br>";

    echo"you are $name, you are $age years old, you live in 
    $location";

    $total_salary = $salary * $hours_worked;
    echo "<br>Total salary for the day: \$ $total_salary<br>";

?>


