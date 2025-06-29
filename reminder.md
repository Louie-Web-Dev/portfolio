
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

</body>
</html>
CREATE TABLE students (
    student_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50)  NOT NULL,
    last_name VARCHAR(50)  NOT NULL,
    birth_date DATE,
    email VARCHAR(100) UNIQUE,
    enrolled_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE employees (
    employee_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    birthday DATE,
    position VARCHAR(100),
    department VARCHAR(100),
    location VARCHAR(100),
    salary DECIMAL(10, 2),
    hire_date DATE, 
    email VARCHAR(100) UNIQUE
);


*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
}

| Selector  | Symbol | Meaning                   | Example Target                     |
| --------- | ------ | ------------------------- | ---------------------------------- |
| Universal | `*`    | All HTML elements         | `* {}`                             |
| ID        | `#`    | Specific element by ID    | `<div id="header">...</div>`       |
| Class     | `.`    | All elements with a class | `<div class="container">...</div>` |

| Selector        | Example           | Description                |
| --------------- | ----------------- | -------------------------- |
| `:hover`        | `a:hover`         | When mouse is over element |
| `:active`       | `button:active`   | While clicking             |
| `:focus`        | `input:focus`     | When input is selected     |
| `:nth-child(n)` | `li:nth-child(2)` | Selects the nth child      |
| `:first-child`  | `p:first-child`   | First child of parent      |
| `:last-child`   | `div:last-child`  | Last child of parent       |


| Selector        | Example              | Description                    |
| --------------- | -------------------- | ------------------------------ |
| `::before`      | `p::before`          | Add content **before** element |
| `::after`       | `p::after`           | Add content **after** element  |
| `::placeholder` | `input::placeholder` | Style the placeholder text     |

| Selector Type     | Syntax          | Meaning / Example                            |
| ----------------- | --------------- | -------------------------------------------- |
| **Universal**     | `*`             | Targets **all elements**                     |
| **Element / Tag** | `div`, `p`, `a` | Targets HTML tags like `<div>`, `<p>`, `<a>` |
| **Class**         | `.classname`    | Targets elements with `class="classname"`    |
| **ID**            | `#idname`       | Targets the element with `id="idname"`       |


| EDITING                        | Shortcut              |
| ----------------------------- | --------------------- |
| Cut Line                      | `Ctrl + X`            |
| Copy Line                     | `Ctrl + C`            |
| Move Line Up/Down             | `Alt + ↑ / ↓`         |
| Duplicate Line                | `Shift + Alt + ↓ / ↑` |
| Delete Line                   | `Ctrl + Shift + K`    |
| Comment/Uncomment Line        | `Ctrl + /`            |
| Format Document               | `Shift + Alt + F`     |
| Rename Symbol                 | `F2`                  |
| Multi-Cursor (Add Cursor)     | `Alt + Click`         |
| Select All Occurrences (Word) | `Ctrl + F2`           |
| Comment | `Ctrl + /`           |


| General Shortcuts  | Shortcut                 |
| ------------------ | ------------------------ |
| Command Palette    | `Ctrl + Shift + P`       |
| Open File          | `Ctrl + O`               |
| Save               | `Ctrl + S`               |
| Save All           | `Ctrl + K` then `S`      |
| Close File         | `Ctrl + W`               |
| Reopen Closed File | `Ctrl + Shift + T`       |
| New File           | `Ctrl + N`               |
| New Terminal       | \`Ctrl + \`\` (backtick) |


| Navigation       | Shortcut   |
| ---------------- | ---------- |
| Go to File       | `Ctrl + P` |
| Go to Line       | `Ctrl + G` |
| Go to Definition | `F12`      |
| Go Back          | `Alt + ←`  |
| Go Forward       | `Alt + →`  |
| Show All Symbols | `Ctrl + T` |


| Search Replace| Shortcut           |
| ------------- | ------------------ |
| Find          | `Ctrl + F`         |
| Replace       | `Ctrl + H`         |
| Find in Files | `Ctrl + Shift + F` |


| Debugging                | Shortcut      |
| ------------------------ | ------------- |
| Start/Continue Debugging | `F5`          |
| Step Over                | `F10`         |
| Step Into                | `F11`         |
| Step Out                 | `Shift + F11` |
| Toggle Breakpoint        | `F9`          |

| Action                                    | Shortcut                                |
| ----------------------------------------- | --------------------------------------- |
| **Undo**                                  | `Ctrl + Z`                              |
| **Redo**                                  | `Ctrl + Y`                              |
| **Select Line**                           | `Ctrl + L`                              |
| **Select All**                            | `Ctrl + A`                              |
| **Insert Line Below**                     | `Ctrl + Enter`                          |
| **Insert Line Above**                     | `Ctrl + Shift + Enter`                  |
| **Join Lines** (merge lines)              | `Ctrl + J`                              |
| **Expand Selection**                      | `Shift + Alt + →`                       |
| **Shrink Selection**                      | `Shift + Alt + ←`                       |
| **Column (Box) Selection**                | `Shift + Alt + Drag Mouse`              |
| **Select Word**                           | `Ctrl + D`                              |
| **Select All Matches of Word**            | `Ctrl + F2`                             |
| **Change All Occurrences** (multi-cursor) | `Ctrl + Shift + L`                      |
| **Add Cursor to Next Match**              | `Ctrl + D`                              |
| **Move Selection Up/Down**                | `Alt + ↑ / ↓`                           |
| **Indent Line**                           | `Tab`                                   |
| **Outdent Line**                          | `Shift + Tab`                           |
| **Trim Trailing Whitespace**              | `Ctrl + K`, then `Ctrl + X`             |
| **Copy Line Up/Down**                     | `Shift + Alt + ↑ / ↓`                   |
| **Surround with Brackets/Quotes**         | `Shift + Alt + Right` (on some configs) |

| Feature      | PHP Syntax                                  |
| ------------ | ------------------------------------------- |
| `for` loop   | `for ($i = 0; $i < 5; $i++) { ... }`        |
| `while` loop | `while ($j < 5) { ... }`                    |
| Function     | `function name($param) { return ...; }`     |
| Class        | `class Name { ... function __construct() }` |
| Object       | `$obj = new ClassName();`                   |
| Print        | `echo "text";`                              |

<!-- php -->
<?php
$name = "Christian";
echo "Hello, World!<br>";

if ($name === "Christian") {
    echo "Welcome!";
}
?>

<!-- javascript -->
let name = "Christian";
console.log("Hello, World!");

if (name === "Christian") {
    console.log("Welcome!");
}



<!-- php -->
<!-- Loops (for and while) -->
<?php
for ($i = 0; $i < 5; $i++) {
    echo $i . "<br>";
}

$j = 0;
while ($j < 5) {
    echo $j . "<br>";
    $j++;
}
?>

<!-- Functions -->
<?php
function greet($name) {
    return "Hello, " . $name;
}

echo greet("Christian");
?>

<!-- Classes & Objects -->
<?php
class Person {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }

    function greet() {
        echo "Hello, " . $this->name;
    }
}

<!-- php syntax : $variable_name = value; -->
$user = new Person("Christian");
$user->greet();
?>

<?php
    $language="PHP";
    $Language="WEIRD PHP";
    echo $language;
    ECHO $Language;
?>

<!-- PHP starter -->

<?php
// This is a comment
echo "Hello, World!";
?>

<!-- Variable -->
$name = "John";
$age = 25;
$price = 10.50;

% DATA TYPES
String: "Hello"

Integer: 10

Float: 10.5

Boolean: true / false

Array: ["apple", "banana"]

Null: null

% Conditional Statement

if ($age >= 18) {
    echo "Adult";
} else {
    echo "Minor";
}

<!-- Loops -->
// For loop
for ($i = 1; $i <= 5; $i++) {
    echo $i;
}

// While loop
$counter = 1;
while ($counter <= 5) {
    echo $counter++;
}

<!-- Function -->
function greet($name) {
    return "Hello, $name!";
}
echo greet("Anna");

<!-- Array -->
$fruits = ["Apple", "Banana", "Orange"];
echo $fruits[1]; // Banana

// Associative Array
$user = ["name" => "John", "age" => 25];
echo $user["name"];

<!-- Form handling(POST) -->
// form.html
<form method="POST" action="submit.php">
  <input type="text" name="username">
  <input type="submit">
</form>

// submit.php
<?php
$username = $_POST['username'];
echo "Hello, $username!";
?>

<!-- Common problem -->
| Problem                     | Reason                                 |
| --------------------------- | -------------------------------------- |
| `Undefined variable`        | Variable not declared before use       |
| `Undefined index`           | Accessing array key that doesn’t exist |
| `Parse error`               | Missing `;`, `{}`, or `)`              |
| `Headers already sent`      | Output sent before using `header()`    |
| `500 Internal Server Error` | Usually syntax error in PHP file       |
| `Cannot modify header`      | `echo` before `header()` causes this   |


<!-- Database MYSQLi -->

<?php
$hostName   = "localhost";
$dbUser     = "root";
$dbPassword = "";
$dbName     = "test_db";

//create connection
$conn = new mysqli($hostName, $dbUser, $dbPassword, $dbName);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!-- ----------------------------------- -->

<!-- Object-Oriented Style -->

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

➤ Uses: new mysqli()
➤ Error check: $conn->connect_error
➤ Best for: Large/modern projects, OOP code
➤ Reusable & organized

<!-- Procedural Style -->

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
➤ Uses: mysqli_connect()
➤ Error check: !$conn or mysqli_connect_error()
➤ Best for: Small scripts, beginners
➤ Quick and simple

PHP: PHP Hypertext Preprocessor
HTML: Hypertext Markup Language
SQL: Structured query language
RDBMS: Relational Database Management System

<!-- If you know how to write SQL like this: -->

<!-- sql -->

SELECT * FROM users WHERE username = 'admin';
You can plug that directly into PHP like this:

<!-- php -->

$sql = "SELECT * FROM users WHERE username = 'admin'";
Then just run it with PHP code.

% cdddrmo sample
<?php
require_once "save.php"; // Connect to MySQL (you must have $conn defined in save.php)

$sql = "SELECT * FROM incidents ORDER BY id DESC"; // SQL command
$result = mysqli_query($conn, $sql); // Run the query and store result in $result

?>


;
<!-- sas -->

CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

<!-- ---- -->

CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


<?php
$conn = new mysqli("localhost", "root", "", "your_db");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = $_POST["email"];

    $sql = "INSERT INTO users (username, password, email) 
            VALUES ('$username', '$password', '$email')";

    if ($conn->query($sql)) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!-- Registration Form -->
<form method="POST">
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <input type="email" name="email" placeholder="Email"><br>
  <button type="submit">Register</button>
</form>

<!-- -- -->
<?php
session_start();
$conn = new mysqli("localhost", "root", "", "your_db");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row["password"])) {
            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["username"] = $row["username"];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}
?>

<!-- Login Form -->
<form method="POST">
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Login</button>
</form>

project/
│
├── config/
│   └── database.php
│
├── public/
│   └── index.php

// index.php
require_once "../config/database.php";
