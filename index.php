<?php
include('connection.php'); // Adjust the path as needed
// Your code for interacting with the database goes here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza_Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="banner">
        <h1>Pizzalicious</h1>
        <div class="login_box">
            <h3>LOGIN</h3>
            <br>
            <h4>Are You Admin?</h4>
            <input type="text" id="username" placeholder="Username"/>
            <input type="password" id="password" placeholder="Password"/>
            <a href="dashboard.html">
            <button type="submit">Continue as Admin</button>
            </a>
            <h4>Are You User?</h4>
            <a href="dashboard.html">
            <button type="submit">Continue as User</button>
        </a>
        </div>
    </div>
</body>
</html>