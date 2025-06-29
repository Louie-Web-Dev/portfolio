<?php
// $_GET, $_POST = special variables used to collect data from an HTML form
//                 data is sent to the file in the action attribute of <form>
//                 <form action="some_file.php" method="get">

// $_GET = Data is appended to the url
//         NOT SECURE
//         char limit
//         Bookmark is possible w/ values
//         GET requests can be cached
//         Better for a search page

// $_POST = Data is packaged inside the body of the HTTP request
//          MORE SECURE
//          No data limit
//          Cannot bookmark
//          GET requests are not cached
//          Better for submitting credentials
?>
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
    <form action="get_post.php" method="get">
    <label>username:</label>
    <input type="text" name="username" id="username">
    <label>password:</label>
    <input type="password" name="password"><br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    echo $_GET['username'];
    echo $_GET['password'];



// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     // Collect data from the form
//     $username = htmlspecialchars($_GET['username']);
//     $password = htmlspecialchars($_GET['password']);

//     // Display the collected data
//     echo "Username: $username<br>";
//     echo "Password: $password<br>";
// } else {
//     echo "No data submitted.";
// }
?>