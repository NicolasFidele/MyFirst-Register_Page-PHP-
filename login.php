<?php include('database.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="stylesheet" type = "text/CSS" href="style.css">
</head>

<body>
<div class="login-form">
    
    <!-- route to include-login.php to check for errors and confirm login -->
    <fieldset>
    <form action = "include-login.php" method = "POST"> 
        <h1>Log in</h1>
        <input class = "text" type = "text" name="username" placeholder="USERNAME" required>
        <input class = "password" type = "password" name="password" placeholder="PASSWORD" required>
        <button type = "submit" name="login">LOG IN</button>
        <p><b>No Account?</b></p> 
    <a class="link-style" href = "register.php">Register</a>
    </form>
    </fieldset>

</div>
</body>
</html>